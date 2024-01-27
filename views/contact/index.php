<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="menu-icons" style="margin-bottom: 10px;">
                <a href="<?php echo ROOT_PATH; ?>home/index">Home</a>
                <i class="bi bi-chevron-right"></i>
                <a href="<?php echo ROOT_PATH; ?>news/index">Liên hệ</a>
            </div>
        </div>
    </div>
</div>

<section>
    <script type="text/javascript">
        var submitted = false;

        function lienhe() {
            submitted = true;
            $('#contact').toggle();
            $('.hidden-message').show();
        }
    </script>

    <style>
        .success {
            padding: 14px 23px;
            margin-bottom: 10px;
            background: #49b14d;
            border: 1px solid #222222;
            font-size: 16px;
            font-family: Arial, Helvetica, Sans Serif;
            text-align: center;
            color: white;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget-item info-contact in-fo-page-content">
                    <h1 class="title-head">Thông tin liên hệ</h1>
                    <ul class="widget-menu contact-info-page">
                        <li>ShareBoard xin hân hạnh phục vụ quý khách với các dịch vụ cung cấp hay cho thuê cây văn phòng được rất nhiều khách hàng tại Việt Nam ưa thích và chọn lựa.</li>
                        <li><i aria-hidden="true" class="fa fa-map-marker"></i> Ng. 136 Đ. Cầu Diễn Minh Khai, Bắc Từ Liêm, Hà Nội</li>
                        <li><i aria-hidden="true" class="fa fa-phone"></i> <a href="tel:0123456789" title="0123456789">0123 456 789</a></li>
                        <li><i aria-hidden="true" class="fa fa-envelope"></i> <a href="mailto:mmoquanao@gmail.com" title="mmoquanao@gmail.com">mmoquanao@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="page-login">
                    <h3 class="title-head">Gửi thông tin</h3>
                    <span class="text-contact margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                    <form accept-charset="UTF-8" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScT8lOtMUEaIzhG9YQCU5gND4GcmT3cs046Zusml1PexCUKCA/formResponse" class="has-validation-callback" id="contact" method="post" onsubmit="return lienhe()" target="hidden_iframe">
                        <div class="form-signup clearfix">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name">Họ tên<span class="required">*</span></label>
                                        <input class="form-control form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" id="name" name="entry.425386082" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email<span class="required">*</span></label>
                                        <input class="form-control form-control-lg" data-validation-error-msg="Email sai định dạng" data-validation="email" id="email" name="entry.920956719" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required="" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="tel">Điện thoại<span class="required">*</span></label>
                                        <input class="number-sidebar form-control form-control-lg" data-validation-error-msg="Không được để trống" data-validation="tel" id="tel" name="entry.478199128" required="" type="tel">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="comment">Nội dung<span class="required">*</span></label>
                                        <textarea class="form-control form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" id="comment" name="entry.795855456" required="" rows="5"></textarea>
                                    </div>
                                    <div class="pull-xs-left" style="margin-top: 20px;">
                                        <button class="btn btn-primary" type="submit">Gửi tin nhắn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="hidden-message alert alert-success" style="display: none;"> Thông tin đã được gửi đi</div>
                    <iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){}" style="display: none;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-map">
                    <div class="page-login text-center">
                        <h3 class="title-head">Bản đồ cửa hàng</h3>
                    </div>
                    <div class="box-maps margin-top-10 margin-bottom-10" style="width:100%;">
                        <iframe allowfullscreen=""  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.7256766989055!2d105.74528861427617!3d21.041208893990915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad69f4a1db83%3A0xe2882f524d1876ed!2zTmcuIDEzNiDEkMOsbmggQ-G7l2nhu4cgS2nhu4d0LCBC4bqtdCBUw7JlIExp4buHbSwgSMOgbmggTOG7kywgSMOgbmggTmjhu4cgSMOgIE5hbSBOYW0!5e0!3m2!1svi!2s!4v1500909626466" style="border: 0;" width="100"></iframe>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
