@extends('layout.default')
@section('content')

<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Aplikasi pendataan siswa MTs Sultan Fatah Gaji, Guntur, Demak, Jawa Tengah.
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Aplikasi
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <div class="col-md-3">
                        <img width="200" height="200" src="{{ asset('img/logo-mts.jpg') }}">
                    </div>
                    <div class="col-md-5">
                        <p>Aplikasi pendataan siswa MTs Sultan Fatah</p>
                        <p>Dibuat untuk memudahkan dalam pendataan siswa dan sekaligus sebagai hasil dari Kuliah Praktek</p>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Programmer
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">

                    <div class="col-lg-6">
                        <h4>Get in touch with me by look at <strong>contact information below</strong></h4>
                        <p><i class="fa fa-user"></i> Ahmad Roisul Musthofa</p>
                        <p><i class="fa fa-phone"></i> 08985716073</p>
                        <p><i class="fa fa-qrcode"></i> 75E7FBEA</p>

                        or check this out
                        <ul class="social-network">
                            <a href="https://www.facebook.com/rois.mustofa" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a> | 
                            <a href="https://twitter.com/chagaji" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a> | 
                            <a href="https://plus.google.com/u/0/+RoisulAsolole/" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a>
                        </ul>
                    </div>
                </div>
                </div>
              </div>
            </div>
        </div>
        <hr>
   </section><!-- /.content -->
</aside><!-- /.right-side -->

@stop