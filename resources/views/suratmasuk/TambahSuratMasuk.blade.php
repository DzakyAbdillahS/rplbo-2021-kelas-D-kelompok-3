@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Daftar Surat Masuk</h1>
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
          <form method="POST" action="{{ route('surat-masuk.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="kode_surat">Kode Surat</label>
                    <input type="text" class="form-control @error('kode_surat') is-invalid @enderror" id="kode_surat" name="kode_surat">
                    <div class="text-danger">
                        @error('kode_surat')
                        {{ $message }}
                        @enderror
                    </div>
                  </div>

              <div class="form-group">
                <label for="tanggal_surat">Tanggal</label>
                <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror" id="tanggal_surat" name="tanggal_surat">
                <div class="text-danger">
                    @error('tanggal_surat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="asal_surat">Asal</label>
                <input type="text" class="form-control @error('asal_surat') is-invalid @enderror" id="asal_surat" name="asal_surat">
                <div class="text-danger">
                    @error('asal_surat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="index_surat">Index</label>
                <input type="text" class="form-control @error('index_surat') is-invalid @enderror" id="index_surat" name="index_surat">
                <div class="text-danger">
                    @error('index_surat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="file_surat">File Surat</label>
                <input type="file" class="form-control @error('file_surat') is-invalid @enderror" id="file_surat" name="file_surat">
                <div class="text-danger">
                    @error('file_surat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="jumlah_lampiran">Jumlah Lampiran</label>
                <input type="number" class="form-control @error('jumlah_lampiran') is-invalid @enderror" id="jumlah_lampiran" name="jumlah_lampiran">
                <div class="text-danger">
                    @error('jumlah_lampiran')
                    {{ $message }}
                    @enderror
                </div>
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
