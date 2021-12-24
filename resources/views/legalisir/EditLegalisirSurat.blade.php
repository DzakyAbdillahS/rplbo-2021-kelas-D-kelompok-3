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
          <form method="POST" action="{{ url('legalisir-surat/'.$data->id) }}">
            @csrf

            <div class="card-body">
                @method('put')
              <div class="form-group">
                <label for="nama">Nama</label>
                <input  type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $data->nama }}" readonly>
              </div>

              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') ?? $data->nis }}" readonly>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" name="alamat" readonly>{{ old('alamat') ?? $data->alamat }}</textarea>
              </div>

              <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input disabled type="text" class="form-control" id="notelp" name="no_telp" value="{{ old('no_telp') ?? $data->no_telp }}" readonly>
              </div>

              <div class="form-group">
                <label for="file_surat">File</label>
                <input disabled type="text" class="form-control" id="file_surat" name="file_surat" value="{{ old('file_surat') ?? $data->file_surat }}" readonly>
              </div>

              @if (Auth::user()->role=='Resepsionis')
              <div class="form-group">
                <label for="status">Proses</label>
                <input type="checkbox" class="form-control col-1" id="status" name="status" value="Sedang Diproses">
              </div>
              @endif

              @if (Auth::user()->role=='Staff TU')
              <div class="form-group">
                <label for="status">Selesai</label>
                <input type="checkbox" class="form-control col-1" id="status" name="status" value="Sudah Selesai">
              </div>
              @endif

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
