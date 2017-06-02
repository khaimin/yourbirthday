<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\SanPham;
use Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banhkem=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'banh-kem')->limit(3)->get();
        $quatang=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'qua-tang')->limit(3)->get();
        $thucan=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'thuc-an')->limit(3)->get();
        return view('client.pages.index', compact('banhkem','quatang','thucan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banhkem()
    {
        $data= SanPham::where('idLoai', 'banh-kem')->simplePaginate(3);

        return view('client.pages.banhkem')->with('data',$data);
    }
    public function thucan()
    {
        $data= SanPham::where('idLoai', 'thuc-an')->simplePaginate(3);

        return view('client.pages.thucan')->with('data',$data);
    }
    public function quatang()
    {
        $data= SanPham::All()->where('idLoai', 'qua-tang');

        return view('client.pages.quatang', compact('data'));
    }
    public function trangtri()
    {
        $data= SanPham::All()->where('idLoai', 'trang-tri');

        return view('client.pages.trangtri', compact('data'));
    }
}