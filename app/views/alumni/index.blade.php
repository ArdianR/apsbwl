@extends('layout.default')
@section('content')

{{HTML::style('datatables/jquery.dataTables.css')}}
{{-- {{HTML::script('datatables/jquery.js')}} --}}
{{HTML::script('datatables/jquery.dataTables.js')}}

<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small> Bingo!!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @if(Session::has('message'))
        <div class="alert hilang alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('message')}}
        </div>
        @endif

        {{$datatable->render()}}
        <hr>
   </section><!-- /.content -->
</aside><!-- /.right-side -->

@stop