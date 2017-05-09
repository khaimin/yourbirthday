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
                  @foreach($data as $data)
                    <form role="form" action="{{ route('admin.sanpham.updatedata',$data->idSP) }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                          @if($errors->has('txtidSP'))
                                <p style="color:red">{{$errors->first('txtidSP')}}</p>
                              @endif
                            <label for="idSP">ID sản phẩm</label>
                            <input type="text" name="txtidSP" class="form-control" id="idSP" value="{{$data->idSP}}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txtidLoai'))
                                <p style="color:red">{{$errors->first('txtidLoai')}}</p>
                              @endif
                            <label for="idLoai">id loại</label>
                          <input type="text" name="txtidLoai" class="form-control" id="idLoai" value="{{$data->idLoai}}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txttensp'))
                                <p style="color:red">{{$errors->first('txttensp')}}</p>
                              @endif
                            <label for="tensp">tên sản phẩm </label>
                            <input type="text" name="txttensp" class="form-control" id="tensp" value="{{$data->tenSP}}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txticon'))
                                <p style="color:red">{{$errors->first('txticon')}}</p>
                              @endif
                            <label for="icon">icon</label>
                            <input type="text" name="txticon" class="form-control" id="icon" value="{{$data->icon}}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txthinh'))
                                <p style="color:red">{{$errors->first('txthinh')}}</p>
                              @endif
                            <label for="hinh">hình</label>
                            <input type="text" name="txthinh" class="form-control" id="hinh" value="{{$data->hinh}}">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txtmota'))
                                <p style="color:red">{{$errors->first('txtmota')}}</p>
                              @endif
                            <label for="mota">mô tả</label>
                            <input type="text" name="txtmota" class="form-control" id="mota" value="{{$data->mota}}">
                        </div>
                          <div class="form-group">
                          @if($errors->has('txtgia'))
                                <p style="color:red">{{$errors->first('txtgia')}}</p>
                              @endif
                            <label for="idgia">giá</label>
                            <input type="text" name="txtgia" class="form-control" id="idgia" value="{{$data->dongia}}">
                        </div>
                        <div class="row">
                                <div class="col-md-8"></div>
                                <div  class="col-md-4">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button class="btn btn-info" type="submit">Save</button>
                                </div>
                        </div>
            
                </form>
                   @endforeach
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