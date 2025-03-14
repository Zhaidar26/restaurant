<x-app-layout>

</x-app-layout><x-app-layout>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rows as $row)
        <tr>
          <td>{{ $row->nama_produk }}</td>
          <td>{{ $row->deskripsi }}</td>
          <td>{{ $row->harga }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table class="table table-borderedq">
    <thead>
      <tr>
        <th>Nama produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{ $rows->nama_produk }}</td>
          <td>{{ $rows->deskripsi }}</td>
          <td>{{ $rows->harga }}</td>
        </tr>
    </tbody>
  </table>
</body>
</html>