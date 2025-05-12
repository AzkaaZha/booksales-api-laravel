<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genres | BookSales</title>
</head>
<body>
    <h3>Selamat Datang di BookSales</h3>
    <h4>Daftar Genre</h4>
    <p>Berikut adalah daftar genre yang tersedia di BookSales:</p>

    <table border="1" cellpadding="5" cellspacing="0" >
        <thead>
            <tr>
                <th>No</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $genre['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
