<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</body>
    
    <h1>Show Data</h1>

    @foreach ($barangbarang as $barang)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title"> {{$barang->KategoriBarang}}</h2>
            <h3 class="card-title"> {{$barang->NamaBarang}}</h3>
            <p class="card-title"> {{$barang->HargaBarang}}</p>
            <p class="card-title"> {{$barang->JumlahBarang}}</p>
            <p class="card-title"> {{$barang->FotoBarang}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach


    

</body>
</html>
