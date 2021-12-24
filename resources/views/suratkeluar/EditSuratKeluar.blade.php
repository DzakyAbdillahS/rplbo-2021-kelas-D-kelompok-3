@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Surat Keluar</h1>
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
          <form method="POST" action="{{ url('surat-keluar/'.$data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                @method('put')
              <div class="form-group">
                <label for="kode_surat">Kode Surat</label>
                <input type="text" class="form-control" id="kode_surat" name="kode_surat" value="{{ old('kode_surat') ?? $data->kode_surat }}" readonly>
              </div>

              <div class="form-group">
                <label for="tujuan_surat">Tujuan</label>
                <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" value="{{ old('tujuan_surat') ?? $data->tujuan_surat }}">
              </div>

              <div class="form-group">
                <label for="tanggal_surat">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat') ?? $data->tanggal_surat }}">
              </div>

              <div class="form-group">
                <label for="index_surat">Index</label>
                <input type="text" class="form-control" id="index_surat" name="index_surat" value="{{ old('index_surat') ?? $data->index_surat }}">
              </div>

              <div class="form-group">
                <label for="file_surat">File Surat</label>
                <input type="file" class="form-control" id="file_surat" name="file_surat" value="{{ old('file_surat') ?? $data->file_surat }}">
              </div>

              <div class="form-group">
                <label for="jumlah_lampiran">Jumlah Lampiran</label>
                <input type="number" class="form-control" id="jumlah_lampiran" name="jumlah_lampiran" value="{{ old('jumlah_lampiran') ?? $data->jumlah_lampiran }}">
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
