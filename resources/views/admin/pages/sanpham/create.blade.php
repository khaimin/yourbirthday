@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">

<!-- Main content -->
	<section class="content">
	<!-- page content -->
	 <div class="row" style="margin-bottom:5px;">
 
   <div class="col-md-4">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
              
             <span > Thêm Sản Phẩm</span>
            </div>
        </div>
    </div>
   <div class="col-md-6 ">
              <section class="panel">
               
                <div class="panel-body">
                    <form role="form" action="{{ route('admin.sanpham.store') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                          @if($errors->has('txtidSP'))
                                <p style="color:red">{{$errors->first('txtidSP')}}</p>
                              @endif
                            <label for="idSP">ID sản phẩm</label>
                            <input type="text" name="txtidSP" class="form-control" id="idSP" placeholder="id sản phẩm">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txtidLoai'))
                                <p style="color:red">{{$errors->first('txtidLoai')}}</p>
                              @endif
                            <label for="idLoai">ID loại</label>
                          <input type="text" name="txtidLoai" class="form-control" id="idLoai" placeholder="id loại sản phẩm">
                        </div>
                        <div class="form-group">
                          @if($errors->has('txttensp'))
                                <p style="color:red">{{$errors->first('txttensp')}}</p>
                              @endif
                            <label for="tensp">Tên sản phẩm </label>
                            <input type="text" name="txttensp" class="form-control" id="tensp" placeholder="Mã loại sản phẩm">
                        </div>
                        <div class="form-group">
                         
                              @if($errors->has('icon'))
                                <p style="color:red">{{$errors->first('icon')}}</p>
                              @endif
                                <input  class="form-control col-md-7 col-xs-12" type="file" name="icon">
                     
                        </div>
                       <!--  <div class="form-group">
                          @if($errors->has('txthinh'))
                                <p style="color:red">{{$errors->first('txthinh')}}</p>
                              @endif
                           <label>Hình ảnh :</label>
                            <input type="file" name="txthinh" class="form-control" id="hinh" placeholder="hinh">
                        </div>
 -->
                       <div class="form-group">
                          @if($errors->has('txthinh'))
                                <p style="color:red">{{$errors->first('txthinh')}}</p>
                              @endif
                              <label for="mota">Hinh</label>
                             <input type="file" id="txthinh" name="txthinh">
                        </div>

                        <div class="form-group">
                          @if($errors->has('txtmota'))
                                <p style="color:red">{{$errors->first('txtmota')}}</p>
                              @endif
                            <label for="mota">Mô tả</label>
                            <input type="text" name="txtmota" class="form-control" id="mota" placeholder="mota">
                        </div>
                          <div class="form-group">
                          @if($errors->has('txtgia'))
                                <p style="color:red">{{$errors->first('txtgia')}}</p>
                              @endif
                            <label for="idgia">Giá</label>
                            <input type="text" name="txtgia" class="form-control" id="idgia" placeholder="giá">
                        </div>
                        <div class="row">
                                <div class="col-md-8"></div>
                                <div  class="col-md-4">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button class="btn btn-info" type="submit">Save</button>
                                </div>
                        </div>
            
                </form>
          
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