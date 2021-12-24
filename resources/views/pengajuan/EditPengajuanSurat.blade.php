@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Pengajuan Surat</h1>
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
          <form method="POST" action="{{ url('pengajuan-surat/'.$data->id) }}">
            @csrf
            <div class="card-body">
                <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" value="{{ old('nama') ?? $data->nama }}" readonly>
              </div>

              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" value="{{ old('nis') ?? $data->nis }}" readonly>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" readonly>{{ old('alamat') ?? $data->alamat }}</textarea>
              </div>

              <div class="form-group">
                <label for="notelp">No. Telp</label>
                <input type="text" class="form-control" id="notelp" value="{{ old('no_telp') ?? $data->no_telp }}" readonly>
              </div>

              <div class="form-group">
                <label for="jenis_surat">Jenis Surat</label>
                <textarea type="text" class="form-control" id="jenis_surat" name="jenis_surat" readonly>{{ old('jenis_surat') ?? $data->jenis_surat }}</textarea>
              </div>

              <div class="form-group">
                <label for="tujuan_surat">Tujuan</label>
                <textarea type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" readonly>{{ old('tujuan_surat') ?? $data->tujuan_surat }}</textarea>
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
