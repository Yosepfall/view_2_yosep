<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="card mx-auto mt-5 mb-6" style="width: 100vh;">
        <div class="card-body">
          <h5 class="card-title  bg-danger p-2 mb-2 rounded-3 text-light mt-2">Jawaban</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <h6>Kompetensi : {{ $data['nama'] }}</h6>
            <h6>Ketua Kompetensi : {{ $data['kajur'] }}</h6>
            <h6>Kelas : {{ $data['kelas'] }}</h6>
            </div>
        </div>
      </div>
</body>
</html>