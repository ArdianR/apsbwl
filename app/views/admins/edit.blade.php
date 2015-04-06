@extends('layout.default')
@section('content')

<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small> Bingo!!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active">Edit Admin</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    @if(Session::has('message'))
        <div class="alert hilang alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('message')}}</strong>
        </div>
    @endif

    	<div class="row">
    		<div class="col-md-7">
    			<div class="box box-primary">
    				<div class="box-header">
    					<h3 class="box-title">Form Edit Admin #{{$admin->nama}}</h3>
    				</div>
    				<div class="box-body">
    					{{Form::model($admin, ['url'=>'admin/'.$admin->id, 'method'=>'put', 'class'=>'form'])}}

    						<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nama',null, ['class'=>'form-control', 'placeholder'=>'Nama', 'id'=>'nama', 'required'])}}
    							{{$errors->first('nama', '<span class="help-block">:message</span>')}}
    						</div>

                            <div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
                                {{Form::radio('jk', 'L', false, ['class'=>'form-control'])}} Laki - laki
                                {{Form::radio('jk', 'P', '', ['class'=>'form-control'])}} Perempuan
                                {{$errors->first('jk', '<span class="help-block">:message</span>')}}
                            </div>

                            <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                                {{Form::input('text', 'username', null, ['class'=>'form-control', 'placeholder'=>'Username', 'id'=>'username', 'required'])}}
                                {{$errors->first('username', '<span class="help-block">:message</span>')}}
                            </div>

                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Pasword', 'id'=>'password', 'required'])}}
                                {{$errors->first('password', '<span class="help-block">:message</span>')}}

                            </div>

                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                {{Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email', 'required'])}}
                                {{$errors->first('email', '<span class="help-block">:message</span>')}}
                            </div>

    						<div class="box-footer">
    							{{Form::submit('Create', ['class'=>'btn btn-md btn-primary'])}}
    							{{Form::reset('Reset', ['class'=>'btn btn-md btn-warning'])}}
    						</div>
    					{{Form::close()}}
    				</div>
    			</div>
    		</div>
    	</div>
    	
    </section><!-- /.content -->
</aside><!-- /.right-side -->

@stop