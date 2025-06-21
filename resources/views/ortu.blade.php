<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nama Ortu</td>
            <td>Jenis Kelamin</td>
            <td>Telepon</td>
        </tr>
            @foreach ($ortu as $data)
        <tr>
            <td>{{ $data['nama_ortu'] }}</td>
            <td>{{ $data['jenis_kelamin'] }}</td>
            <td>{{ $data['telepon'] }}</td>
        </tr>
            @endforeach

    </table>
</body>
</html>