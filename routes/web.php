<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('produk',function() {
    $kode = [3501,3702,3803,3604,4005];
    $nama = ['Pena','Buku','Penggaris','Pensil','Penghapus'];
    $jenis = count($kode);
    $harga = ['3.000','17.000','6.000','2.500','4.000'];
    return view('produk',compact('kode','nama','jenis','harga'));
});

