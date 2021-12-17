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
                <input type="text" class="form-control" id="nama" name="nama" >
              </div>

              <div class="form-group">
                <label for="nis">NIP / NIS</label>
                <input type="text" class="form-control" id="nip_nis" name="nip_nis">
              </div>

              <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="form-group">
                <label for="alamat">Role</label>
                <select name="role" class="form-control ">
                    <option value="Staff TU" >Staff TU</option>
                    <option value="Siswa">Siswa</option>
                    <option value="Resepsionis">Resepsionis</option>
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
