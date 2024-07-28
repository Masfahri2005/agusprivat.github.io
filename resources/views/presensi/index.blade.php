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
            <li class="breadcrumb-item active">Data Presensi</li>
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
        <h3 class="card-title">Data Presensi</h3>
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
        <!-- Data Table Presensi -->
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <caption>Data Presensi</caption>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Murid</th>
                <th>Jenjang</th>
                <th>Kelas/Semester</th>
                @if (Auth::user()->role == 'administrator')
                <th>Catatan Belajar</th>
                <th>Total Biaya</th>
                @endif
                <th>Waktu Input Presensi</th>
                <th>Tanggal Input Presensi</th>
                @for ($i = 1; $i <= 30; $i++)
                  <th>{{ $i }}</th>
                @endfor
                @if (Auth::user()->role == 'administrator')
                <th>Action</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach ($data_presensi as $presensi)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $presensi->nama_murid }}</td>
                <td>{{ $presensi->jenjang }}</td>
                <td>{{ $presensi->kelas_semester }}</td>
                @if (Auth::user()->role == 'administrator')
                <td>{{ $presensi->catatan_belajar }}</td>
                <td>{{ $presensi->biaya }}</td>
                @endif
                <td>{{ $presensi->waktu_input_presensi }}</td>
                <td>{{ $presensi->tanggal_input_presensi }}</td>
                @for ($i = 1; $i <= 30; $i++)
                  <td>
                    @php
                      $status = $presensi->{'presensi'.$i};
                      if ($status == 'Hadir') {
                        $icon = '<i class="fas fa-check" style="color: green;"></i>';
                      } elseif ($status == 'Tidak Hadir') {
                        $icon = '<i class="fas fa-times" style="color: red;"></i>';
                      } else {
                        $icon = '<i class="fas fa-minus" style="color: orange;"></i>';
                      }
                    @endphp
                    {!! $icon !!}
                  </td>
                @endfor
                @if (Auth::user()->role == 'administrator')
                <td>
                  <a href="{{ route('presensi.show', $presensi->id) }}" class="btn btn-success btn-sm">
                    <i class="fas fa-eye"></i>
                  </a> 
                  
                  <a href="{{ route('presensi.edit', $presensi->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ route('presensi.destroy', $presensi->id) }}" method="POST" style="display:inline;" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete('{{ $presensi->nama_murid }}')">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td> 
                 @endif
              </tr>
            @endforeach
            </tbody>
          </table>
         
        </div>
        <!-- Keterangan Ikon Presensi -->
        <!-- Form Tambah Presensi -->
        @if (Auth::user()->role == 'administrator')
        <a href="{{ route('presensi.create') }}" class="btn btn-primary mt-3">
          <i class="fas fa-calendar-check"></i> Tambah Presensi
        </a>
        @endif
      </div>
      <div class="container-fluid mt-1">
        <h6>Keterangan :</h6>
        <p><i class="fas fa-check" style="color: green;"></i> Hadir</p>
        <p><i class="fas fa-times" style="color: red;"></i> Tidak Hadir</p>
        <p><i class="fas fa-minus" style="color: orange;"></i> Presensi Belum Dimasukkan</p>
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

<style>
  table {
    width: 100%;
  }

  table th, table td {
    text-align: center; /* Center text horizontally */
    vertical-align: middle; /* Center text vertically */
    white-space: nowrap; /* Prevent text wrapping */
  }
</style>
