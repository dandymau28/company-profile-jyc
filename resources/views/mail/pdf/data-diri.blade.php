<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cab->nama_lengkap }}</title>
</head>
<body>
    <ol>
        <li>NamaLengkap={{$cab->nama_lengkap}}</li>
        <li>Tempat & Tanggal Lahir={{$cab->tempat_lahir}},{{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}</li>
        <li>alamat={{$cab->alamat}}</li>
        <li>pekerjaan={{$cab->pekerjaan}}</li>
        <li>agama={{$cab->agama}}</li>
        <li>motivasi={{$cab->motivasi}}</li>
    </ol>
</body>
</html>