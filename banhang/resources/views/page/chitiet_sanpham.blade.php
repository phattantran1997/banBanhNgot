@extends('master')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Sản Phẩm {{$sanpham->name}}</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{route('trangchu')}}">Trang Chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-4">
            <img src="source/image/product/{{$sanpham->image}}" alt="">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title">{{$sanpham->name}}</p>
              <p class="single-item-price">
                @if($sanpham->promotion_price==0)
                    <span class="flash-sale">{{$sanpham->unit_price}}</span>
                @else
                    <span class="flash-del">{{$sanpham->unit_price}}</span>
                    <span class="flash-sale">{{$sanpham->promotion_price}}</span>
                @endif
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
              <!-- <p>{{$sanpham->description}}</p> -->
            </div>
            <div class="space20">&nbsp;</div>

            <p>Options:</p>
            <div class="single-item-options">
              <select class="wc-select" name="size">
                <option>Size</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
              <select class="wc-select" name="color">
                <option>Color</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Yellow">Yellow</option>
                <option value="Black">Black</option>
                <option value="White">White</option>
              </select>
              <select class="wc-select" name="color">
                <option>Qty</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
          <ul class="tabs">
            <li><a href="#tab-description">Description</a></li>
            <li><a href="#tab-reviews">Reviews (0)</a></li>
          </ul>

          <div class="panel" id="tab-description">
            {{$sanpham->description}}
          </div>
          <div class="panel" id="tab-reviews">
            <p>No Reviews</p>
          </div>
        </div>
        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Sản Phẩm Tương Tự</h4>

          <div class="row">
            @foreach($sanphamtt as $sptt)
            <div class="col-sm-4">
              <div class="single-item">
                @if($sptt->promotion_price!=0)
                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                @endif
                <div class="single-item-header">
                  <a href="product.html"><img src="source/image/product/{{$sptt->image}}" alt=""></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">{{$sptt->name}}</p>
                  <p class="single-item-price">
                    @if($sptt->promotion_price==0)
                        <span class="flash-sale">{{$sptt->unit_price}}</span>
                    @else
                        <span class="flash-del">{{$sptt->unit_price}}</span>
                        <span class="flash-sale">{{$sptt->promotion_price}}</span>
                    @endif
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="{{route('themgiohang',$sptt->id)}}"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row">
            {{$sanphamtt->links()}}
          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">New Products</h3>
        @foreach($new_product as $new_product)
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="{{route('chitietsanpham',$new_product->id)}}"><img src="source/image/product/{{$new_product->image}}" alt=""></a>
                <div class="media-body">
                  {{$new_product->name}}
                  <span class="beta-sales-price">{{$new_product->price}}</span>
                </div>
              </div>
              </div>
            </div>
          @endforeach
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
