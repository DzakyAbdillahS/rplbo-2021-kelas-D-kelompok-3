@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Daftar Disposisi Surat</h1>
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
          <form method="POST" action="{{ route('disposisi-surat.store',$id) }}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="tanggal_penyelesaian">Tgl. Penyelesaian</label>
                <input type="date" class="form-control @error('tanggal_penyelesaian') is-invalid @enderror" id="tanggal_penyelesaian" name="tanggal_penyelesaian">
                <div class="text-danger">
                    @error('tanggal_penyelesaian')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="instruksi_disposisi">Instruksi</label>
                <input type="text" class="form-control @error('instruksi_disposisi') is-invalid @enderror" id="instruksi_disposisi" name="instruksi_disposisi">
                <div class="text-danger">
                    @error('instruksi_disposisi')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="tujuan_disposisi">Tujuan Disposisi</label>
                <input type="text" class="form-control @error('tujuan_disposisi') is-invalid @enderror" id="tujuan_disposisi" name="tujuan_disposisi">
                <div class="text-danger">
                    @error('tujuan_disposisi')
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
