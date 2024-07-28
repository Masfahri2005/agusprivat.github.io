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
            <li class="breadcrumb-item active">Data Murid</li>
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
        <h3 class="card-title">Data Murid</h3>
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
        {{-- Tabel Data Murid --}}
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <caption>Data Murid</caption>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Murid</th>
                <th>Jenjang</th>
                <th>Kelas/Semester</th>
                <th>Nama Ortu</th>
                <th>Lokasi Belajar</th>
                @if (Auth::user()->role == 'administrator')
                <th>Action</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach ($data_murid as $murid)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $murid->nama_lengkap }}</td>
                  <td>{{ $murid->jenjang }}</td>
                  <td>{{ $murid->kelas_semester }}</td>
                  <td>{{ $murid->nama_ortu }}</td>
                  <td>{{ $murid->lokasi_belajar }}</td>
                  <td>
                    @if (Auth::user()->role == 'administrator')
                    <a href="{{ route('murid.show', $murid->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('murid.edit', $murid->id) }}" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('murid.destroy', $murid->id) }}" method="POST" style="display:inline;" class="delete-form">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete('{{ $murid->nama_lengkap }}')">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{-- Form tambah murid --}}
        @if (Auth::user()->role == 'administrator')
        <a href="{{ route('murid.create') }}" class="btn btn-primary mt-3">
          <i class="fas fa-user-plus"></i> Tambah Murid
        </a>
        @endif
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
