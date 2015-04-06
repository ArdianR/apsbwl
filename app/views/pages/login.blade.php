<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Admin | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        {{HTML::style('css/bootstrap.min.css')}}
        <!-- font Awesome -->
        {{HTML::style('css/font-awesome.min.css')}}
        {{HTML::style('css/AdminLTE.css')}}
        {{HTML::style('css/style-gw.css')}}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Log In</div>

            {{Form::open(['url'=>'login', 'method'=>'post'])}}
                <div class="bg-blue" style="padding: 10px 20px; background: #fff; /* color: #444; */">
                    {{-- {{alert info}} --}}
                    @if(Session::has('message'))
                    <div class="alert alert-info alert-dismissable">
                        <i class="fa fa-info"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('message')}}
                    </div>
                    @endif

                    <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                        {{ Form::text('username', Input::old('username'), ['class'=>'form-control','placeholder'=>'Username', 'required', 'autofocus']) }}
                        {{$errors->first('username', '<span class="help-block">:message</span>')}}
                    </div>

                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        {{ Form::password('password', ['class'=>'form-control','placeholder'=>'Password', 'required']) }}
                        {{$errors->first('password', '<span class="help-block">:message</span>')}}
                        
                    </div>
                </div>
                <div class="footer">
                    {{Form::submit('Login', ['class'=>'btn bg-olive btn-block'])}}
                </div>
            {{Form::close()}}


        </div>


       
                <!-- jQuery 1.11.2 -->
        {{HTML::script('js/jquery-1.11.2.js')}}
        
        <!-- Bootstrap -->
        {{HTML::script('js/bootstrap.min.js')}}
                <!-- AdminLTE App -->
        {{HTML::script("js/AdminLTE/app.js")}}
    </body>
</html>