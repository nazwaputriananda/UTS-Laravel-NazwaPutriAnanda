<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('produk',function() {
    $kode = [3501,3702,3803,3604,4005];
    $nama = ['Red Rose','Dalia','Tulip','Peony','Calla Lily'];
    $jenis = count($kode);
    $harga = ['35.000','37.000','38.000','36.600','40.000'];
    return view('produk',compact('kode','nama','jenis','harga'));
});

