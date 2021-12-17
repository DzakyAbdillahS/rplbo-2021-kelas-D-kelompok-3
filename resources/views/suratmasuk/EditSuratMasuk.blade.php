@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Surat Masuk</h1>
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
                <label for="kode">Kode</label>
                <input disabled type="text" class="form-control" id="kode" value="ab123" readonly>
              </div>

              <div class="form-group">
                <label for="nosurat">No. Surat</label>
                <input type="text" class="form-control" id="nosurat" value="113/ab/32">
              </div>

              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" value="13-11-2021">
              </div>

              <div class="form-group">
                <label for="asalsurat">Asal Surat</label>
                <input type="text" class="form-control" id="asalsurat" value="ipsum dolor sit amet">
              </div>

              <div class="form-group">
                <label for="index">Index</label>
                <input type="text" class="form-control" id="index" value="ipsum dolor sit amet">
              </div>

              <div class="form-group">
                <label for="isisurat">Isi Surat</label>
                <textarea rows="3" class="form-control" id="isisurat">ipsum dolor sit amet</textarea>
              </div>

              <div class="form-group">
                <label for="filesurat">File Surat</label>
                <input type="file" class="form-control" id="filesurat" value="ipsum dolor sit amet">
              </div>

              <div class="form-group">
                <label for="index">Jumlah Lampiran Surat</label>
                <input type="number" class="form-control" id="index" value="ipsum dolor sit amet">
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
