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

        <?php 
        
            $bg = array('bg-aqua', 'bg-green', 'bg-yellow', 'bg-red', 'bg-blue', 'bg-purple', 'bg-teal', 'bg-maroon');
            shuffle($bg);
        
         ?>
        <div class="row">
            @foreach ($hitungs as $hitung)
            
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box <?php echo  $bg[0] ?>">
                    <div class="inner">
                        <h3>{{$hitung->nama_kls}}</h3>
                        <p>Nama Kelas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-home"></i>
                    </div>
                    <a target="new" href="{{ route('cetak', ['data'=>'siswa', 'kelas'=>$hitung->id]) }}" class="small-box-footer">
                        Print Now <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            @endforeach
        </div>
        <hr>
   </section><!-- /.content -->
</aside><!-- /.right-side -->

@stop