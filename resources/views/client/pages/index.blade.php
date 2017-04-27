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
          Chúng tôi ròi nhà ga vào lúc trời còn tờ mờ sáng, con đường nhỏ thiếu ánh đèn vẫn còn văng vẳng tiếng ếch nhái ngoài đồng ruộng kêu vang 
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>
      </div>
      <div class="grid_4">
        <div class="block1">
          <div class="count">2.</div>
          Dasamus at magna non nunc tristique rhoncus. Kliquam nibh ante, egestas id dictum a, commodo. Praesent faucibus malesuada faucibus. Donec laeet metus id laoreet malesuadarem ipsumer 
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>
      </div>
      <div class="grid_4">
        <div class="block1">
          <div class="count">3.</div>
          Tervamus at magna non nunc tristique rhoncus. Oliquam nibh ante, egestas id dictum a, commodo. Iraesent faucibus malesuada faucibus. Donec laeet etus id laoreet malesuadarem ipsolo 
          <br>
          <a href="#" class="btn">xem thêm</a>
        </div>        
      </div>
      <div class="grid_12">
        <div class="box">
          <div class="row">
            <div class="grid_5 preffix_1">
              <h2>Xin chào!</h2>
              <p>Chào mừng bạn đến với <strong class="color1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">your party</a></strong> will tell all you need to know about it. Need a good choice of <strong class="color1"><a href="http://www.templatemonster.com/properties/topic/food-restaurant/" rel="nofollow">themes</a></strong>? Visit TemplateMonster’s website.</p>
              Aliquam nibh e,estas id dictum a, commodo. Praesent faucibus malesuada faucibusonec laeet metus id laoreet malesuadarem ipsum dolor sit <br>
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
        <h2>Thức ăn</h2>
      </div>
      <div class="gallery">
        <div class="grid_4"><a href="{{ url('public/images/big1.jpg') }}" class="gall_item"><img src="{{ url('public/images/page1_img4.jpg') }}" alt=""></a><a href="#" class="link1">+</a>
        <div class="clear"></div></div>
        <div class="grid_4"><a href="{{ url('public/images/big2.jpg') }}" class="gall_item"><img src="{{ url('public/images/page1_img5.jpg') }}" alt=""></a><a href="#" class="link1">+</a><div class="clear"></div></div>
        <div class="grid_4"><a href="{{ url('public/images/big3.jpg') }}" class="gall_item"><img src="{{ url('public/images/page1_img6.jpg') }}" alt=""></a><a href="#" class="link1">+</a><div class="clear"></div></div>
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