<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hapus Data</title>
</head>
<body>
    <td>
        <form action="{{ route('jenis/hapus-jp', $dataPenyewaan->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </td>

</body>
</html>
