<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Presensi - Agus Privat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        h5 {
            color: #4CAF50;
            margin-bottom: 10px;
            font-size: 1.5em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table caption {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            font-size: 0.9em; /* Menyusutkan font dalam tabel */
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .statistics {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .statistics ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .statistics li {
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        .note {
            margin-top: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 1.2em;
        }
        .note p {
            margin: 5px 0;
            color: #555;
        }
        .quote {
            margin-top: 20px;
            padding: 15px;
            border-top: 2px solid #4CAF50;
            text-align: center;
            font-size: 1.2em;
            color: #4CAF50;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Data Presensi Table -->
    <table>
        <thead>
            <tr>
                <th>Nama Pengajar</th>
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
            @foreach ($data_presensi as $presensi)
            <tr>
                <td>{{ $presensi->nama_murid }}</td>
                <td>Agus Garnindyo</td>
                <td>{{ $presensi->jenjang }}</td>
                <td>{{ $presensi->kelas_semester }}</td>
                <td>{{ $presensi->catatan_belajar }}</td>
                <td>Rp. {{ $presensi->biaya }}</td>
                <td>{{ $presensi->waktu_input_presensi }}</td>
                <td>{{ $presensi->tanggal_input_presensi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Statistik Presensi -->
    <div class="statistics">
        <h5>Statistik Presensi Pertemuan Setiap Bulan</h5>
        <ul>
            <li><strong>Jumlah Hadir :</strong> {{ $hadir }}</li>
            <li><strong>Jumlah Tidak Hadir :</strong> {{ $tidak_Hadir }}</li>
            <li><strong>Jumlah Presensi Belum Dimasukkan :</strong> {{ $presensibelumDimasukkan }}</li>
        </ul>
    </div>

    <!-- Additional Note -->
    <div class="note">
        <p>Note: Harap kepada Ortu murid mentransferkan biaya les privat ke Norek yang tersedia:</p>
        <br>
        <p>Bank Mandiri: 1570006152350 (a/n Umi Hamzah)</p>
        <p>Bank Syariah Indonesia: 707 621 2257 (a/n Agus Garnindyo)</p>
    </div>

    <!-- Inspirational Quote -->
    <div class="quote">
        <p>"Education is the most powerful weapon which you can use to change the world." - Nelson Mandela</p>
    </div>
</body>
</html>
