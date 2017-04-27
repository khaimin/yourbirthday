<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\SanPham;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisp = LoaiSanPham::select('idLoai')->get();
        $sanpham = SanPham::select('idSP', 'idLoai')->get();
        return view('admin.pages.index', compact('loaisp', 'sanpham'));
    }
}

    