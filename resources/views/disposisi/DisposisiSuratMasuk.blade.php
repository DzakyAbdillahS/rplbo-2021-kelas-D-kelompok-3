@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Disposisi Surat Masuk</h1>
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
            <a href="{{ route('disposisi-surat.create',$ids) }}" class="btn btn-primary btn-sm mb-2">+ Tambah</a>
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tgl. Penyelesaian</th>
                    <th>Instruksi</th>
                    <th>Tujuan Disposisi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $data)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->tanggal_penyelesaian }}</td>
                    <td>{{ $data->instruksi_disposisi }}</td>
                    <td>{{ $data->tujuan_disposisi }}</td>
                    <td>
                        <div class="row">
                            <a href="{{ url('disposisi-surat/'.$data->suratmasuk_id.'/edit'.'/'.$data->id) }}" class="btn btn-primary btn-sm mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url('disposisi-surat/'.$data->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>

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

      <!-- Main row -->
      <div class="row">


      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
