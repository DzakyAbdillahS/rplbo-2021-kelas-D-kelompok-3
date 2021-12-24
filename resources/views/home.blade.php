@extends('layouts.main')


@section('content')


  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  @if (Auth::user()->role!='Siswa' && Auth::user()->role!='Alumni' && Auth::user()->role!='Administrator')
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row text-center mt-2">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jml_legalisir }}</h3>
                <h5 class="text-bold">Legalisir Surat</h5>
              </div>
              <div class="icon">
                <i class="fas fa-file-signature"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jml_pengajuan }}</h3>
                <h5 class="text-bold">Pengajuan Surat</h5>
              </div>
              <div class="icon">
                <i class="fas fa-share"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">


      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

  </section>
    @endif

@if (Auth::user()->role=='Siswa' || Auth::user()->role=='Alumni' || Auth::user()->role=='Administrator')
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-12 text-center mt-2">
              <h2>MADRASAH TSANAWIYAH NEGERI 10 PEKANBARU</h2>
              <h3>Jl. Soekarno-Hatta, Pekanbaru, Riau</h3>
              <p class="text-bold mt-3 ">Visi: "Terwujudnya Madrasah Unggulan Berwawasan Lingkungan Berdasarkan Nilai Qurani"</p>
          </div>
      </div>

      <div class="row justify-content-md-center mt-5">
          <div class="col-3">
            <img src="{{ url('backend/dist/img/logo-kemenag.png') }}" width="250">
          </div>

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endif
@endsection
