@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah User</h1>
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
          <form method="POST" action="{{ route('manajemen-user.store') }}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" >
                <div class="text-danger">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="nis">NIP / NIS</label>
                <input type="text" class="form-control @error('nip_nis') is-invalid @enderror" id="nip_nis" name="nip_nis">
                <div class="text-danger">
                    @error('nip_nis')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                <div class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                <div class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="alamat">Role</label>
                <select name="role" class="form-control ">
                    <option value="Alumni">Alumni</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Kepla TU">Kepala TU</option>
                    <option value="Resepsionis">Resepsionis</option>
                    <option value="Staff TU" >Staff TU</option>
                    <option value="Siswa">Siswa</option>

                </select>
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
