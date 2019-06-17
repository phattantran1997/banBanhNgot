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
              <h4>Tất cả sản phẩm</h4>
              <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
                <div class="clearfix"></div>
              </div>
              <div class="row">
              @foreach($product as $pro)
                <div class="col-sm-4">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{route('chitietsanpham',$pro->id)}}"><img src="source/image/product/{{$pro->image}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title">{{$pro->name}}</p>
                      <p class="single-item-price">
                        <span>{{$pro->unit_price}}</span>
                      </p>
                    </div>
                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="{{route('themgiohang',$pro->id)}}"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="{{route('chitietsanpham',$pro->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
              <div class="row">
              {{$product->links()}}
            </div>
            </div> <!-- .beta-products-list -->
            <div class="space50">&nbsp;</div>
          </div>
        </div> <!-- end section with sidebar and main content -->
      </div> <!-- .main-content -->
    </div> <!-- #content -->
  </div> <!-- .container -->

@endsection
