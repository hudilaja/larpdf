<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIHI</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>umur</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
        </tr>
        @foreach ($peoples as $people)
        <tr>
            <td>{{ $people['nama'] }}</td>
            <td>{{ $people['umur'] }}</td>
            <td>{{ $people['tempat_lahir'] }}</td>
            <td>{{ $people['tanggal_lahir'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>