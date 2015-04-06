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
            <li class="active">Create Guru</li>
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
    			<div class="box box-danger">
    				<div class="box-header">
    					<h3 class="box-title">Form Edi Guru {{$guru->nama_guru}}</h3>
    				</div>
    				<div class="box-body">
    					{{Form::model($guru, ['url'=>'guru/'.$guru->id, 'method'=>'put', 'class'=>'form'])}}

    						<div class="form-group {{$errors->has('niy') ? 'has-error' : ''}}">
    							{{Form::input('text', 'niy', null, ['class'=>'form-control', 'placeholder'=>'NIY', 'id'=>'niy', 'required'])}}
    							{{$errors->first('niy', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('nuptk') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nuptk', null, ['class'=>'form-control', 'placeholder'=>'NUPTK', 'id'=>'nuptk', 'required'])}}
    							{{$errors->first('nuptk', '<span class="help-block">:message</span>')}}
    						</div>

                            <div class="form-group {{$errors->has('ttl') ? 'has-error' : ''}}">
                                {{Form::input('text', 'ttl', null, ['class'=>'form-control', 'placeholder'=>'TTL', 'id'=>'ttl', 'required'])}}
                                {{$errors->first('ttl', '<span class="help-block">:message</span>')}}
                            </div>

    						<div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
    							
    							{{Form::radio('jk', 'L', null, ['class'=>'form-control'])}} Laki - laki
    							{{Form::radio('jk', 'P', null, ['class'=>'form-control'])}} Perempuan
    							{{$errors->first('jk', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('pendidikan') ? 'has-error' : ''}}">
    							{{Form::input('text', 'pendidikan', null, ['class'=>'form-control', 'placeholder'=>'Pendidikan Terakhir', 'id'=>'pendidikan', 'required'])}}
    							{{$errors->first('pendidikan', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('nama_guru') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nama_guru', null, ['class'=>'form-control', 'placeholder'=>'Nama Guru', 'id'=>'nama_guru', 'required'])}}
    							{{$errors->first('nama_guru', '<span class="help-block">:message</span>')}}
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