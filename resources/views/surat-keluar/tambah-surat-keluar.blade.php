@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Daftar Surat Keluar</h1>
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
          <form method="POST" action="{{ url('surat-keluar') }}">
            <div class="card-body">
              <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode">
              </div>

              <div class="form-group">
                <label for="tujuan_surat">Tujuan</label>
                <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat">
              </div>

              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal_surat">
              </div>

              <div class="form-group">
                <label for="index_surat">Index</label>
                <input type="text" class="form-control" id="index_surat" name="index_surat">
              </div>

              <div class="form-group">
                <label for="file_surat">File Surat</label>
                <input type="file" class="form-control" id="file_surat" name="file_surat">
              </div>

              <div class="form-group">
                <label for="jumlah_lampiran_surat">Jumlah Lampiran Surat</label>
                <input type="number" class="form-control" id="jumlah_lampiran_surat" name="jumlah_lampiran_surat">
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
