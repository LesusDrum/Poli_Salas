<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projeto Poli Salas</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('assets/startmin-master/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{url('assets/startmin-master/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Social Buttons CSS -->
        <link href="{{url('assets/startmin-master/css/bootstrap-social.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('assets/startmin-master/css/startmin.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url('assets/startmin-master/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Timeline CSS -->
        <link href="{{url('assets/startmin-master/css/timeline.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url('assets/startmin-master/css/morris.css')}}" rel="stylesheet">
        
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="{{url('assets/j-query/jquery.dataTables.min.css')}}"/>
        
        <!-- Google Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
			footer {
			padding:10px;
			margin: 10px;
			box-sizing: border box;
			background-color: #202020;
			color: #FFFFFF;
			display: flex;
			justify-content: space-around;
			}
        </style>
        
    </head>
    <body>
    
        <div id="wrapper">
            
            @include('templates.nav_bar');
            
    
                
            
         
            <div id="page-wrapper">
          
            
                <div class="container-fluid">
                    
               
                    @yield('content')
                </div>
          

                
                
              
                <!-- /.container-fluid -->
                   <div class="panel-footer">
                      
                        @extends('templates/footer')
                 
                    </div>
            </div>
            <!-- /#page-wrapper -->
             
        </div>    
        <!-- /#wrapper -->
       
        <!-- jQuery -->
        <script src="{{url('assets/startmin-master/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core J..avaScript -->
        <script src="{{url('assets/startmin-master/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{url('assets/startmin-master/js/metisMenu.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{url('assets/startmin-master/js/startmin.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{url('assets/startmin-master/js/raphael.min.js')}}"></script>
        <script src="{{url('assets/startmin-master/js/morris.min.js')}}"></script>
        <script src="{{url('-master/js/morris-data.js')}}"></script>
     
        <!-- DataTables JavaScript -->
        <script src="{{url('assets/j-query/jquery-3.5.1.js')}}"></script>
        <script src="{{url('assets/js/javascript.js')}}"></script>
        <script src="{{url('assets/j-query/jquery.dataTables.min.js')}}"></script>
        <script>
            $(document).ready(function() {
            $('#example').DataTable();
            } );
        </script>
        

    </body>
</html>