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

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        .modal-backdrop {
  z-index: -1;
}
.modal.open {

  opacity:1;

  visibility:visible;

}

        </style>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand " ><img src="urnd.jpg" alt="Logo"></a>
                
            </div>
            <br>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active">
                        <a href="{{url('/redirect')}}"> <i class="menu-icon fa fa-pencil-square-o"></i>Create Project </a>
                </li>
                <li class="active">
                        <a href="{{url('/manageproject')}}"> <i class="menu-icon fa fa-dashboard"></i>Manage Project </a>
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
                       
                            
                            <x-app-layout>

                            </x-app-layout>
                    

                      
                    </div>

           

                </div>   
            </div> <center><strong style ="padding: 25px 50px;" class="card-title">Project Manager</strong><center>

        </header><!-- /header -->
        <!-- Header-->

       

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Project</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Project Type</th>
                                            <th>Project Name</th>
                                            <th>Project Leader</th>
                                    
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($x as $paper)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>
                                                @if($paper->project_type=='1') 
                                            
                                                    Consultancy Project 
                                                @else
                                            
                                                    Research Grant Project
                                            
                                                @endif
                                            
                                            <td>{{$paper->project_name}}</td>

                                            <td>
                                                @if($paper->project_leader==$paper->id)
                                            
                                                    {{$paper->name}}
                                            
                                                @endif
                                            </td>

                                            <td>
                                 
                                               
                                                <a href="{{"upd/".$paper->project_id}}">
                                                <button type="button" class="btn btn-primary">Edit </button>
                                                </a> </href> 
                                                
                                                <a href="{{"del/".$paper->project_id}}">
                                                   <button  onclick="return confirm('Are you sure you want to delete this entry?')" class= "btn btn-danger">Delete</button>
                                                </a> </href> 
                                              
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="modal fade" id="demoModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                         <div class="modal-header">
                                            <h4 class="modal-title" align="center"><b>Edit Project </b></h4>
                    
                                        </div>
                                            <div class="modal-body">
                                                 <form action="/edit" method="POST">
                                                 @csrf
                                                        <div class="box-body">
          
                                                                <div class="form-group">
                                                                     <label for="exampleInputEmail1">Project Type</label> 
                    
                                                                         <select name="select" id="select" class="form-control">
                           
                                                                                <option value="1">Consultancy project</option>
                                                                                <option value="2">Research grant project</option>
                           
                                                                         </select>
                    
                                                                </div>

                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Project Name</label> 
                                                                    <input type="text" class="form-control" name="username" placeholder="Enter username" value="">
                                                                </div>

                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Project Type</label> 
                    
                                                                     <select name="select" id="select" class="form-control">
                           
                                                                        <option value="1">Consultancy project</option>
                                                                        <option value="2">Research grant project</option>
                           
                                                                    </select>
                    
                                                 </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

   
</body>

</html>
