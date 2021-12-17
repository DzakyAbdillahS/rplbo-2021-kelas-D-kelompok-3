@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Keluar</h1>
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
              <h3 class="card-title">Daftar Surat Keluar</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>Index</th>
                    <th>File</th>
                    <th>Jlh Lampiran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)


                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->kode_surat }}</td>
                    <td>{{ $data->tujuan_surat }}</td>
                    <td>{{ $data->tanggal_surat }}</td>
                    <td>{{ $data->index_surat }}</td>
                    <td>{{ $data->file_surat }}</td>
                    <td>{{ $data->jumlah_lampiran_surat }}</td>
                    <td>
                      <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                      </button>

                    </td>
                    @endforeach
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
