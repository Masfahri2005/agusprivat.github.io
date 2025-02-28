@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Data Presensi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Presensi</li>
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
        <h3 class="card-title">Form Edit Presensi</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('presensi.update', $presensi->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama_murid">Nama Murid</label>
            <input type="text" name="nama_murid" class="form-control" value="{{ $presensi->nama_murid }}" required>
          </div>
          <div class="form-group">
            <label for="jenjang">Jenjang</label>
            <input type="text" name="jenjang" class="form-control" value="{{ $presensi->jenjang }}" required>
          </div>
          <div class="form-group">
            <label for="kelas_semester">Kelas/Semester</label>
            <input type="text" name="kelas_semester" class="form-control" value="{{ $presensi->kelas_semester }}" required>
          </div>
          <div class="form-group">
            <label for="catatan_belajar">Catatan Belajar</label>
            <textarea name="catatan_belajar" class="form-control" required>{{ $presensi->catatan_belajar }}</textarea>
          </div>
          <div class="form-group">
            <label for="biaya">Total Biaya</label>
            <input type="number" name="biaya" class="form-control" value="{{ $presensi->biaya }}" required>
          </div>
          <div class="form-group">
            <label for="waktu_input_presensi">Waktu Input Presensi</label>
            <input type="time" name="waktu_input_presensi" class="form-control" value="{{ $presensi->waktu_input_presensi }}" required>
          </div>
          <div class="form-group">
            <label for="tanggal_input_presensi">Tanggal Input Presensi</label>
            <input type="date" name="tanggal_input_presensi" class="form-control" value="{{ $presensi->tanggal_input_presensi }}" required>
          </div>

          <!-- Kehadiran untuk 1 sampai 30 -->
          @for ($i = 1; $i <= 30; $i++)
          <div class="form-group">
            <label for="presensi{{ $i }}">Presensi {{ $i }}</label>
            <select name="presensi{{ $i }}" class="form-control">
              <option value="Presensi Belum Dimasukkan" {{ $presensi->{'presensi'.$i} == 'Presensi Belum Dimasukkan' ? 'selected' : '' }}>– <i class="fas fa-minus" style="color: orange;"></i> Presensi Belum Dimasukkan</option>
              <option value="Hadir" {{ $presensi->{'presensi'.$i} == 'Hadir' ? 'selected' : '' }}>✓ <i class="fas fa-check" style="color: green;"></i> Hadir</option>
              <option value="Tidak Hadir" {{ $presensi->{'presensi'.$i} == 'Tidak Hadir' ? 'selected' : '' }}>✗ <i class="fas fa-times" style="color: red;"></i> Tidak Hadir</option>
            </select>
          </div>
          @endfor
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
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
