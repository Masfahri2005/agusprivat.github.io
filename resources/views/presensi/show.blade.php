@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Data Presensi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('presensi.index') }}">Data Presensi</a></li>
            <li class="breadcrumb-item active">Detail Presensi</li>
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
        <h3 class="card-title">Detail Presensi</h3>
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
        <!-- Detail Presensi -->
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nama Murid</th>
              <th>Jenjang</th>
              <th>Kelas/Semester</th>
              
              <th>Catatan Belajar</th>
              <th>Total Biaya</th>
            
              <th>Waktu Input Presensi</th>
              <th>Tanggal Input Presensi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $presensi->nama_murid }}</td>
              <td>{{ $presensi->jenjang }}</td>
              <td>{{ $presensi->kelas_semester }}</td>
           
              <td>{{ $presensi->catatan_belajar }}</td>
              <td>{{ $presensi->biaya }}</td>
   
              <td>{{ $presensi->waktu_input_presensi }}</td>
              <td>{{ $presensi->tanggal_input_presensi }}</td>
            </tr>
          </tbody>
        </table>
        
        <!-- Statistik Presensi -->
        <div class="mt-4">
          <h4>Statistik Presensi</h4>
          <ul>
            <li>Jumlah Hadir: {{ $kehadiran }}</li>
            <li>Jumlah Tidak Hadir: {{ $tidakHadir }}</li>
            <li>Jumlah Presensi Belum Dimasukkan: {{ $belumDimasukkan }}</li>
          </ul>
        </div>

        <!-- Kembali ke daftar presensi -->
        <a href="{{ route('presensi.index') }}" class="btn btn-primary mt-3">
          <i class="fas fa-arrow-left"></i> Kembali
        </a>
        <a href="{{ route('presensi.downloadPdf', $presensi->id) }}" class="btn btn-success mt-3">
            <i class="fas fa-print"></i> Cetak Presensi
        </a>
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
