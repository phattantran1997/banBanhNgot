@extends('master')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Contacts</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="index.html">Home</a> / <span>Contacts</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="beta-map">

  <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7613.012250822465!2d106.77740188758541!3d10.884163609371537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d89aad780e49%3A0x54542761d4c22175!2sKTX+Khu+B%2C+%C4%90HQG!5e0!3m2!1svi!2s!4v1560502187501!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
<div class="container">
  <div id="content" class="space-top-none">

    <div class="space50">&nbsp;</div>
    <div class="row">
      <div class="col-sm-8">
        <h2>Họp thư góp ý</h2>
        <div class="space20">&nbsp;</div>
        <p>Quý khách có thắc mắc hoặc góp ý vui lòng điền vào form bên dưới. Mọi sự thắc mắc, góp ý của khách hàng sẽ giúp cửa hàng phát triển hơn. Xin cảm ơn!</p>
        <div class="space20">&nbsp;</div>
        <form action="#" method="post" class="contact-form">
          <div class="form-block">
            <input name="your-name" type="text" placeholder="Tên khách hàng">
          </div>
          <div class="form-block">
            <input name="your-email" type="email" placeholder="Địa chỉ mail">
          </div>
          <div class="form-block">
            <input name="your-subject" type="text" placeholder="Tiêu đề">
          </div>
          <div class="form-block">
            <textarea name="your-message" placeholder="Ý kiến hoặc thắc mắc"></textarea>
          </div>
          <div class="form-block">
            <button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <h2>Thông tin liên lạc</h2>
        <div class="space20">&nbsp;</div>

        <h6 class="contact-title">Địa Chỉ</h6>
        <p>
          ktx khu B ĐHQG HCM <br>
          Hồ Chí Minh
        </p>
        <div class="space20">&nbsp;</div>
        <h6 class="contact-title">Cửa hàng trưởng</h6>
        <p>
          Trần Tấn Phát <br>
           <br>
          <a href="15520607@gm.uit.edu.vn">15520607@gm.uit.edu.vn</a>
        </p>
        <div class="space20">&nbsp;</div>
        <h6 class="contact-title">Nhân viên</h6>
        <p>
          Trần Quốc Tuyến<br>
           <br>
          <a href="15520994@gm.uit.edu.vn">15520994@gm.uit.edu.vn</a>
        </p>
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
