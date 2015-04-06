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
            <li class="active">Create Kelas</li>
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
    			<div class="box box-info">
    				<div class="box-header">
    					<h3 class="box-title">Form Input Kelas</h3>
    				</div>
    				<div class="box-body">
    					{{Form::open(['url'=>'kelas', 'method'=>'post', 'class'=>'form'])}}

    						<div class="form-group {{$errors->has('nama_kls') ? 'has-error' : ''}}">
    							{{Form::input('text', 'nama_kls', Input::old('nama_kls'), ['class'=>'form-control', 'placeholder'=>'Nama Kelas', 'id'=>'nama_kls', 'required'])}}
    							{{$errors->first('nama_kls', '<span class="help-block">:message</span>')}}
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
     });
</script>

@stop