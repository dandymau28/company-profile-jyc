<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>NamaLengkap={{$data->nama_lengkap}}</li>
        <li>Tempat & Tanggal Lahir={{$data->tempat_lahir}},{{Carbon/Carbon::parse($data->tanggal_lahir)->locale('id')->format('d M Y')}}</li>
        <li>alamat={{$data->alamat}}</li>
        <li>pekerjaan={{$data->pekerjaan}}</li>
        <li>agama={{$data->agama}}</li>
        <li>motivasi={{$data->motivasi}}</li>
    </ol>
</body>
</html>