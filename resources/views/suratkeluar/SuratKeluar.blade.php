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

          <a href="{{ route('surat-keluar.create') }}" class="btn btn-primary btn-sm mb-2">+ Tambah</a>

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
                    <th>Jumlah Lampiran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($datas as $data)

                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->kode_surat }}</td>
                    <td>{{ $data->tujuan_surat }}</td>
                    <td>{{ $data->tanggal_surat }}</td>
                    <td>{{ $data->index_surat }}</td>
                    <td>{{ $data->file_surat }}</td>
                    <td>{{ $data->jumlah_lampiran }}</td>
                    <td>
                        <div class="row">
                            <a href="{{ url('surat-keluar/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#modal-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>

                        <div class="modal fade" id="modal-sm">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">

                                <div class="modal-body">
                                  <h4 class="text-center mt-1">Yakin Ingin Menghapus <br/> Data Ini?</h4>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <form action="{{ url('surat-keluar/'.$data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-md" type="submit">
                                            YES
                                        </button>
                                    </form>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                          <!-- /.modal -->

                    </td>
                  </tr>

                  @empty
                  <tr>
                    <td colspan="10" class="text-center bg-light">DATA BELUM ADA</td>
                  </tr>

                  @endforelse

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
      </div>
      <!-- /.row -->


    </div><!-- /.container-fluid -->
  </section>
@endsection
