@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
      <div class="pull-left">
        <h6 class="inner-title">Sản phẩm</h6>
      </div>
      <div class="pull-right">
        <div class="beta-breadcrumb font-large">
          <a href="index">Trang Chủ</a> / <span>Sản phẩm</span>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="container">
    <div id="content" class="space-top-none">
      <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
          <div class="col-sm-3">
            <!-- danh sach loai san pham -->
            <ul class="aside-menu">
            @foreach($type_product as $tp)
              <li><a href="/san_pham_{{$tp->id}}">{{$tp->name}}</a></li>
            @endforeach
            </ul>
          </div>
          <div class="col-sm-9">
            <div class="beta-products-list">
              <h4> Sản Phẩm Mới</h4>
              <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
                <div class="clearfix"></div>
              </div>
              <div class="row">
              @foreach($new_product as $new)
                <div class="col-sm-4">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title">{{$new->name}}</p>
                      <p class="single-item-price">
                        <span>{{$new->unit_price}}</span>
                      </p>
                    </div>
                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
              <div class="row">
              {{$new_product->links() }}
            </div>
            </div> <!-- .beta-products-list -->
            <div class="space50">&nbsp;</div>

            <div class="beta-products-list">
              <h4>Sản Phẩm Hàng Đầu</h4>
              <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($top_product)}}</p>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                @foreach($top_product as $top)
                <div class="col-sm-4">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{route('chitietsanpham',$top->id)}}"><img src="source/image/product/{{$top->image}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title"></p>
                      <p class="single-item-price">
                        <span>{{$top->unit_price}}</span>
                      </p>
                    </div>
                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="{{route('themgiohang',$top->id)}}"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="{{route('chitietsanpham',$top->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="row">
              {{$top_product->links() }}
            </div>
              <div class="space40">&nbsp;</div>
              
            </div> <!-- .beta-products-list -->
          </div>
        </div> <!-- end section with sidebar and main content -->


      </div> <!-- .main-content -->
    </div> <!-- #content -->
  </div> <!-- .container -->

@endsection
