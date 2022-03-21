<!DOCTYPE html>
<html class="no-js" lang="en">
<title>List Projects</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="zbA2MotMMHQ5NeQA3kYEB2BzYdh0dKWZ0oOwaial">
    {{--    <meta name="description" content="Noadmin_web BA-HPC">--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="/styles.css">
{{--    <link rel="stylesheet" href="/styles.scss">--}}

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

    <div class="container">
        <div class="body">
            <div class="proposal-form" style="height:100%;">
                <h3 class="text-center">Projects List</h3><br>
                <div class="list-group">
                    @foreach ($projects as $project)
                    <a href="/list-publication/{{$project->id}}" class="list-group-item list-group-item-action">
                        <h4><i>{{$project->title}}</i></h4>
                        <h4 style="color:#9370DB;">Summary:</h4> <h5 style="font-weight:normal">{{$project->summary}}</h5>
                        <h4 style="color:#9370DB;">Scientific Case: </h4><h5 style="font-weight:normal">{{$project->scientific_case}}</h5>
{{--                        <a href="/list-publication/{{$project->id}}">Go to Project</a>--}}
                    </a>
                    @endforeach
                </div>

{{--                <p>--}}
{{--                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>--}}
{{--                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>--}}
{{--                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>--}}
{{--                </p>--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="collapse multi-collapse" id="multiCollapseExample1">--}}
{{--                            <div class="card card-body">--}}
{{--                                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <div class="collapse multi-collapse" id="multiCollapseExample2">--}}
{{--                            <div class="card card-body">--}}
{{--                                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="accordion" id="accordionExample">--}}
{{--                    <div class="accordion-item">--}}
{{--                        <h2 class="accordion-header" id="headingOne">--}}
{{--                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                Accordion Item #1--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
{{--                            <div class="accordion-body">--}}
{{--                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="accordion-item">--}}
{{--                        <h2 class="accordion-header" id="headingTwo">--}}
{{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                Accordion Item #2--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
{{--                            <div class="accordion-body">--}}
{{--                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="accordion-item">--}}
{{--                        <h2 class="accordion-header" id="headingThree">--}}
{{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                Accordion Item #3--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
{{--                            <div class="accordion-body">--}}
{{--                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div id="proposalForm">

                        </div>
                        <div class="form-group">
                            <div class="btn-wrapper">
                            </div>
                        </div>
                    </form>
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

<script src="https://hpc.bibalex.org/js/help-block.js"></script>
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
        $('.form-group').has('#degree_pursued').addClass('degree_pursued');
        $('.form-group').has('#dept_id').addClass('dept_id');
        $('.form-group').has('#institution_id').addClass('institution_id');
        $('.form-group').has('#institutionName').css('display','none');
    });

    <br/>
</script>

</body>
</html>
