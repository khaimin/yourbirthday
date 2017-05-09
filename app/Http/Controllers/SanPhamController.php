<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
class SanPhamController extends Controller
{
	 public function store(Request $request)
    {
        $rules = [
            'txtidLoai'=>'required',
            'txtidSP'=>'required | unique:san_phams,idSP',
            'txttensp'=>'required',
            'icon'=>'required',
            'txthinh'=>'required',
            'txtmota'=>'required',
            'txtgia'=>'required',

        ];
        $messages = [

            'txtidSP.required'=> 'Mã loại sản phẩm không được để trống',
            'txtidSP.unique'=>' ID sản phẩm đã tồn tại, vui lòng chọn mã loại sản phẩm khác',
            'txtidLoai.required'=>'Tên loại sản phẩm không được để trống',
            'txttensp.required'=>'Tên  sản phẩm không được để trống',
            'icon.required'=>'icon không được để trống',
            'txthinh.required'=>'hình sản phẩm không được để trống',
            'txtmota.required'=>'mô tả sản phẩm không được để trống',
            'txtgia.required'=>'giá sản phẩm không được để trống',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
        	
            $data= new SanPham;
           
            $data->idSP = $request->txtidSP;
            $data->idLoai = $request->txtidLoai;
            $data->tenSP = $request->txttensp;
            
          // $data->icon=$request->icon;
         
            $data->icon=$request->icon;
          	$data->hinh=$request->txthinh;
            $data->mota = $request->txtmota;
            $data->dongia = $request->txtgia;
            $data->idNCC=1;
            $data->trangthai = 0;



            if($data->save()){
            return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
        	}
        	else
        	  return redirect()->route('admin.sanpham.create')->with(['flash_level'=>'danger','flash_message'=>'Thêm sản phẩm thất bại']);
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


   
     public function index()
    {
        $data = SanPham::All();
        return view('admin.pages.sanpham.index', compact('data'));
    }
    public function create()
    {
    	 return view('admin.pages.sanpham.create');
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