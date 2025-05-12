<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors | BookSales</title>
</head>
<body>
    <h3>Selamat Datang di BookSales</h3>
    <h4>Daftar Penulis</h4>
    <p>Berikut adalah daftar penulis yang terdaftar di BookSales:</p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $author['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
