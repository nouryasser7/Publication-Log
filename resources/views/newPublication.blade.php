<!DOCTYPE html>
<html class="no-js" lang="en">
{{--<link rel="stylesheet" href="/app.css">--}}
<title>Publication Form</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="zbA2MotMMHQ5NeQA3kYEB2BzYdh0dKWZ0oOwaial">
    {{--    <meta name="description" content="Noadmin_web BA-HPC">--}}
    <link rel="stylesheet" href="/styles.css">

</head>
<body id="page-top" class="index" style="">
<nav class="navbar navbar-default" style="background-color:#687063;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll logotype" href="/">
                BA-HPC
            </a><br>
            <span style="color:#fff;font-family: 'PT Mono';" class="sub">The Supercomputing Facility</span>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="/quick-start">Walk Me Through</a>
                </li>
                <li><a href="https://hpc.bibalex.org/dashboard">Dashoard</a></li>
                <li><a href="/passless/logout">Logout</a></li>
                <li>
                    <a class="page-scroll" href="/redmine">Support</a>
                </li>
                <li>
                    <a class="page-scroll" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="wrap">

    {{--    <div class="container" style="">--}}
    {{--        <div class="container">--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container">
        <div class="body">
            <div class="proposal-form" style="height:100%;">
                <h3 class="text-center">Publication Form</h3>

                <div id="proposalForm">
                    <form method="POST" action="" accept-charset="UTF-8"  autocomplete="off" novalidate="novalidate" enctype="multipart/form-data"><input name="_token" type="hidden" value="zbA2MotMMHQ5NeQA3kYEB2BzYdh0dKWZ0oOwaial">
                        @csrf
                        <input class="form-control" name="create_proposal" type="hidden" value="zbA2MotMMHQ5NeQA3kYEB2BzYdh0dKWZ0oOwaial">

                        <div class="form-group has-success">
                            <label for="title" class="control-label">Paper Title</label>
                            <input class="form-control valid" placeholder="Paper Title" name="title" type="text"  id="title" aria-invalid="false" aria-describedby="title-error" ><span id="title-error" class="help-block error-help-block"></span>

                        </div>
                        {{--                        <input name="invisible" type="hidden" value="{{$projectID ?? ''}}">--}}
                        <div class="form-group">

                            <label for="degree_held" class="control-label">Author</label>
                            <select class="form-control valid" id="degree_held" name="author" aria-invalid="false" required>
                                <option value="">Author</option>
                                @foreach ($humans as $human)
                                    <option value="{{ $human->id }}" {{ $human->id == old('author_id') ? 'selected' : '' }}>{{ $human->first_name}} {{$human->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="degree_held" class="control-label">Conference</label>
                            <select class="form-control valid" id="degree_held" name="conference" aria-invalid="false" required>
                                <option value="">Conference Name</option>
                                @foreach ($conferences as $conference)
                                    <option value="{{ $conference->id }}" {{ $conference->id == old('author_id') ? 'selected' : '' }}>{{$conference->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">

                            <label for="GPU_hours" class="control-label">Publication Year</label>
                            <input class="form-control" placeholder="Publication Year" step="1" name="publication_year" min="2000" max="2022" type="number" id="GPU_hours" >
                        </div>

                        <div class="custom-file" class="form-group">
                            <label for="basic-url">Upload your Paper</label>
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            {{--                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <label for="basic-url">or Enter Paper's URL</label>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="https://www.example.com" required>
                        </div>

                        {{--                        <div class="form-group">--}}
                        {{--                            <div class="btn-wrapper">--}}
                        {{--                                --}}{{--                                {{$selectedID}} = window["selectedOption"];--}}
                        {{--                                <a class="btn btn-success btn-md center-block" type="submit">Save &amp; Continue</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="btn-wrapper">--}}
                        <button class="btn btn-success btn-md center-block" type="submit" id="create-proposal-submit" href="{{ route('submit') }}">Save &amp; Continue</button>
                    </form>
                </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">
                    <a href="http://bibalex.org/en/default" style="color:black;">
                        © Bibliotheca Alexandrina</a>
                </span>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="/logo.png">
            </div>
        </div>
    </div>
</footer>
<script src="https://hpc.bibalex.org/js/all.js"></script>

<script src="https://hpc.bibalex.org/vendor/jsvalidation/js/jsvalidation.js"></script>
<link media="all" type="text/css" rel="stylesheet" href="https://hpc.bibalex.org/css/select2.min.css">
<script src="https://hpc.bibalex.org/js/select2.full.min.js"></script>
<link media="all" type="text/css" rel="stylesheet" href="https://hpc.bibalex.org/css/project.css">
<script src="https://hpc.bibalex.org/js/project.js"></script>
<script>
    jQuery(document).ready(function(){

        $("form").validate({
            errorElement: 'span',
            errorClass: 'help-block error-help-block',

            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length ||
                    element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent());
                    // else just place the validation message immediatly after the input
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
            },


            ignore: ":hidden, [contenteditable='true']",

            /*
             // Uncomment this to mark as validated non required fields
             unhighlight: function(element) {
             $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
             },
             */
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
            },

            focusInvalid: false, // do not focus the last invalid input

            rules: {"title":{"laravelValidation":[["Required",[],"Title field is required.",true,"title"],["String",[],"Title must be a string.",false,"title"],["Max",["100"],"Title may not be greater than 100 characters.",false,"title"]]},"summary":{"laravelValidation":[["Required",[]," ",true,"summary"],["String",[],"Summary must be a string.",false,"summary"]]},"scientific_case":{"laravelValidation":[["Required",[]," ",true,"scientific_case"],["String",[],"Scientific Case must be a string.",false,"scientific_case"]]},"CPU_hours":{"laravelValidation":[["Required",[],"CPU Hours field is required.",true,"CPU_hours"],["Integer",[],"CPU Hours must be an integer.",false,"CPU_hours"],["Min",["0"],"CPU Hours must be at least 0.",false,"CPU_hours"]]},"GPU_hours":{"laravelValidation":[["Required",[],"GPU Hours field is required.",true,"GPU_hours"],["Integer",[],"GPU Hours must be an integer.",false,"GPU_hours"],["Min",["0"],"GPU Hours must be at least 0.",false,"GPU_hours"]]},"CPU_memory":{"laravelValidation":[["Required",[],"CPU Memory field is required.",true,"CPU_memory"]]},"GPU_memory":{"laravelValidation":[["Required",[],"GPU Memory field is required.",true,"GPU_memory"]]},"storage_id":{"laravelValidation":[["Required",[],"Storage field is required.",true,"storage_id"]]},"duration":{"laravelValidation":[["Required",[],"Duration field is required.",true,"duration"],["Integer",[],"Duration must be an integer.",false,"duration"],["Min",["1"],"Duration must be at least 1.",false,"duration"]]},"domain_id":{"laravelValidation":[["Required",[],"Domain field is required.",true,"domain_id"]]},"degree_pursued":{"laravelValidation":[["Required",[],"Degree Pursued field is required.",true,"degree_pursued"]]},"type":{"laravelValidation":[["Required",[],"Type field is required.",true,"type"]]},"institution_id":{"laravelValidation":[["Required",[],"Institution field is required.",true,"institution_id"]]},"institution_name":{"laravelValidation":[["Max",["100"],"institution name may not be greater than 100 characters.",false,"institution_name"],["String",[],"institution name must be a string.",false,"institution_name"],["RequiredIf",["institution_id","other"],"institution name field is required when Institution is other.",true,"institution_name"]]},"software":{"laravelValidation":[["Required",[],"Software field is required.",true,"software"]]},"software_version":{"laravelValidation":[["Required",[],"Software Version field is required.",true,"software_version"]]}}        })
    })
</script>

{{--<script src="https://hpc.bibalex.org/js/help-block.js"></script>--}}
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script>jQuery.noConflict();</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function(){
        $('.form-group').has('#domain_id').addClass('domain_id');
        $('.form-group').has('#type').addClass('type');
        $('.form-group').has('#degree_held').addClass('degree_held');
        // $('.form-group').has('#degree_pursued').addClass('degree_pursued');
        // $('.form-group').has('#dept_id').addClass('dept_id');
        // $('.form-group').has('#institution_id').addClass('institution_id');
        // $('.form-group').has('#institutionName').css('display','none');
    });

    // <br/>
</script>


</body>

</html>
