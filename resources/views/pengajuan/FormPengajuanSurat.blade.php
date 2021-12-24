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
          <form method="POST" action="{{ route('pengajuan-surat.store') }}">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->nama }}" readonly>
              </div>

              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control"  id="nis" name="nis" value="{{ Auth::user()->nip_nis }}" readonly>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"></textarea>
                <div class="text-danger">
                    @error('alamat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp">
                <div class="text-danger">
                    @error('no_telp')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="jenis_surat">Jenis Surat</label>
                <select name="jenis_surat" class="form-control ">
                    <option value="Berkelakuan Baik">Berkelakuan baik</option>
                    <option value="Aktif Sekolah">Aktif Sekolah</option>
                    <option value="Tidak Menerima Beasiswa" >Tidak Menerima Beasiswa</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tujuan_surat">Tujuan</label>
                <textarea type="date" class="form-control @error('tujuan_surat') is-invalid @enderror" id="tujuan_surat" name="tujuan_surat"></textarea>
                <div class="text-danger">
                    @error('tujuan_surat')
                    {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" id="status" name="status" value="Menunggu Persetujuan">
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
