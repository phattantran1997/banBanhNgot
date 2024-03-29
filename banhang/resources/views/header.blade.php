<div id="header">
  <div class="header-top">
    <div class="container">
      <div class="pull-left auto-width-left">
        <ul class="top-menu menu-beta l-inline">
          <li><a href=""><i class="fa fa-home"></i> KTX khu B ĐHQG HCM</a></li>
          <li><a href=""><i class="fa fa-phone"></i> 0123456788</a></li>
        </ul>
      </div>
      <div class="pull-right auto-width-right">
        <ul class="top-details menu-beta l-inline">
          <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
          <li><a href="#">Đăng kí</a></li>
          <li><a href="#">Đăng nhập</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
    <div class="container beta-relative">
      <!-- <div style="width: 65px; height: 65px" class="pull-left">
        <a href="index" id="logo"><img src="source/assets/dest/images/phatlol2.png" alt=""></a>
      </div> -->
      <div class="pull-right beta-components space-left ov">
        <div class="space10">&nbsp;</div>
        <div class="beta-comp">
          <form role="search" method="get" id="searchform" action="/">
                <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
          </form>
        </div>

        <div class="beta-comp">
          @if(Session::has('cart'))
          <div class="cart">
            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
            <div class="beta-dropdown cart-body">
              @foreach($product_cart as $pc)
              <div class="cart-item">
                <a class="cart-item-delete" href="{{route('xoagiohang',$pc['item']['id'])}}"><i class="fa fa-times"></i></a>
                <div class="media">
                  <a class="pull-left" href="#"><img src="source/image/product/{{$pc['item']['image']}}" alt=""></a>
                  <div class="media-body">
                    <span class="cart-item-title">{{$pc['item']['name']}}</span>
                    <span class="cart-item-amount">{{$pc['qty']}}*<span> @if($pc['item']['promotion_price']==0){{number_format($pc['item']['unit_price'])}} @else {{number_format($pc['item']['promotion_price'])}}@endif</span></span>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}</span></div>
                <div class="clearfix"></div>

                <div class="center">
                  <div class="space10">&nbsp;</div>
                  <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div> <!-- .cart -->
          @endif
        </div>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-body -->
  <div class="header-bottom" style="background-color: #0277b8;">
    <div class="container">
    <div style="width: 65px; height: 65px" class="pull-left">
        <a href="index" id="logo"><img src="source/assets/dest/images/phatlol2.png" width="200px" alt=""></a>
      </div>
      <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
      <div class="visible-xs clearfix"></div>
      <nav class="main-menu">
        <ul class="l-inline ov">
          <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
          <li><a href="/loai_sanpham">Loại Sản phẩm</a>
            <ul class="sub-menu">
              @foreach($loai_sp as $lsp)
              <li><a href="/san_pham_{{$lsp->id}}">{{$lsp->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="gioithieu">Giới thiệu</a></li>
          <li><a href="lienhe">Liên hệ</a></li>
        </ul>
        <div class="clearfix"></div>
      </nav>
    </div> <!-- .container -->
  </div> <!-- .header-bottom -->
</div> <!-- #header -->
