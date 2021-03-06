@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">

<!-- Main content -->
<section class="content">

<div class="row" style="margin-bottom:5px;">
 
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                <span></span>
                Loại Sản Phẩm
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
            <div class="sm-st-info">
                <span>{{count($data)}}</span>
                Sản Phẩm
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
            <div class="sm-st-info">
                <span>100,320</span>
                Bài Viết
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
                <span>4567</span>
                Total Documents
            </div>
        </div>
    </div>
   
</div>

 @if(Session::has('flash_message'))
                <div class="x_content bs-example-popovers">
                  <div class="alert alert-{!! Session::get('flash_level')!!} alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> {!! Session::get('flash_message')!!}</strong>
                  </div>
                </div>
   @endif

<div class="right_col" role="main">    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> Sản Phẩm <br>
            <a href="{{ route('admin.sanpham.create') }}" class="btn btn-app" style="float: right;">
              <i class="fa fa-edit"></i> Thêm mới
            </a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- start project list -->
      

            <table class="table table-striped projects">
              <thead>
                <tr class="btn-info">
                  
                  <th style="width: 15%">#id</th>
                  <th style="width: 10%">#tên SP</th>
                  <th style="width: 10%">#loại SP</th>
                  <th style="width: 10%">#hình</th>
                  <th style="width: 5%">#giá</th>
                  <th style="width: 27%">#mô tả</th>
                  <th style="width: 10%">#trạng thái</th>
                  <th style="width: 13%">#thao tác</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $data)
                <tr>
                 
                  <td>
                      {{ $data->idSP }}
                      <br>
                      <small style="font-size: 10px">Created {{$data->created_at}}</small>
                  </td>
                  <td>
                      {{ $data->tenSP }}
                  </td>
                  <td>
                      {{ $data->idLoai }}
                  </td>
                  <td>
                      <img src="{{asset('resources/upload/sanpham/'.$data->icon)}}" width="80px" alt="">
                  </td>
                  <td>
                      {{ $data->dongia }}
                  </td>
                  <td>
                      {{str_limit($data->mota, $limit = 100, $end = '...')}}
                  </td>
                  <td>
                    <code>0</code> hiển thị
                  </td>
                  <td>
                   <!--  <a href="" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> -->
                    <a href="{{ route('admin.sanpham.update', $data->idSP) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="{{ route('admin.sanpham.del', $data->idSP) }}"  onclick="return confirm('Xóa dữ liệu?')" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- end project list -->
          </div>
        </div>
      </div>
    </div>
</div>
</section><!-- /.content -->
<div class="abc" style="height: 50px;"></div>
<div class="footer-main">
Copyright &copy Director, 2014
</div>
</aside><!-- /.right-side -->
@stop