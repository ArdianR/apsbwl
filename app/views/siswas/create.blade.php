@extends('layout.default')
@section('content')

<!-- jQuery UI 1.10.4 -->
{{HTML::style('css/jquery-ui/jquery-ui-1.10.4.min.css')}}
{{HTML::script('js/jquery-ui-1.10.4.min.js')}}

<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small> Bingo!!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active">Create Siswa</li>
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
    			<div class="box box-warning">
    				<div class="box-header">
    					<h3 class="box-title">Form Input Siswa</h3>
    				</div>
    				<div class="box-body">
    					{{Form::open(['url'=>'siswa', 'method'=>'post', 'class'=>'form'])}}

    						<div class="form-group {{$errors->has('nis') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nis', Input::old('nis'), ['class'=>'form-control', 'placeholder'=>'NIS', 'id'=>'nis', 'required'])}}
    							{{$errors->first('nis', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('nama_siswa') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nama_siswa', Input::old('nama_siswa'), ['class'=>'form-control', 'placeholder'=>'Nama Siswa', 'id'=>'nama_siswa', 'required'])}}
    							{{$errors->first('nama_siswa', '<span class="help-block">:message</span>')}}
    						</div>

                            <div class="form-group {{$errors->has('kelas') ? 'has-error' : ''}}">
                                {{Form::input('text', 'kelas', Input::old('kelas'), ['class'=>'form-control', 'placeholder'=>'Kelas', 'id'=>'kelas', 'required'])}}
                                {{$errors->first('kelas', '<span class="help-block">:message</span>')}}
                            </div>

                            <div class="form-group {{$errors->has('idkelas') ? 'has-error' : ''}}">
                                {{Form::input('text', 'idkelas', Input::old('idkelas'), ['placeholder'=>'ID Kelas | isian otomatis', 'id'=>'idkelas', 'required', 'readonly'])}}
                                {{$errors->first('idkelas', '<span class="help-block">:message</span>')}}
                            </div>

    						<div class="form-group {{$errors->has('jk') ? 'has-error' : ''}}">
    							
    							{{Form::radio('jk', 'L', false, ['class'=>'form-control'])}} Laki - laki
    							{{Form::radio('jk', 'P', '', ['class'=>'form-control'])}} Perempuan
    							{{$errors->first('jk', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('ttl') ? 'has-error' : ''}}">
    							{{Form::input('text', 'ttl', Input::old('ttl'), ['class'=>'form-control', 'placeholder'=>'TTL', 'id'=>'ttl', 'required'])}}
    							{{$errors->first('ttl', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('ayah') ? 'has-error' : ''}}">
    							{{Form::input('text', 'ayah', Input::old('ayah'), ['class'=>'form-control', 'placeholder'=>'Nama Ayah', 'id'=>'ayah', 'required'])}}
    							{{$errors->first('ayah', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('ibu') ? 'has-error' : ''}}">
    							{{Form::input('text', 'ibu', Input::old('ibu'), ['class'=>'form-control', 'placeholder'=>'Nama Ibu', 'id'=>'ibu', 'required'])}}
    							{{$errors->first('ibu', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
    							{{Form::input('text', 'alamat', Input::old('alamat'), ['class'=>'form-control', 'placeholder'=>'Alamat', 'id'=>'alamat', 'required'])}}
    							{{$errors->first('alamat', '<span class="help-block">:message</span>')}}
    						</div>

    						<div class="form-group {{$errors->has('wali_kls') ? 'has-error' : ''}}">
    							{{Form::input('text', 'wali_kls', Input::old('wali_kls'), ['class'=>'form-control', 'placeholder'=>'Wali Kelas', 'id'=>'wali_kls', 'required'])}}
    							{{$errors->first('wali_kls', '<span class="help-block">:message</span>')}}
    						</div>

                            <div class="form-group {{$errors->has('idguru') ? 'has-error' : ''}}">
                                <input type="text" name="idguru" id="idguru" placeholder="ID Guru | isian otomatis" value="{{Input::old('idguru')}}" required readonly="">
                                {{$errors->first('idguru', '<span class="help-block">:message</span>')}}
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

<script type="text/javascript">
     $(document).ready(function(){
        $("#wali_kls").autocomplete({
            source: '../../getwali',
            minLenght: 1,
            select: function(event, ui){
                $('#idguru').val(ui.item.id);
            }
        });

        $("#kelas").autocomplete({
            source: '../../getkelas',
            minLenght: 1,
            select: function(event, ui){
                $('#idkelas').val(ui.item.id);
            }
        });
     });
</script>
@stop