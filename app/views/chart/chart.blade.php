@extends('layout.default')
@section('content')

{{HTML::script('js/Chart.js')}}

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

        <div class="row">
            <div id="perf"></div>
            <?php //echo Lava::LineChart('Stocks')->outputInto('perf');
                //echo Lava::div(600, 300); ?>

            <div style="width: 60%">
                <canvas id="canvas"  width="350" height="200"></canvas>
            </div>
            <?php $tahun = array() ?>
            <?php $jumlah = array() ?>
            @foreach ($users as $a)
                <?php $tahun[] = $a->tahun; ?>
                <?php $jumlah[] = $a->jumlah; ?>
            @endforeach
             <hr>
            <pre>
                {{-- {{print_r($users)}} --}}
            </pre>
        </div>
        <hr>
   </section><!-- /.content -->
</aside><!-- /.right-side -->
<script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

    var barChartData = {
        labels : {{json_encode($tahun)}},
        
        datasets : [
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,0.8)",
                highlightFill : "rgba(151,187,205,0.75)",
                highlightStroke : "rgba(151,187,205,1)",
                data : {{json_encode($jumlah)}}
                
            },
            
        ]

    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }

    </script>
@stop