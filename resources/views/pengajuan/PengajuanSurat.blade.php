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
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Jenis</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($datas as $data)
                    @if ($data->status=='Menunggu Persetujuan' && Auth::user()->role=='Resepsionis')
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nis }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->jenis_surat }}</td>
                        <td>{{ $data->tujuan_surat }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <div class="row">
                                <a href="{{  url('pengajuan-surat/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm mr-1">
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
                                        <form action="{{ url('pengajuan-surat/'.$data->id) }}" method="POST">
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

                    @elseif($data->status != 'Menunggu Persetujuan')
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->jenis_surat }}</td>
                    <td>{{ $data->tujuan_surat }}</td>
                    <td>{{ $data->status }}</td>
                    <td>

                        @if ($data->status=='Menunggu Persetujuan' && Auth::user()->role=='Resepsionis')
                        <div class="row">
                            <a href="{{  url('pengajuan-surat/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#modal-sm">
                                <i class="fas fa-trash"></i>
                            </a>

                            <div class="modal fade" id="modal-sm">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">

                                    <div class="modal-body">
                                      <h4 class="text-center mt-1">Yakin Ingin Menghapus <br/> Data Ini?</h4>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <form action="{{ url('pengajuan-surat/'.$data->id) }}" method="POST">
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
                        </div>

                        @elseif ($data->status=='Sedang Diproses' && Auth::user()->role=='Staff TU')
                        <div class="row">
                            <a href="{{  url('pengajuan-surat/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#modal-sm">
                                <i class="fas fa-trash"></i>
                            </a>

                            <div class="modal fade" id="modal-sm">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">

                                    <div class="modal-body">
                                      <h4 class="text-center mt-1">Yakin Ingin Menghapus <br/> Data Ini?</h4>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <form action="{{ url('pengajuan-surat/'.$data->id) }}" method="POST">
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
                        </div>
                        @endif
                    </td>
                  </tr>
                  @endif
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

      <!-- Main row -->
      <div class="row">


      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
