<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('post-mail') }}" method="post">
    @csrf
    <input type="text" name="nama" id="">
    <input type="text" name="isi_pesan" id="">
    <input type="submit">
    </form>
</body>
</html>