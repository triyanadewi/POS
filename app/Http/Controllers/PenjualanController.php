<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function transaksi()
    {
        $transactions = [
            ['id' => 1, 'product' => 'Nasi Goreng', 'category' => 'Food and Beverage', 'price' => 10000],
            ['id' => 2, 'product' => 'Sunscreen', 'category' => 'Beauty Health', 'price' => 38500],
            ['id' => 3, 'product' => 'Deterjen', 'category' => 'Home Care', 'price' => 5000],
            ['id' => 4, 'product' => 'Bedak', 'category' => 'Baby Kid', 'price' => 29000],
        ];
        return view('penjualan')
            ->with('transactions', $transactions);
    }
}
