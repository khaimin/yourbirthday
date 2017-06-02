@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">
<section class="content">
  <!-- page content -->
   <div class="row" style="margin-bottom:5px;">
 
  <div class="col-md-4">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                
                Cập Nhật Sản Phẩm
            </div>
        </div>
    </div>
      <div class="col-md-6 ">
              <section class="panel">
                <div class="panel-body">
                    <form role="form" action="{{ route('admin.sanpham.updatedata',$data->idSP) }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                          @if($errors->has('txtidSP'))
                                <p style="color:red">{{$errors->first('txtidSP')}}</p>
                              @endif
                            <label for="idSP">ID sản phẩm</label>
                            <input type="text" name="txtidSP" class="form-control" id="idSP" value="{{ $data->idSP }}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txtidLoai'))
                                <p style="color:red">{{$errors->first('txtidLoai')}}</p>
                              @endif
                          <label for="idLoai">ID loại</label>
                          <select name="txtidLoai" class="form-control" id="idLoai">
                            @foreach($data1 as $data1)
                                <option value="{{ $data1->idLoai }}">{{ $data1->tenLoai }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          @if($errors->has('txttensp'))
                                <p style="color:red">{{$errors->first('txttensp')}}</p>
                              @endif
                            <label for="tensp">Tên sản phẩm </label>
                            <input type="text" name="txttensp" class="form-control" id="tensp" value="{{ $data->tensp }}">
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon<span class="required">*</span></label>
                          
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" width="100px" height="80px"  alt="">
                            <code>Hãy chọn ảnh với kích thước 370 x 230 pixel</code>
                                @if($errors->has('ficon'))
                                <p style="color:red">{{$errors->first('ficon')}}</p>
                                @endif
                                <input type="file" name="ficon">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh đại diện<span class="required">*</span></label>
                          
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" width="100px" height="80px"  alt="">
                            <code>Hãy chọn ảnh với kích thước 800 x 530 pixel</code>
                                @if($errors->has('fimage'))
                                  <p style="color:red">{{$errors->first('fimage')}}</p>
                                @endif
                                  <input  type="file" name="fimage">
                          </div>
                        </div>
                        <div class="form-group">
                          @if($errors->has('txtgia'))
                                <p style="color:red">{{$errors->first('txtgia')}}</p>
                              @endif
                            <label for="idgia">Giá</label>
                            <input type="text" name="txtgia" class="form-control" id="idgia" placeholder="Giá" value="{{ $data->gia }}">
                          </div>
                        <div class="form-group">
                          @if($errors->has('txtmota'))
                                <p style="color:red">{{$errors->first('txtmota')}}</p>
                              @endif
                            <label for="mota">Mô tả</label>
                            <textarea type="text" name="txtmota" class="form-control" id="txtmota"><?php echo $data->mota?></textarea>
                             <script>CKEDITOR.replace('txtmota');</script>
                        </div>
                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
            
                </form>
            </div>
        </section>
        </div>
	</div>
	</section><!-- /.content -->
  
<div class="abc" style="min-height: 280px;"></div>
<div class="footer-main">
Copyright &copy Director, 2014
</div>
</aside><!-- /.right-side -->
@stop
@section('body.js')
<script type="text/javascript" src="{{url('public/admin/ckeditor/ckeditor.js')}}"></script>
@stop