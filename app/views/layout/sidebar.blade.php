<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                @if (Auth::check())
                
                   @if (Auth::user()->jk == 'L')
                       <img src="{{asset('img/avatar5.png')}}" class="img-circle" title="User Image" />
                   @else
                        <img src="{{asset('img/avatar3.png')}}" class="img-circle" title="User Image" />
                    @endif
                @else
                    <img src="{{asset('img/anon_user.png')}}" class="img-circle" title="User Image" />
                @endif

                </div>
                <div class="pull-left info">
                    @if (Auth::check())
                        <?php $myvalue = Auth::user()->nama;
                         $arr = explode(' ',trim($myvalue)) ?>
                        <p>{{'Hello, '.$arr[0] }}</p>
                    @else
                        <p>{{'Who are you ?'}}</p>
                    @endif
                    
                    <a href="#"><i class="fa fa-circle text-success"></i> {{Auth::check() ? 'Online' : 'Offline'}}</a>
                </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-group"></i>
                        <span>Siswa</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('siswa.index') }}"><i class="fa fa-angle-double-right"></i> Data siswa</a></li>
                        <li><a href="{{ route('siswa.create') }}"><i class="fa fa-angle-double-right"></i> Input siswa</a></li>
                       
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Guru</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('guru.index') }}"><i class="fa fa-angle-double-right"></i> Data guru</a></li>
                        <li><a href="{{ route('guru.create') }}"><i class="fa fa-angle-double-right"></i> Input guru</a></li>
                       
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-home"></i> <span> Kelas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('kelas.index') }}"><i class="fa fa-angle-double-right"></i> Jumlah kelas</a></li>
                        <li><a href="{{ route('kelas.create') }}"><i class="fa fa-angle-double-right"></i> Buat kelas Baru</a></li>
                       
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span> Cetak</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                     <ul class="treeview-menu">
                        <li><a target="new" href="{{ route('cetak', ['data'=>'guru']) }}"><i class="fa fa-angle-double-right"></i> Cetak guru</a></li>
                        <li><a href="{{ route('pilih.siswa') }}"><i class="fa fa-angle-double-right"></i> Cetak siswa</a></li>
                       <li><a target="new" href="{{ route('cetak', ['data'=>'kelas']) }}"><i class="fa fa-angle-double-right"></i> Cetak kelas</a></li>
                       <li><a target="new" href="{{ route('cetak', ['data'=>'alumni']) }}"><i class="fa fa-angle-double-right"></i> Cetak Alumni</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('chart') }}">
                        <i class="fa fa-bar-chart-o"></i> <span>Grafik</span>
                        
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.index') }}">
                        <i class="fa fa-github-alt"></i> <span>Admin</span>
                       
                    </a>
                </li>
                <li>
                    <a href="{{ route('alumni') }}">
                        <i class="fa fa-gear"></i> <span>Alumni</span>
                       
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}">
                        <i class="fa fa-anchor"></i> <span>About</span>
                       
                    </a>
                </li>
               
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<!-- Last div is in footer.blade.php -->