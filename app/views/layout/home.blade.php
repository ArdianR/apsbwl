@include('layout.head')
@include('layout.sidebar')
<div class="container-full">
	<div id="main" class="row">
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
					<img class="img-responsive" src="{{ asset('img/mts.png') }}" alt="Logo MTs">
				</div>
				<hr>
			</section><!-- /.content -->
		</aside><!-- /.right-side -->

	</div>
</div>
@include('layout.footer')