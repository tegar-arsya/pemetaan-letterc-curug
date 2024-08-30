<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Potensi Sawah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .letterhead {
            border-bottom: 2px solid #000;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            width: 80px;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 0;
        }
        h2 {
            font-size: 20px;
            margin-top: 5px;
        }
        .report-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        table {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="letterhead text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Coat_of_arms_of_Grobogan_Regency.svg" alt="Logo Grobogan" class="logo">
            <h1>DESA CURUG</h1>
            <h2>KECAMATAN TEGOWANU</h2>
        </div>

        <div class="report-title text-center">
            Laporan Potensi Sawah
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Desa</th>
                        <th>Nama Pemilik</th>
                        <th>Jenis Tanah</th>
                        <th>Ketinggian</th>
                        <th>Kelembaban</th>
                        <th>Luas Sawah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_desa }}</td>
                        <td>{{ $item->nama_pemiliklahan }}</td>
                        <td>{{ $item->jenis_tanah }}</td>
                        <td>{{ $item->ketinggian }} mdpl</td>
                        <td>{{ $item->kelembaban }}%</td>
                        <td>{{ $item->luas_lahan }} Ha</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
