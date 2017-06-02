@extends('client.master')
@section('head.title')
Home
@stop
@section('body.content')
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_4">
        <div class="banner">
		  <div class="gall_block">
          <img src="{{ url('public/images/page1_img1.jpg') }}" alt="">
          <div class="bann_capt ">
            <div class="maxheight">
              <img src="{{ url('public/images/icon1.png') }}" alt="">
              <div class="bann_title">Tiệm bánh</div>
              <a href="{{ route('banhkem') }}">xem thêm</a>
            </div>
          </div>
        </div>
	   </div>
      </div>
      <div class="grid_4">
        <div class="banner">
		  <div class="gall_block">
          <div class="bann_capt  bn__1">
            <div class="maxheight">
              <img src="{{ url('public/images/icon2.png') }}" alt="">
              <div class="bann_title">Cửa hàng quà tặng</div>
              <a href="{{ route('quatang') }}">xem thêm</a>
            </div>
          </div>
          <img src="{{ url('public/images/page1_img22.jpg') }}" alt="">
        </div>
		</div>
      </div>
      <div class="grid_4">
        <div class="banner ">
    		  <div class="gall_block">
              <img src="{{ url('public/images/page1_img3.jpg') }}" alt="">
              <div class="bann_capt  bn__2">
                <div class="maxheight">
                  <img src="{{ url('public/images/icon3.png') }}" alt="">
                  <div class="bann_title">Nhà hàng</div>
                  <a href="{{ route('thucan') }}">xem thêm</a>
                </div>
              </div>
    		  </div>
        </div>
      </div>

      <div class="grid_4">
        <div class="block1">
          <div class="count">1.</div>
          Sắp tới đây là sinh nhật bạn bè, người thân nhưng bạn lại quá tấp nập với công việc và không có đủ thời gian để chuẩn bị hết tất cả mọi thứ. Đừng lo hãy để chúng tôi giúp bạn!
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>
      </div>
      <div class="grid_4">
        <div class="block1">
          <div class="count">2.</div>
          Bạn đã từng chán nản với những buổi tiệc ngẫu hứng, bạ đâu ngồi đấy mà không có một kế hoạch cụ thể.  Đừng lo, chúng tôi sẽ lên kế hoạch để giúp bạn và người thân có một buổi tiệc đáng nhớ.
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>
      </div>
      <div class="grid_4">
        <div class="block1">
          <div class="count">3.</div>
          Bạn lo sợ chi phí cho việc tổ chức một buổi tiệc quá lớn mà bạn lại không có khả năng kiểm soát, bạn không tính toán được toàn bộ chi phí phát sinh. Đừng lo, your birthday sẽ tính toán mọi thứ cho bạn, một hóa đơn rõ ràng, chi tiết.
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>        
      </div>
      <div class="grid_12">
        <div class="box">
          <div class="row">
            <div class="grid_5 preffix_1">
              <h2>Xin chào!</h2>
              <p>Chào mừng bạn đến với <strong class="color1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">your birthay</a></strong> chúng tôi sẽ mang đến cho bạn một sự trãi nghiệm tuyệt vời. <strong class="color1"><a href="http://www.templatemonster.com/properties/topic/food-restaurant/" rel="nofollow">themes</a></strong>? Visit TemplateMonster’s website.</p>
              Hãy chọn món, và tất cả những gì còn lại chúng tôi sẽ làm cho bạn có một buổi tiệc thật tuyệt vời và đáng nhớ.<br>
              <a href="#" class="btn">xem thêm</a>
            </div>
            <div class="grid_5">
              <h2>Feel the Savor of Life</h2>
              Dervamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo. Praesent faucibus malesuada ucibus. Donec laeet metus id laoreet malesuadarem ipsum dosit ametctetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum. <br>
              <a href="#" class="btn">xem thêm</a>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_12">
        <h2>Bánh kem</h2>
      </div>
      <div class="gallery">
      @foreach($banhkem as $data)
        <div class="grid_4"><a href="{{asset('resources/upload/sanpham/'.$data->hinh)}}" class="gall_item"><img src="{{asset('resources/upload/sanpham/'.$data->icon)}}" width="370px" height="230px" alt=""></a><a href="#" class="link1">+</a>
        <div class="clear"></div></div>
      @endforeach
      </div>
      <div class="grid_12">
        <h2>Quà tặng</h2>
      </div>
      <div class="gallery">
        @foreach($quatang as $data)
        <div class="grid_4"><a href="{{asset('resources/upload/sanpham/'.$data->hinh)}}" class="gall_item"><img src="{{asset('resources/upload/sanpham/'.$data->icon)}}" width="370px" height="230px" alt=""></a><a href="#" class="link1">+</a>
        <div class="clear"></div></div>
      @endforeach
      </div>
      <div class="grid_12">
        <h2>Thức ăn</h2>
      </div>
      <div class="gallery">
        @foreach($thucan as $data)
        <div class="grid_4"><a href="{{asset('resources/upload/sanpham/'.$data->hinh)}}" class="gall_item"><img src="{{asset('resources/upload/sanpham/'.$data->icon)}}" width="370px" height="230px" alt=""></a><a href="#" class="link1">+</a>
        <div class="clear"></div></div>
      @endforeach
      </div>
        <div class="grid_12">
          <h2>Video</h2>
        </div>
        <div class="video">
          <div class="grid_6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/W78WOgLBExI" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="grid_6">
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.bulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus </p>
          </div>
           <div class="clear"></div>
        </div>
        <div class="grid_4">
          <h2>Chứng nhận</h2>
          <blockquote class="bq1">
            <img src="{{ url('public/images/page1_img7.jpg') }}" alt="" class="img_inner fleft noresize">
            <div class="extra_wrapper">
              <div class="bq_title color1">Mark Wood</div>
              Sivamus at magna non nuncer tristique rhoncus. Aliquame nibh ante, egestas id dictumertolom  commodo. Praesent faucib mal.
              <a href="#"><span class="fa fa-chevron-right"></span>more testimonials</a>
            </div>
          </blockquote>
        </div>
        <div class="grid_4">
          <h2>Tin tức mới</h2>
          <div class="block2">
            <time datetime="2014-01-01">11<br>June</time>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Vivamus at magna non nunc </a></div>Rehoncus. Aliquam nibh antegestas id dictum a, commodo. Praesenterto faucibus malesuada faucibus
            </div>
          </div>
          <div class="block2">
            <time datetime="2014-01-01">15<br>APR</time>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Tivamus at magna non nunc </a></div>Rehoncus. Aliquam nibh antegestas id dictum a, commodo. Praesenterto faucibus malesuada faucibu
            </div>
          </div>
        </div>
        <div class="grid_4">
          <h2>Giờ mở cửa</h2>
          <ul class="shed">
            <li><span>Breakfast:</span> 8AM - 11AM</li>
            <li><span>Grill Menu:</span> 12AM - 12PM</li>
            <li><span>Live Musiс:</span> 8AM - 11AM</li>
          </ul>
        </div>

    </div>
  </div>
</section>
@stop