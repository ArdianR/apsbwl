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
            <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Dashboard</li>
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
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$guru}}</h3>
                        <p>Total Guru</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$kelas}}</h3>
                        <p>Total Kelas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-home"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$siswa}}</h3>
                        <p>Total Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3> {{$admin}}</h3>
                        <p>Total Admin </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div>

        <hr>
        <h3>Jumlah siswa perkelas</h3>
        <div class="col-sm-5">
            <div class="pad">
                <!-- Progress bars -->
                @foreach ($users as $user)
                <div class="clearfix">
                <span class="pull-left">{{$user->abc}}</span>
                    <small class="pull-right">{{$user->jumlah}}/100 Siswa</small>
                </div>
                <div class="progress progress-striped sm active">
                    <div class="progress-bar progress-bar-green" style="width: {{$user->jumlah}}%;"></div>
                </div>
                
                @endforeach
            </div><!-- /.pad -->
        </div><!-- /.col -->
        {{-- @foreach ($thn as $th) --}}
            {{-- {{$thn->created_at}}<br> --}}
            
        {{-- @endforeach --}}
   </section><!-- /.content -->
</aside><!-- /.right-side -->

@stop