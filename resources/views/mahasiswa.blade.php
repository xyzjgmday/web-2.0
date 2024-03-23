<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
          body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        ul {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Data Mahasiswa</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Dosen Pembimbing</th>
                    <th scope="col">Hobi</th>
                    <th scope="col">Wali</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->dosen->nama }}</td>
                    <td>
                        <ul>
                            @foreach ($mahasiswa->hobi as $hobi)
                                <li>{{ $hobi->hobi }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $mahasiswa->wali->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
