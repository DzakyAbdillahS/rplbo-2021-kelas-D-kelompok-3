@extends('layouts.main')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Edit User</h1>
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
          <form method="POST" action="{{ url('manajemen-user/'.$data->id) }}">
            @csrf
            <div class="card-body">
            @method('put')
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $data->nama }}">
              </div>

              <div class="form-group">
                <label for="nip_nis">NIP / NIS</label>
                <input type="text" class="form-control" id="nip_nis" name="nip_nis" value="{{ old('nip_nis') ?? $data->nip_nis }}">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ?? $data->email }}">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control" name="role">
                    <option value="Alumni">Alumni</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Kepala TU">Kepala TU</option>
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
