@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Data Murid</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('murid.index') }}">Data Murid</a></li>
            <li class="breadcrumb-item active">Detail</li>
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
        <h3 class="card-title">Detail Data Murid</h3>
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
        {{-- Detail Data Murid --}}
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Nama Murid</td>
              <td>{{ $murid->nama_lengkap }}</td>
            </tr>
            <tr>
              <td>Nomor Telepon</td>
              <td>{{ $murid->no_tlp }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $murid->email }}</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>{{ $murid->alamat }}</td>
            </tr>
            <tr>
              <td>Jenjang</td>
              <td>{{ $murid->jenjang }}</td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td>{{ $murid->pendidikan }}</td>
            </tr>
            <tr>
              <td>Kelas/Semester</td>
              <td>{{ $murid->kelas_semester }}</td>
            </tr>
            <tr>
              <td>Nama Ortu</td>
              <td>{{ $murid->nama_ortu }}</td>
            </tr>
            <tr>
              <td>Telepon Ortu</td>
              <td>{{ $murid->no_ortu }}</td>
            </tr>
            <tr>
              <td>Lokasi Belajar</td>
              <td>{{ $murid->lokasi_belajar }}</td>
            </tr>
            <tr>
              <td>Kendala</td>
              <td>{{ $murid->kendala }}</td>
            </tr>
            <tr>
              <td>Jam</td>
              <td>{{ $murid->jam }}</td>
            </tr>
            <tr>
              <td>Catatan</td>
              <td>{{ $murid->catatan }}</td>
            </tr>
          </tbody>
        </table>
        <a href="{{ route('presensi.index') }}" class="btn btn-primary mt-3">
          <i class="fas fa-arrow-left"></i> Kembali
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
