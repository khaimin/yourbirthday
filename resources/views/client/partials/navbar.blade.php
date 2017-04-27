<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="{{ route('index') }}">
            <img src="{{ url('public/images/logo.png') }}" alt="Logo alt">
          </a>
        </h1>  
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li class="current"><a href="{{ route('index') }}">trang chủ</a></li>
               <li><a href="{{ route('banhkem') }}">bánh</a></li>
               <li><a href="{{ route('quatang') }}">quà</a></li>
               <li><a href="{{ route('thucan') }}">thức ăn</a></li>
               <li><a href="{{ route('trangtri') }}">trang trí</a></li>
               <li><a href="{{ route('blog') }}">blog</a></li>
               <li><a href="{{ route('lienhe') }}">liên hệ</a></li>
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</header>        
