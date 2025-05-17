<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books | BookSales</title>
</head>
<body>
    <h3>Selamat Datang di BookSales</h3>
    <h4>Daftar Buku</h4>
    <p>Berikut adalah daftar buku yang terdaftar di BookSales:</p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Buku</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penulis</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book['name'] }}</td>
                    <td>{{ $book['description'] }}</td>
                    <td>{{ $book['price'] }}</td>
                    <td>{{ $book['stock'] }}</td>
                    <td>{{ $book['author_id'] }}</td>
                    <td>{{ $book['genre_id'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
