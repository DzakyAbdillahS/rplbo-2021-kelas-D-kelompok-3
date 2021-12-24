@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Disposisi Surat</h1>
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
          <form method="POST" action="{{ url('/disposisi-surat'.'/'.$surat_ids.'/edit'.'/'.$disposisi_ids) }}">
            @csrf
            <div class="card-body">
                @method('put')
              <div class="form-group">
                <label for="tanggal_penyelesaian">Tgl. Penyelesaian</label>
                <input type="date" class="form-control" id="tanggal_penyelesaian" name="tanggal_penyelesaian" value="{{ old('tanggal_penyelesaian') ?? $data->tanggal_penyelesaian }}">
              </div>

              <div class="form-group">
                <label for="instruksi_disposisi">Instruksi Disposisi</label>
                <input type="text" class="form-control" id="instruksi_disposisi" name="instruksi_disposisi" value="{{ old('instruksi_disposisi') ?? $data->instruksi_disposisi }}">
              </div>

              <div class="form-group">
                <label for="tujuan_disposisi">Tujuan Disposisi</label>
                <input type="text" class="form-control" id="tujuan_disposisi" name="tujuan_disposisi" value="{{ old('tujuan_disposisi') ?? $data->tujuan_disposisi }}">
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
