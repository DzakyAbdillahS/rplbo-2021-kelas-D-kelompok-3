@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Legalisir Surat</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      {{-- <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Legalisir Surat</h3>

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
                    <th>NIS</th>
                    <th>Alamat</th>
                    <th>No. Telp.</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Fadil</td>
                    <td>1193</td>
                    <td>Jl. Delima</td>
                    <td>08912311230</td>
                    <td>surat.pdf</td>
                    <td><button href="#" class="btn btn-primary btn-sm">Terima</button> | <button href="#" class="btn btn-danger btn-sm">Tolak</button></td>


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>

      </div> --}}
      <!-- /.row -->

      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Legalisir Surat</h3>

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
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                    <th>No. Telp.</th>
                    <th>File</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)

                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->alamat_siswa }}</td>
                    <td>{{ $data->no_telephone }}</td>
                    <td>{{ $data->file_surat }}</td>
                    <td>{{ $data->isDone }}</td>
                    <td>
                      <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                      </button>

                    </td>
                  </tr>

                  @endforeach

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
