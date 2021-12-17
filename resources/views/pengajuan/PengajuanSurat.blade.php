@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengajuan Surat</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Pengajuan Surat</h3>

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
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                    <th>No. Telp.</th>
                    <th>Jenis Surat</th>
                    <th>Tujuan Pembuatan</th>
                    <th>Lampiran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>193</td>
                    <td>Jl. Melati</td>
                    <td>081234567890</td>
                    <td>Surat Edaran</td>
                    <td>Pemberitahuan Cuti</td>
                    <td>surat.pdf</td>
                    <td>Belum Selesai</td>
                    <td>
                      <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
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
