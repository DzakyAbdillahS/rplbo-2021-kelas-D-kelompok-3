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
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="tglpenyelesaian">Tgl. Penyelesaian</label>
                <input type="date" class="form-control" id="tglpenyelesaian" value="2-10-2021">
              </div>

              <div class="form-group">
                <label for="instruksi">Instruksi</label>
                <input type="text" class="form-control" id="instruksi" value="segerakan">
              </div>

              <div class="form-group">
                <label for="asalsurat">Tujuan Disposisi</label>
                <input type="text" class="form-control" id="asalsurat" value="Staff TU">
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
