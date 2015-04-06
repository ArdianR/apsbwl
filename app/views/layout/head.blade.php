<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Aplikasi Pendataan Siswa">
    <meta name="author" content="ROis New VersiOn">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
    <title>
        @if(Request::segment(1)) 
        APS - {{ ucfirst(Request::segment(1)) }}
        @else
        {{'Aplikasi Pendataan Siswa MTs sulfa'}}
        @endif

        @if(Request::segment(2)) 
        | {{ ucfirst(Request::segment(2)) }}
        @endif
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
    {{HTML::style('css/bootstrap.min.css')}}
    <!-- font Awesome -->
    {{HTML::style('css/font-awesome.min.css')}}
   
    <!-- Ionicons -->
    {{HTML::style('css/ionicons.min.css')}}
    
    <!-- Morris chart -->
    {{HTML::style('css/morris/morris.css')}}
 
    <!-- jvectormap -->
    {{-- <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> --}}
    <!-- fullCalendar -->
    {{-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Daterange picker -->
    {{-- <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" /> --}}
    <!-- bootstrap wysihtml5 - text editor -->
    {{-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Theme style -->
    {{HTML::style('css/AdminLTE.css')}}
    {{HTML::style('css/style-gw.css')}}
    
    {{-- {{HTML::script('datatables/jquery.js')}} --}}
    {{HTML::script('js/jquery-1.11.2.js')}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{ URL::to('/') }}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                APS
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                      <!-- User Account: style can be found in dropdown.less -->
                      @if(Auth::check())
                          {{-- expr --}}
                      
                      <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>{{Auth::user()->nama}} <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                @if (Auth::user()->jk == 'L')
                       <img src="{{asset('img/avatar5.png')}}" class="img-circle" title="User Image" />
                   @else
                        <img src="{{asset('img/avatar3.png')}}" class="img-circle" title="User Image" />
                    @endif
                                <p>
                                   {{Auth::user()->nama}}
                                    <small>Admin</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                                <!-- <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @else
                            <li class="task-menu">
                                <a href="{{ route('login') }}" title="Login">
                                    <i class="fa fa-sign-in"></i> 
                                    Login
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>