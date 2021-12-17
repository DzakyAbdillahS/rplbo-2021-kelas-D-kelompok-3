@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Form Pengajuan Surat</h1>
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
                <label for="kode">Nama</label>
                <input type="text" class="form-control" id="kode" value="John">
              </div>

              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" value="193">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="date" class="form-control" id="alamat" >lorem ipsum</textarea>
              </div>

              <div class="form-group">
                <label for="notelp">No. Telp</label>
                <input type="text" class="form-control" id="notelp" value="081234567890">
              </div>

              <div class="form-group">
                <label for="alamat">Jenis Surat</label>
                <select name="province" class="form-control ">
                    <option value="Aceh">Berkelakuan baik</option>
                    <option value="Riau">Riau</option>
                    <option value="Sumatera Barat" >Sumatera Barat</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                </select>
              </div>

              <div class="form-group">
                <label for="alamat">Tujuan</label>
                <textarea type="date" class="form-control" id="alamat" >lorem ipsum</textarea>
              </div>

              <div class="form-group">
                <label for="file">Lampiran</label>
                <input type="file" class="form-control" id="file" value="surat.pdf">
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
