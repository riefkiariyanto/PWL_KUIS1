<?php

namespace App\Http\Controllers;

use App\Models\Angota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Angota::all();
        return view('anggota',['blog'=>$data]);
    }

}
