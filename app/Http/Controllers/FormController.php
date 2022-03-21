<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Conference;
use App\Models\Human;
use App\Models\Publication;
use App\Models\PubAuthor;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function myForm($slug)
    {
        $humans = Human::all();
        $conferences = Conference::all();
        $publication = DB::table('publication')->where('id', '=', $slug)->first();
        $author = DB::table('_pub_author')->where('publication_id', '=', $slug)->join('human', '_pub_author.human_id', '=', 'human.id')->select('human.first_name','human.last_name','human.id')->first();
        $conference = DB::table('conference')->where('id','=',$publication->conf_id)->select('conference.name','conference.id')->first();
        //return view("newForm", ['authorsList' => $humans, 'conferences' => $conferences,'pub_id' => $slug,'publication'=>$publication]);
        return view("newForm", compact('humans','conferences','publication','author','conference'));
    }
    public function newPub(){
        $humans = Human::all();
        $conferences = Conference::all();
        $publication = DB::table('publication')->get();
        $author = DB::table('human')->select('human.first_name','human.last_name')->get();
        $conference = DB::table('conference')->select('conference.name')->get();
        //return view("newForm", ['authorsList' => $humans, 'conferences' => $conferences,'pub_id' => $slug,'publication'=>$publication]);
        return view("newPublication", compact('humans','conferences','publication','author','conference'));
    }
    public function update(Request $request,$slug)
    {
        $publication = new Publication;
        $pub_author = new PubAuthor;
        $publication->title = $request->title;
        $pub_author->human_id = $request->author;
        //$oldHuman = DB::table('_pub_author')->where('human_id','=',$request->author)->first();
        $pub_author->human_edit = DB::table('_pub_author')->where('human_id','=',$request->author)->increment('human_edit');
        $pub_author->publication_id = $slug;
        //$pub_author->human_edit = 0;
        $publication->publication_year = $request->publication_year;
        $publication->conf_id = $request->conference;
        //$publication->project_id = $request->invisible;
        $proj_id = DB::table('publication')->where('id','=',$slug)->first();
        $publication->project_id = $proj_id->project_id;
        //$oldProj = DB::table('publication')->where('id','=',$slug)->first();
        $publication->project_edit = DB::table('publication')->where('id','=',$slug)->increment('project_edit');
        $request->validate([
            'file' => 'required'
        ]);
        //$publication->toArray();

        //if($request->file()) {
        //$fileName = $slug;
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $request->file('file')->storeAs('publication', $fileName, 'app');
        $publication->file_name = $fileName;
        //$fileModel->file_path = '/storage/' . $filePath;

//            return back()
//                ->with('success','File has been uploaded.')
//                ->with('file', $fileName);
        //}
        $publication->save();
        $pub_author->save();
        //return redirect('/newForm')->with('success', 'You are successfully logged in');
        return view('successEdit');
        //return $proj_id;
        //return view("submit");
    }

    public function store(Request $request){
        $publication = new Publication;
        $pub_author = new PubAuthor;
        $publication->title = $request->title;
        $pub_author->human_id = $request->author;
        $pub_author->human_edit = 0;
        //project id??
        $publication->project_id = 3;
        $publication->project_edit = 1;
        $publication->publication_year = $request->publication_year;
        $publication->conf_id = $request->conference;
        $request->validate([
            'file' => 'required'
        ]);

        $fileName = time().'_'.$request->file->getClientOriginalName();
        $request->file('file')->storeAs('publication', $fileName, 'app');
        $publication->file_name = $fileName;
        $publication->save();
        $pub_author->publication_id = $publication->id;
        $pub_author->save();
        return view('submit');
    }
    public function mailSend(){
        $details = [
            'title' => 'Title: Mail from  BA-HPC Team',
            'body' => 'Body: This the file url of project'
        ];
        Mail::to()->send(new SendMail($details));
    }

    public function welcomePage()
    {
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }

    public function submit(){
        return view('successEdit');
    }
    public function listPublication($slug)
    {
        $publications = DB::table('publication')->where('project_id', '=', $slug)->get();
//        $project_id = $slug;
//        $this->store($project_id);
        $author = DB::table('publication')->where('project_id', '=', $slug)->join('_pub_author', 'publication.id', '=', '_pub_author.publication_id')->join('human', '_pub_author.human_id', '=', 'human.id')->select('human.first_name','human.last_name','human.title')->get();
        //$author = DB::table('_pub_author')->where('')
        return view('listPublications', ['publications' => $publications], ['pub_authors' => $author]);
    }

//    public function index(){
//        $events = Human::with('publications')->get();
//        dd($events);
//        return view('welcome');
//    }

}
