<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('evaluasi/jawab/empat/{jurusan}', function ($jurusan) {
    $kode = [
        'tkro' => [
            'nama' => 'Teknik Kendaraan Ringan Otomotif',
            'kajur'=>'Rivan Inrayan, S.T',
            'kelas'=>6
        ],
        'tp' => [
            'nama' => 'Teknik Permesinan',
            'kajur'=>'Siti Hamidah, A.Md',
            'kelas'=>5
        ],
        'rpl' => [
            'nama' => 'Rekayasa Perangkat Lunak',
            'kajur'=>'Joko Kristianto, S.T',
            'kelas'=>3
        ],
        'ak' => [
            'nama' => 'Akuntansi',
            'kajur'=>'Yulianti, S.E, M.M',
            'kelas'=>1
        ],
    ];
    $data = $kode[$jurusan];

    return view('jawaban.soal1', ['data' => $data]);
});




    