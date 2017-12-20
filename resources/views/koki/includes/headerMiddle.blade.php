<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="logo pull-left">
        <a href="index.html"><img src="{{asset('koki/images/home/logo.png')}}" alt="" /></a>
      </div>
      <div class="btn-group pull-right">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
            USA
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Canada</a></li>
            <li><a href="#">UK</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
            DOLLAR
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Canadian Dollar</a></li>
            <li><a href="#">Pound</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="shop-menu pull-right">
        <ul class="nav navbar-nav">
          @if(Auth::guest())
            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
          @else
            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
