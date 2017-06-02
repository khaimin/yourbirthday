@extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
    <div class="row">
    @foreach($data as $data)
      <div class="grid_4" style="padding-top: 20px">
        <div class="gall_block">
          <div class="maxheight">
            <a href="" class="gall_item">
              <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" width="370px" height="250px"  alt="">
            </a>
            <div class="gall_bot">
            <div class="text1"><a href="#">{{ $data->tenSP }}</a></div>
            <p>{{str_limit($data->mota, $limit = 160, $end = '...')}}</p>
            <br>
            <a href="#" class="btn">xem thêm</a>
            <a href="#" class="btn">đặt hàng</a>
            </div>
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@stop