<!DOCTYPE html>
<html lang="en">
<body>
    <h1><center>Halaman Penjualan<center></h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction['id'] }}</td>
                        <td>{{ $transaction['product'] }}</td>
                        <td>{{ $transaction['category'] }}</td>
                        <td>{{ $transaction['price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>