<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Drixo - Responsive Booststrap 4 Admin & Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>  
                <a class="navbar-brand " ><img src="../urnd.jpg" alt="Logo"></a>
             
              
            </div>
<br>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/redirect')}}"> <i class="menu-icon fa fa-pencil-square-o"></i>View Project </a>
                    </li>
                    
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                   
                       

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <x-app-layout>

                    </x-app-layout>
                        </a>

                      
                    </div>

                   

                </div>
            </div> <center><strong style ="padding: 25px 50px;" class="card-title">Project Leader</strong><center>

        </header><!-- /header -->
        <!-- Header-->

     
                    <div class="page-title">
                       
                    </div>
              
                    <div class="content mt-3">
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            
            <strong><center>Edit Project</center></strong> 
        <div class="card-body card-block">
        <form action="/editleader" method="post" enctype="multipart/form-data" class="form-horizontal">    
            @csrf
            <input type="hidden" value="{{$x['project_id']}}" name="leader_id">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Type</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select" id="select" class="form-control" disabled>
                           
                            <option {{$x['project_type'] == '1' ? 'selected' : '' }} value="1">Consultancy project</option>
                            <option {{$x['project_type'] == '2' ? 'selected' : '' }} value="2">Research grant project</option>
                           
                        </select>
                    </div>
                </div>
                    
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Project Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="project" value="{{$x['project_name']}}" class="form-control"readonly><small class="form-text text-muted" ></small></div>
                </div>
                {{ old('title') == '1' ? 'selected' : '' }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Leader</label></div>
                    <div class="col-12 col-md-9">
                    <select name="select1" id="select" class="form-control" disabled>
                       
                       @foreach($data as $d) 
                       
                       @if ($d->role=='1') 
                       <option value="{{$x->project_leader}}"{{$d->id==$x->project_leader ? 'selected="selected"' : '' }}">{{ $d->name }}</option>

                 
                       @endif
                     
                       @endforeach
                       </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Start Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="sd" value="" class="form-control"><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">End Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="rd" name="ed" placeholder="Enter End Date" class="form-control"><small class="help-block form-text"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duration</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="duration" placeholder="Enter Duration in months"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="cost" placeholder="Enter Cost exm: RM2000"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="client" placeholder="Enter Client Name"  class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Members</label></div>
                        <div class="col-12 col-md-9">   
        
                            <select name="select5" data-placeholder="Choose Team Members " multiple class="standardSelect" class="form-control">
                                @foreach($data as $d)
                     
                                @if ($d->role=='2') 
                            
                                
                                <option value="{{$d->id }}">{{ $d->name }}</option>
                                @endif
                            
                                @endforeach  
                                </select>

                        </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project progress</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select6" class="form-control">
                            <option value="" selected disabled hidden>Select Project Progress </option>
                            <option value="1">Inception</option>
                            <option value="2">Milestone 1</option>
                            <option value="3">Milestone 2</option>
                            <option value="4">Final Report</option>
                            <option value="5">Closing</option>
                           
                        </select>
                    </div>
                </div>
       

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Project Status</label></div>
                    <div class="col-12 col-md-9">
                        <select  name="select7" id="select" class="form-control">
                            <option value="" selected disabled hidden>Select Project Status </option>
                            <option value="1">On track</option>
                            <option value="2">Delayed</option>
                            <option value="3">Extended</option>
                            <option value="4">Completed</option>
                            
                            
                        </select>
                    </div>
                </div>
              
           
     
        <div class="card-footer">
            <button type="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Edit </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
           
        </div>
       
</form>
    </div>
</div><!-- .animated -->
</div><!-- .content -->

</div>
</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../vendors/chosen/chosen.jquery.min.js"></script>


<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/js/init-scripts/data-table/datatables-init.js"></script>


<script>
    
function myFunction() {
  alert("Successfully edited the project!");
}

</script>
<script>

$("select :selected").each(function(){
    $(this).parent().data("default", this);
});

$("select").change(function(e) {
    $($(this).data("default")).prop("selected", true);
});
    </script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>

</html>


