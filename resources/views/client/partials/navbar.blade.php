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
               <li><a href="{{ route('banhkem') }}">bánh</a></li>
               <li><a href="{{ route('quatang') }}">quà</a></li>
               <li><a href="{{ route('thucan') }}">thức ăn</a></li>
               <li><a href="{{ route('trangtri')}}">trang trí</a></li>
               <li><a href="{{ route('blog') }}">blog</a></li>
               <li><a href="{{ route('lienhe') }}">liên hệ</a></li>
              <?php if(isset(Auth::user()->rule)){
                  if(Auth::user()->rule==3){?>
                    <li><a href="">{{ Auth::user()->name }}</a></li>
                    <li>
                        <a href="{{ URL::route('userlogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout 
                        <form id="logout-form" action="{{ route('userlogout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </a>
                    </li>
              <?php }else{ ?>
                    <li><a href="{{ route('userlogin') }}">đăng nhập</a></li>
                    <li><a href="{{ route('userregister')}}">đăng kí</a></li>
                    <?php }} ?>
               
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</header>        
