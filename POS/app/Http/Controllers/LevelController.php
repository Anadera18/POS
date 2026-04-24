<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
public function index()
{
    // Pastikan semua perintah insert/update/delete sebelumnya sudah diberi komentar (//)
    
    // Mengambil data dari tabel m_level menggunakan Query Builder
    $data = DB::select('select * from m_level');

    // Memanggil file view bernama 'level.blade.php' dan mengirimkan variabel $data
    return view('level', ['data' => $data]);
}
}