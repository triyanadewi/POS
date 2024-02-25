<!DOCTYPE html>
<html lang="en">
<body>
    <h1><center>Halaman Products</center></h1>
    <h3>Kategori : {{ $category }}</h3>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>