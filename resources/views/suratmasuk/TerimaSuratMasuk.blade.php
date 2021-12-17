@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Masuk</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col">

          <a href="#" class="btn btn-primary btn-sm mb-2">+ Tambah</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Surat Masuk</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                </div>
              </div>

            </div>
            <!-- /.card-header -->

            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pengirim</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Fadil</td>
                    <td>surat.pdf</td>
                    <td><a href="#" class="text-primary">Terima</a> | <a href="#" class="text-danger">Tolak</a></td>


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <a href="#" class="btn btn-primary btn-md">
            <i class="fas fa-download"></i>
          </a>

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
