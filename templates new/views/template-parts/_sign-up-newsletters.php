<?php

namespace ProcessWire;

?>
<section id="sign-up-newsletter" pw-optional class="uk-section uk-padding-remove uk-background-muted">
    <div class="uk-container" data-uk-scrollspy="target: > div div; cls:uk-animation-slide-bottom-small; delay: 300;">
        <div class="tw-element tw-call-action uk-padding-remove">
            <div class="call-content">
                <h2>Đăng Ký Nhận Bản Tin</h2>
                <p>Chúng tôi sẽ gởi bản tin hàng tháng cho bạn</p>
            </div>
            <div class="call-btn">
                <form method="get" action="/promailer/" class="uk-inline">
                    <div class="uk-inline">
                        <input type="email" id="email" placeholder="Email của bạn" class="uk-input">
                        <button type='submit'>Tôi nhận</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>