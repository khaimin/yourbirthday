<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banhkem()
    {
        $data= SanPham::All()->where('idLoai', 1);

        return view('client.pages.banhkem', compact('data'));
    }
    public function thucan()
    {
        $data= SanPham::All()->where('idLoai', 2);

        return view('client.pages.thucan', compact('data'));
    }
    public function quatang()
    {
        $data= SanPham::All()->where('idLoai', 3);

        return view('client.pages.quatang', compact('data'));
    }
    public function trangtri()
    {
        $data= SanPham::All()->where('idLoai', 4);

        return view('client.pages.trangtri', compact('data'));
    }
}