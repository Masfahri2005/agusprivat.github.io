@include('layouts.header')
@include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Data Murid</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Murid</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
             <!-- Default box -->
    <div class="card">
        <div class="card-body">
          <!-- Form tambah murid -->
          <form action="{{ route('murid.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama_lengkap">Nama Murid</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
              <label for="no_tlp">Nomor Telepon</label>
              <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
            </div>
            <div class="form-group">
              <label for="jenjang">Jenjang</label>
              <input type="text" class="form-control" id="jenjang" name="jenjang" placeholder="Masukkan jenjang" required>
            </div>
            <div class="form-group">
              <label for="pendidikan">Pendidikan</label>
              <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan pendidikan" required>
            </div>
            <div class="form-group">
              <label for="kelas_semester">Kelas/Semester</label>
              <input type="text" class="form-control" id="kelas_semester" name="kelas_semester" placeholder="Masukkan kelas/semester" required>
            </div>
            <div class="form-group">
              <label for="nama_ortu">Nama Ortu</label>
              <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Masukkan nama ortu" required>
            </div>
            <div class="form-group">
              <label for="no_ortu">Telepon Ortu</label>
              <input type="text" class="form-control" id="no_ortu" name="no_ortu" placeholder="Masukkan telepon ortu" required>
            </div>
            <div class="form-group">
              <label for="lokasi_belajar">Lokasi Belajar</label>
              <input type="text" class="form-control" id="lokasi_belajar" name="lokasi_belajar" placeholder="Masukkan lokasi belajar" required>
            </div>
            <div class="form-group">
              <label for="kendala">Kendala</label>
              <textarea class="form-control" id="kendala" name="kendala" rows="3" placeholder="Masukkan kendala" required></textarea>
            </div>
            <div class="form-group">
              <label for="jam">Jam</label>
              <input type="time" class="form-control" id="jam" name="jam" placeholder="Masukkan jam" required>
            </div>
            <div class="form-group">
              <label for="catatan">Catatan</label>
              <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Masukkan catatan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')
  