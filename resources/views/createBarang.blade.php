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
<form action="/store-barang" method="POST">
  @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kategori Barang</label>
        <input type="text" class="form-control" id="exampleInputPassword1" Name="KategoriBarang">
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="exampleInputPassword1" Name="NamaBarang">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
        <input type="number" class="form-control" id="exampleInputPassword1" Name="HargaBarang">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
        <input type="number" class="form-control" id="exampleInputPassword1" Name="JumlahBarang">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Foto Barang</label>
        <input type="image" class="form-control" id="exampleInputPassword1" Name="FotoBarang">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>