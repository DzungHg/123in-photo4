<?php namespace ProcessWire;

$blogPage = pages()->get("template=blog");
?>

<pw-region id="page-content">
<section class="uk-section uk-section-blog">
    <div class="uk-container">
        <div data-uk-grid>

            <div class="content-area uk-width-expand">
                <article class="single post">
                    <div class="entry-post">
                        <div class="entry-cats tw-meta">
                            <a href="<?=$page->categories->first->url?>" title="Xem tất cả các bài <?=$page->categories->first->title?>"><?=$page->categories->first->title?></a>
                        </div>
                        <h2 class="entry-title">
                            <a href="<?=$page->url?>"><?=$page->title?></a>
                        </h2>
                        <div class="entry-date tw-meta">
                            <span><?=$page->date?></span>
                        </div>
                        <div class="entry-media">
                            <div class="tw-thumbnail" data-uk-lightbox>
                                <img src="<?=$page->images->first->url?>" alt="<?=$page->images->first->description?>" />
                                <!--<div class="image-overlay">
                                    <a href="assets/demo/blog/single-1.jpg" title="Adventurous girl"></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="entry-content">
                            <?=$page->body?>
                        </div>
                        <!-- bỏ tag -->
                        <div class="entry-share tw-socials tw-social-light with-hover">
                            <a class="facebook-share" href="#" title="Share this"><i class="ion-social-facebook"></i><span>1</span></a>
                            <a class="pinterest-share" href="#" title="Pin It" data-image="assets/demo/blog-1.jpg"><i class="ion-social-pinterest"></i><span>0</span></a>
                            <a class="twitter-share" href="#" title="Tweet" data-title="Adventurous girl" data-id="1" data-ajaxurl="#"><i class="ion-social-twitter"></i><span>3</span></a>
                            <a class="comment-count" href="#" title="4 comments"><i class="ion-chatbubbles"></i><span>0 comments</span></a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- side bard-->
			<?php echo files()->include('views/blog/parts/_blog-sidebar.php') ?>


        </div>
    </div>
</section>

</pw-region>


<!--bỏ nhận mẫu và đăng ký nhận bản tin-->
<section id="order-sample"></section>
<section id="sign-up-newsletter"></section>