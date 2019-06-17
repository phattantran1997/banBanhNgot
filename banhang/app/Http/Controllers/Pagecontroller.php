<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slides;
use App\products;
use App\producttype;
use App\Cart;
use App\Customer;
use App\Bills;
use App\BillDetail;
use Session;

class PageController extends Controller
  {
  public function Index(){
    $slide = Slides::all();
    $new_product = products::where('new',1)->paginate(4);
    $km_product = products::where('promotion_price','<>',0)->paginate(8);
    return view('page.trangchu',compact('slide','new_product','km_product'));
  }

  public function loaisanpham()
  {
    $type_product = producttype::all();
    $new_product = products::where('new',1)->paginate(3);
    $top_product = products::orderBy('unit_price','desc')->paginate(3);
    return view('page.loai_sanpham',compact('new_product','top_product','type_product'));
  }

  public function getLoaisanpham($id)
  {
    $product = products::where('id_type',$id)->paginate(3);
    $type_product = producttype::all();
    return view('page.sanpham',compact('product','type_product'));
  }

  public function getChitietsanpham(Request $req)
  {
    $sanpham = products::where('id',$req->id)->first();
    $sanphamtt = products::where('id_type',$sanpham->id_type)->paginate(3);
    $new_product = products::where('new',1)->paginate(5);
    return view('page.chitiet_sanpham',compact('sanpham','sanphamtt','new_product'));
  }

  public function getLienhe()
  {
    return view('page.lienhe');
  }

  public function getGioithieu()
  {
    return view('page.gioithieu');
  }

  public function getthemgiohang(Request $req,$id){
    $product = Products::find($id);
    $oldCart = Session('cart')?Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->add($product,$id);
    $req->Session()->put('cart',$cart);
    return redirect()->back();
  }

  public function getXoahang($id){
    $oldCart = Session::has('cart')?Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);
    if(count($cart->items)){
    Session()->put('cart',$cart);
    }
    else{
      Session::forget('cart');
    }
    return redirect()->back();
  }

  public function getDathang(){
    return view('page.donhang');
  }

  public function postDathang(Request $req){
    $cart = Session::get('cart');
    $customer = new Customer;
    $customer->name = $req->name;
    $customer->gender = $req->gender;
    $customer->email = $req->email;
    $customer->address = $req->address;
    $customer->phone_number = $req->phone_number;
    $customer->note = $req->notes;
    $customer->save();

    $bill = new Bills;
    $bill->id_customer = $customer->id;
    $bill->date_order = date('Y-m-d');
    $bill->total = $cart->totalPrice;
    $bill->payment = $req->payment;
    $bill->note = $req->notes;
    $bill->save();

    foreach ($cart->items as $key => $value) {
      $bill_detail = new BillDetail;
      $bill_detail->id_bill = $bill->id;
      $bill_detail->id_product = $key;
      $bill_detail->quantity = $value['qty'];
      $bill_detail->unit_price = ($value['price']/$value['qty']);
      $bill_detail->save();
    }
    Session::forget('cart');
    return redirect('/dat_hang')->with('thongbao','Đặt hàng thành công');
  }
}
