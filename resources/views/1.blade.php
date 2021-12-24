<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h3">MTSN 10 Pekanbaru</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"></p>

        <form action="../../index3.html" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.social-auth-links -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
login-->


<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-12 text-center mt-2">
              <h2>MADRASAH TSANAWIYAH NEGERI 10 PEKANBARU</h2>
              <h3>Jl. Soekarno-Hatta, Pekanbaru, Riau</h3>
              <p class="text-bold mt-3 mb-5">Visi: "Terwujudnya Madrasah Unggulan Berwawasan Lingkungan Berdasarkan Nilai Qurani"</p>
          </div>
      </div>

      <div class="row justify-content-md-center mt-5">
          <div class="col-3">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Ajukan Surat</button>
          </div>

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
home-->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>0</h3>

        <p>Surat Masuk</p>
      </div>
      <div class="icon">
        <i class="fas fa-envelope-open-text"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>1</h3>

        <p>Legalisir Berkas</p>
      </div>
      <div class="icon">
        <i class="fas fa-file-signature"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->


  <!--Edit Legalisir-->
  @extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Legalisir Surat</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">

          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="kode">Nama</label>
                <input disabled type="text" class="form-control" id="kode" value="John">
              </div>

              <div class="form-group">
                <label for="nis">NIS</label>
                <input disabled type="text" class="form-control" id="nis" value="193">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea disabled type="date" class="form-control" id="alamat" >lorem ipsum</textarea>
              </div>

              <div class="form-group">
                <label for="notelp">No. Telp</label>
                <input disabled type="text" class="form-control" id="notelp" value="081234567890">
              </div>

              <div class="form-group">
                <label for="file">File</label>
                <input disabled type="" class="form-control" id="file" value="surat.pdf">
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">

                    <option value="Aceh">Belum Disetujui</option>
                    <option value="Riau">Tidak Disetujui</option>
                    <option value="Sumatera Barat" >Sudah Disetujui</option>
                  </select>
              </div>



              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!-- /.card-body -->

          </form>
        </div>





      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">


      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


<a href="{{ route('disposisi-surat.index',$data->id) }}" class="btn btn-success btn-sm">
    <i class="fas fa-paper-plane"></i>
</a>
