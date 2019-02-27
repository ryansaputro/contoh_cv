<?php
/**
 * dibuat oleh ryan saputro
 * email:ryansaputro52@gmail.com
 * controller digunakan untuk merubah halaman depan atau di client side nya
 * 
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPageController extends Controller
{
    public function index()
    {
        return view('app');
    }
}
