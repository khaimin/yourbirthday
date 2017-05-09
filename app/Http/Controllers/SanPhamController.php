<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use File;
class SanPhamController extends Controller
{
     public function index()
    {
        $data = SanPham::All();

        return view('admin.pages.sanpham.index', compact('data'));
    }

    public function create()
    {
        $data = LoaisanPham::select('idLoai', 'tenLoai')->get();
        $data1= Sanpham::select('idSP')->orderBy('idSP', 'desc')->first();
        return view('admin.pages.sanpham.create', compact('data', 'data1'));
    }

	 public function store(Request $request)
    {
        $rules = [
            'txtidLoai'=>'required',
            'txtidSP'=>'required | unique:san_phams,idSP',
            'txttensp'=>'required',
            'ficon'=>'required',
            'fimage'=>'required',
            'txtmota'=>'required',
            'txtgia'=>'required',

        ];
        $messages = [

            'txtidSP.required'=> 'Mã loại sản phẩm không được để trống',
            'txtidSP.unique'=>' ID sản phẩm đã tồn tại, vui lòng chọn mã sản phẩm khác',
            'txtidLoai.required'=>'Tên loại sản phẩm không được để trống',
            'txttensp.required'=>'Tên  sản phẩm không được để trống',
            'ficon.required'=>'icon không được để trống',
            'fimage.required'=>'hình sản phẩm không được để trống',
            'txtmota.required'=>'mô tả sản phẩm không được để trống',
            'txtgia.required'=>'giá sản phẩm không được để trống',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
        	
            $data            = new SanPham;
            $data->idSP      = $request->txtidSP;
            $data->idLoai    = $request->txtidLoai;
            $data->tenSP     = $request->txttensp;
            $file_name_icon  = $request->file('ficon')->getClientOriginalName();
            $data->icon      = $file_name_icon;
            $request->file('ficon')->move('resources/upload/sanpham',$file_name_icon);
            $file_name       = $request->file('fimage')->getClientOriginalName();
            $data->hinh      = $file_name;
            $request->file('fimage')->move('resources/upload/sanpham',$file_name);                
            $data->mota      = $request->txtmota;
            $data->dongia    = $request->txtgia;
            $data->idNCC     = 1;
            $data->trangthai = 0;

            $data->save();
            return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
        }
    }
     public function updatedata(Request $request,$id)
    {
    	
         
            $idSP = $id;
            $idLoai = $request->txtidLoai;
            $tenSP = $request->txttensp;
            $icon = $request->txticon;
            $hinh = $request->txthinh;
            $mota = $request->txtmota;
            $dongia = $request->txtgia;
            $idNCC=1;
            $trangthai = 0;
    		 SanPham::where('idSP', $id)->update(array(
            'idSP'    =>  $id,
            'tenSP' =>  $tenSP,
            'icon' => $icon,
            'hinh' => $hinh,
            'mota' => $mota,
            'dongia' => $dongia,
            'idNCC' => $idNCC,
            'trangthai'  => $trangthai
      		  ));
	
		return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công']);
    }


   
    
    
//     public function status($id,$trangthai)
//     {

//         if(isset($id) && isset($trangthai)){
//             if($trangthai==0){
//     	       SanPham::where('idSP', $id)->update(array(
//                     'trangthai'    =>1,
//                  ));
//             }
//             else
//                   SanPham::where('idSP', $id)->update(array(
//                     'trangthai'    =>0,
//                  ));
//         }
//     	//SanPham::where('idSP', $id)->update('trangthai',$)
//     	return view('admin.pages.sanpham.index');
//     }
//      public function getcreate()
//     {
    	 
//     }
        public function update($id)
    {
    	if($id){
       	 $data = SanPham::All()
       	 ->where('idSP',$id);
       	
       	
    	 return view('admin.pages.sanpham.update',compact('data'));
    	}
    }
       public function destroy($id)
    {
        $data =SanPham::where('idSP',$id)->first();
        $data->delete($id);
        return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'danger','flash_message'=>'Xóa sản phẩm thành công']);
    }
}