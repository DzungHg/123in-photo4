<?php namespace ProcessWire;
 ?> 
 
    <nav class="uk-navbar-container uk-flex-center" data-uk-navbar>
        <div class="uk-navbar-left">
            <div class="tw-logo">
                <h3 class="site-name">
                    <a href="<?=$urls->root?>">123in</a>
                </h3>
            </div>
        </div>
        <div class="uk-navbar-center">

            <ul class="tw-main-menu uk-visible@m">
                <li class="menu-item menu-item-has-children">
                    <a href="index.html">Home</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-4" data-uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify; delay-hide: 0;">
                        <div class="uk-container">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-4" data-uk-grid>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="home-agency.html">Home Agency</a></li>
                                        <li><a href="home-app.html">Home App<span class="uk-label">New</span></a></li>
                                        <li><a href="home-architecture.html">Home Architecture</a></li>
                                        <li><a href="home-band.html">Home Band<span class="uk-label">New</span></a></li>
                                        <li><a href="home-blog-classic.html">Home Blog Classic</a></li>
                                        <li><a href="home-blog-metro.html">Home Blog Metro</a></li>
                                        <li class="uk-active"><a href="#">Home Business</a></li>
                                        <li><a href="home-career.html">Home Career</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="home-church.html">Home Church</a></li>
                                        <li><a href="home-classic.html">Home Classic</a></li>
                                        <li><a href="home-construction.html">Home Construction</a></li>
                                        <li><a href="home-corporate.html">Home Corporate</a></li>
                                        <li><a href="home-education.html">Home Education<span class="uk-label">New</span></a></li>
                                        <li><a href="home-fashion.html">Home Fashion<span class="uk-label">New</span></a></li>
                                        <li><a href="home-finance.html">Home Finance</a></li>
                                        <li><a href="home-fitness.html">Home Fitness</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="home-freelancer.html">Home Freelancer</a></li>
                                        <li><a href="home-fullscreen.html">Home Full Screen</a></li>
                                        <li><a href="home-health.html">Home Health<span class="uk-label">New</span></a></li>
                                        <li><a href="home-magazine.html">Home Magazine</a></li>
                                        <li><a href="home-minimal.html">Home Minimal</a></li>
                                        <li><a href="home-onepage.html">Home Onepage</a></li>
                                        <li><a href="home-photography.html">Home Photography</a></li>
                                        <li><a href="home-portfolio.html">Home Portfolio<span class="uk-label">New</span></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="home-restaurant.html">Home Restaurant<span class="uk-label">New</span></a></li>
                                        <li><a href="home-resume.html">Home Resume</a></li>
                                        <li><a href="home-shop.html">Home Shop</a></li>
                                        <li><a href="home-splitscreen.html">Home SplitScreen</a></li>
                                        <li><a href="home-startup.html">Home Startup</a></li>
                                        <li><a href="home-studio.html">Home Studio</a></li>
                                        <li><a href="home-travel.html">Home Travel<span class="uk-label">New</span></a></li>
                                        <li><a href="home-video.html">Home Video</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu uk-animation-fade">
                        <li><a href="pages-about.html">About Us</a></li>
                        <li><a href="pages-services.html">What We Do</a></li>
                        <li><a href="pages-team.html">Our Team</a></li>
                        <li><a href="pages-clients.html">Clients</a></li>
                        <li><a href="pages-contact.html">Contact Us</a></li>
                        <li><a href="pages-404.html">404 Error</a></li>
                        <li><a href="pages-faq.html">FAQ</a></li>
                        <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Elements</a>
                    <div class="uk-navbar-dropdown" data-uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify; delay-hide: 0;">
                        <div class="uk-container">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-4" data-uk-grid>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="elements-accordion.html">Accordion</a></li>
                                        <li><a href="elements-animation.html">Animation<span class="uk-label">Hot</span></a></li>
                                        <li><a href="elements-blockquote.html">Blockquote</a></li>
                                        <li><a href="elements-button.html">Buttons</a></li>
                                        <li><a href="elements-call-action.html">Call to Action</a></li>
                                        <li><a href="elements-carousel.html">Carousel</a></li>
                                        <li><a href="elements-clients.html">Clients</a></li>
                                        <li><a href="elements-columns.html">Columns</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="elements-chart-circle.html">Chart Circle</a></li>
                                        <li><a href="elements-contact-form.html">Contact Form</a></li>
                                        <li><a href="elements-counterup.html">Counter</a></li>
                                        <li><a href="elements-dropcaps.html">Dropcaps</a></li>
                                        <li><a href="elements-flipbox.html">Flipbox</a></li>
                                        <li><a href="elements-google-map.html">Google, Maps</a></li>
                                        <li><a href="elements-header-footer.html">Header & Footer<span class="uk-label">Hot</span></a></li>
                                        <li><a href="elements-heading.html">Heading</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="elements-highlight.html">Highlights</a></li>
                                        <li><a href="elements-box.html">Iconbox</a></li>
                                        <li><a href="elements-infobox.html">Infobox</a></li>
                                        <li><a href="elements-list.html">Lists</a></li>
                                        <li><a href="elements-grid.html">Grids & Cards</a></li>
                                        <li><a href="elements-message-box.html">Message Box</a></li>
                                        <li><a href="elements-open-jobs.html">Open Jobs</a></li>
                                        <li><a href="elements-pricing-table.html">Pricing Table</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="elements-process.html">Process</a></li>
                                        <li><a href="elements-progress.html">Progress Bar</a></li>
                                        <li><a href="elements-social.html">Social Icons</a></li>
                                        <li><a href="elements-tabs.html">Tabs</a></li>
                                        <li><a href="elements-table.html">Table</a></li>
                                        <li><a href="elements-team.html">Team</a></li>
                                        <li><a href="elements-testimonial.html">Testimonial</a></li>
                                        <li><a href="elements-timeline.html">Timeline</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Blogs</a>
                    <ul class="sub-menu uk-animation-fade">
                        <li class="menu-item menu-item-has-children"><a href="blog-full.html">Standard</a>
                            <ul class="sub-menu uk-animation-fade">
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-minimal.html">Minimal</a></li>
                        <li class="menu-item menu-item-has-children"><a href="blog-grid-2.html">Grid</a>
                            <ul class="sub-menu uk-animation-fade">
                                <li><a href="blog-grid-2.html">2 columns</a></li>
                                <li><a href="blog-grid-3.html">3 columns</a></li>
                                <li><a href="blog-grid-2-sidebar.html">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="blog-metro.html">Metro</a>
                            <ul class="sub-menu uk-animation-fade">
                                <li><a href="blog-metro.html">2 Column</a></li>
                                <li><a href="blog-metro-3-column.html">3 Column</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="single-standard.html">Single</a>
                            <ul class="sub-menu uk-animation-fade">
                                <li><a href="single-standard.html">Standard</a></li>
                                <li><a href="single-gallery.html">Gallery</a></li>
                                <li><a href="single-audio.html">Audio</a></li>
                                <li><a href="single-video.html">Video</a></li>
                                <li><a href="single-quote.html">Quote</a></li>
                                <li><a href="single-link.html">Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Works</a>
                    <ul class="sub-menu uk-animation-fade">
                        <li class="menu-item menu-item-has-children"><a href="#">Grid</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-grid-2.html">2 columns</a></li>
                                <li><a href="portfolio-grid-3.html">3 columns</a></li>
                                <li><a href="portfolio-grid-4.html">4 columns</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="#">Masonry</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-masonry-2.html">2 columns</a></li>
                                <li><a href="portfolio-masonry-3.html">3 columns</a></li>
                                <li><a href="portfolio-masonry-4.html">4 columns</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio-metro.html">Metro</a></li>
                        <li><a href="portfolio-parallax.html">Parallax<span class="uk-label">New</span></a></li>
                        <li><a href="portfolio-promo.html">Promo<span class="uk-label">New</span></a></li>
                        <li class="menu-item menu-item-has-children"><a href="#">Hover Styles</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-style-1.html">Style 1</a></li>
                                <li><a href="portfolio-style-2.html">Style 2</a></li>
                                <li><a href="portfolio-style-3.html">Style 3</a></li>
                                <li><a href="portfolio-style-4.html">Style 4</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="#">Single</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-single-1.html">Single 1</a></li>
                                <li><a href="portfolio-single-2.html">Single 2</a></li>
                                <li><a href="portfolio-single-3.html">Single 3</a></li>
                                <li><a href="portfolio-single-4.html">Single 4</a></li>
                                <li><a href="portfolio-single-5.html">Single 5</a></li>
                                <li><a href="portfolio-single-6.html">Single 6</a></li>
                                <li><a href="portfolio-single-7.html">Single 7</a></li>
                                <li><a href="portfolio-single-8.html">Single 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children"><a href="home-shop.html">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Default Shop</a></li>
                        <li><a href="shop-cart.html">Cart</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="shop-single.html">Single</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <div class="tw-header-meta">
                <a class="search-btn uk-navbar-toggle" href="#modal-full" data-uk-toggle><i class="ion-ios-search-strong"></i></a>
                <a class="cart-btn uk-light uk-navbar-toggle" href="#"><i class="ion-bag"><span>3</span></i></a>
                <div class="cart-btn-widget uk-light" data-uk-drop="mode: click; boundary: ! .uk-navbar-container; pos: bottom-right; offset: 0; animation: uk-animation-slide-bottom-small; duration: 300">
                    <div class="cart-row uk-grid-collapse" data-uk-grid>
                        <div class="cart-btn uk-width-auto">
                            <img src="<?=$urls->templates?>assets/demo/shop/cart-widget-1.jpg" alt="Shop Widget">
                        </div>
                        <div class="cart-btn tw-padding-left uk-width-3-4">
                            <a class="cart-widget-title" href="shop-single.html" title="Shop Single">Backpack in black</a>
                            <span class="cart-meta">1 x $40.00</span>
                        </div>
                    </div>
                    <div class="cart-row uk-grid-collapse" data-uk-grid>
                        <div class="cart-btn uk-width-auto">
                            <img src="<?=$urls->templates?>assets/demo/shop/cart-widget-2.jpg" alt="Shop Widget">
                        </div>
                        <div class="cart-btn tw-padding-left uk-width-3-4">
                            <a class="cart-widget-title" href="shop-single.html" title="Shop Single">Slim Shirt With Stretch In Black</a>
                            <span class="cart-meta">1 x $40.00</span>
                        </div>
                    </div>
                    <div class="cart-row uk-grid-collapse" data-uk-grid>
                        <div class="cart-btn uk-width-auto">
                            <img src="<?=$urls->templates?>assets/demo/shop/cart-widget-3.jpg" alt="Shop Widget">
                        </div>
                        <div class="cart-btn tw-padding-left uk-width-3-4">
                            <a class="cart-widget-title" href="shop-single.html" title="Shop Single">Alaska Down Feather Jacket</a>
                            <span class="cart-meta">1 x $40.00</span>
                        </div>
                    </div>
                    <div class="cart-row subtotal-row uk-grid-collapse" data-uk-grid>
                        <div class="cart-btn uk-width-expand">
                            <a class="cart-widget-title" href="shop-single.html" title="Subtotal">Subtotal</a>
                        </div>
                        <div class="cart-btn uk-text-right uk-width-auto">
                            <a class="cart-widget-subtotal" href="shop-cart.html" title="Subtotal">$120.00</a>
                        </div>
                    </div>
                    <div class="cart-row cart-checkout-row uk-grid-collapse" data-uk-grid>
                        <div class="cart-btn uk-width-expand">
                            <a class="cart-widget-title" href="shop-cart.html" title="View Cart"><i class="ion-bag"></i> View Cart</a>
                        </div>
                        <div class="cart-btn uk-text-right uk-width-auto">
                            <a class="cart-widget-subtotal" href="shop-cart.html" title="Chcekout"><i class="ion-ios-checkmark-outline"></i>Checkout</a>
                        </div>
                    </div>
                </div>
                <a class="login-btn uk-navbar-toggle" href="#modal-login" data-uk-toggle><i data-uk-icon="icon: user; ratio: 0.8"></i></a>
                <a class="mobile-menu uk-navbar-toggle uk-hidden@m" href="#" data-uk-toggle="target: #mobile-menu-modal"><i class="ion-navicon-round"></i></a>
            </div>
        </div>

        <div id="modal-full" class="uk-modal-full uk-modal" data-uk-modal>
            <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
                <button class="uk-modal-close-full" type="button" data-uk-close></button>
                <form class="uk-search uk-search-large">
                    <span class="input--hoshi">
                        <input class="uk-search-input input__field--hoshi" autofocus type="search" placeholder="Start typing...">
                        <label class="input__label--hoshi"></label>
                        <button type="submit" class="button-search"><i class="ion-ios-search-strong"></i></button>
                    </span>
                </form>
            </div>
        </div>  
        <div id="modal-login" class="modal-login uk-modal-full uk-modal uk-light" data-uk-modal>
            <div class="uk-modal-dialog uk-flex uk-flex-column uk-flex-center uk-flex-middle" data-uk-height-viewport>
                <button class="uk-modal-close-full" type="button" data-uk-close></button>
                <form class="uk-text-center">
                    <h4 class="uk-text-uppercase">Login Form</h4>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon" data-uk-icon="icon: user"></span>
                            <input class="uk-form-width-medium uk-input" type="text" placeholder="Username" autofocus>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon" data-uk-icon="icon: lock"></span>
                            <input class="uk-form-width-medium uk-input" type="password" placeholder="Password">
                        </div>
                    </div>
                    <input class="uk-button uk-button-small uk-button-default uk-margin-bottom uk-input" type="submit" value="Login">
                </form>
            </div>
        </div>

        <div id="mobile-menu-modal" class="uk-modal-full" data-uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full" type="button" data-uk-close></button>
                <div class="uk-light uk-height-viewport tw-mobile-modal uk-flex uk-flex-middle uk-flex-center" data-uk-scrollspy="target:>ul>li,>div>a; cls:uk-animation-slide-bottom-medium; delay: 150;">
                    <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-parent">
                            <a href="index.html">Home</a>
                            <ul class="uk-nav-sub">
                                <li><a href="home-agency.html">Agency</a></li>
                                <li><a href="home-app.html">App<span class="uk-label">New</span></a></li>
                                <li><a href="home-architecture.html">Architecture</a></li>
                                <li><a href="home-band.html">Band<span class="uk-label">New</span></a></li>
                                <li><a href="home-blog-classic.html">Blog Classic</a></li>
                                <li><a href="home-blog-metro.html">Blog Metro</a></li>
                                <li class="uk-active"><a href="#">Business</a></li>
                                <li><a href="home-career.html">Career</a></li>
                                <li><a href="home-church.html">Church<span class="uk-label">New</span></a></li>
                                <li><a href="home-classic.html">Classic</a></li>
                                <li><a href="home-construction.html">Construction</a></li>
                                <li><a href="home-corporate.html">Corporate</a></li>
                                <li><a href="home-education.html">Education<span class="uk-label">New</span></a></li>
                                <li><a href="home-fashion.html">Fashion<span class="uk-label">New</span></a></li>
                                <li><a href="home-finance.html">Finance<span class="uk-label">New</span></a></li>
                                <li><a href="home-fitness.html">Fitness<span class="uk-label">New</span></a></li>
                                <li><a href="home-freelancer.html">Freelancer</a></li>
                                <li><a href="home-fullscreen.html">Full Screen</a></li>
                                <li><a href="home-health.html">Healt<span class="uk-label">New</span></a></li>
                                <li><a href="home-magazine.html">Magazine</a></li>
                                <li><a href="home-minimal.html">Minimal</a></li>
                                <li><a href="home-onepage.html">Onepage</a></li>
                                <li><a href="home-photography.html">Photography<span class="uk-label">New</span></a></li>
                                <li><a href="home-portfolio.html">Portfolio<span class="uk-label">New</span></a></li>
                                <li><a href="home-restaurant.html">Restaurant<span class="uk-label">New</span></a></li>
                                <li><a href="home-resume.html">Resume<span class="uk-label">New</span></a></li>
                                <li><a href="home-shop.html">Shop</a></li>
                                <li><a href="home-splitscreen.html">SplitScreen</a></li>
                                <li><a href="home-startup.html">Startup</a></li>
                                <li><a href="home-studio.html">Studio</a></li>
                                <li><a href="home-travel.html">Travel<span class="uk-label">New</span></a></li>
                                <li><a href="home-video.html">Video</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Pages</a>
                            <ul class="uk-nav-sub">
                                <li><a href="pages-about.html">About Us</a></li>
                                <li><a href="pages-services.html">What We Do</a></li>
                                <li><a href="pages-grid-3.html">Our Team</a></li>
                                <li><a href="pages-clients.html">Clients</a></li>
                                <li><a href="pages-contact.html">Contact Us</a></li>
                                <li><a href="pages-get-in-touch.html">Get in Touch</a></li>
                                <li><a href="pages-404.html">404 Error</a></li>
                                <li><a href="pages-faq.html">FAQ</a></li>
                                <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Elements</a>
                            <ul class="uk-nav-sub">
                                <li><a href="elements-accordion.html">Accordion</a></li>
                                <li><a href="elements-animation.html">Animation<span class="uk-label">Hot</span></a></li>
                                <li><a href="elements-blockquote.html">Blockquote</a></li>
                                <li><a href="elements-button.html">Buttons</a></li>
                                <li><a href="elements-call-action.html">Call to Action</a></li>
                                <li><a href="elements-carousel.html">Carousel</a></li>
                                <li><a href="elements-clients.html">Clients</a></li>
                                <li><a href="elements-columns.html">Columns</a></li>
                                <li><a href="elements-chart-circle.html">Chart Circle</a></li>
                                <li><a href="elements-contact-form.html">Contact Form</a></li>
                                <li><a href="elements-counterup.html">Counter</a></li>
                                <li><a href="elements-dropcaps.html">Dropcaps</a></li>
                                <li><a href="elements-flipbox.html">Flipbox</a></li>
                                <li><a href="elements-google-map.html">Google, Maps</a></li>
                                <li><a href="elements-header-footer.html">Header & Footer<span class="uk-label">Hot</span></a></li>
                                <li><a href="elements-heading.html">Heading</a></li>
                                <li><a href="elements-highlight.html">Highlights</a></li>
                                <li><a href="elements-box.html">Iconbox</a></li>
                                <li><a href="elements-infobox.html">Infobox</a></li>
                                <li><a href="elements-list.html">Lists</a></li>
                                <li><a href="elements-grid.html">Grids & Cards</a></li>
                                <li><a href="elements-message-box.html">Message Box</a></li>
                                <li><a href="elements-open-jobs.html">Open Jobs</a></li>
                                <li><a href="elements-pricing-table.html">Pricing Table</a></li>
                                <li><a href="elements-process.html">Process</a></li>
                                <li><a href="elements-progress.html">Progress Bar</a></li>
                                <li><a href="elements-social.html">Social Icons</a></li>
                                <li><a href="elements-tabs.html">Tabs</a></li>
                                <li><a href="elements-table.html">Table</a></li>
                                <li><a href="elements-team.html">Team</a></li>
                                <li><a href="elements-testimonial.html">Testimonial</a></li>
                                <li><a href="elements-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Blog</a>
                            <ul class="uk-nav-sub">
                                <li><a href="blog-full.html">Standard</a></li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog-full.html">Standard</a></li>
                                <li><a href="blog-minimal.html">Minimal</a></li>
                                <li><a href="blog-grid-2.html">Grid 2</a></li>
                                <li><a href="blog-grid-3.html">Grid 3</a></li>
                                <li><a href="blog-grid-2-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-metro.html">Metro</a></li>
                                <li><a href="blog-metro.html">2 Column</a></li>
                                <li><a href="blog-metro-3-column.html">3 Column</a></li>
                                <li><a href="single-standard.html">Single</a>
                                    <li><a href="single-standard.html">Standard</a></li>
                                    <li><a href="single-gallery.html">Gallery</a></li>
                                    <li><a href="single-audio.html">Audio</a></li>
                                    <li><a href="single-video.html">Video</a></li>
                                    <li><a href="single-quote.html">Quote</a></li>
                                    <li><a href="single-link.html">Link</a></li>
                            </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#">Works</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="portfolio-grid-2.html">Grid 2</a></li>
                                    <li><a href="portfolio-grid-3.html">Grid 3</a></li>
                                    <li><a href="portfolio-grid-4.html">Grid 4</a></li>
                                    <li><a href="portfolio-masonry-2.html">Masonry 2</a></li>
                                    <li><a href="portfolio-masonry-3.html">Masonry 3</a></li>
                                    <li><a href="portfolio-masonry-4.html">Masonry 4</a></li>
                                    <li><a href="portfolio-metro.html">Metro</a></li>
                                    <li><a href="portfolio-parallax.html">Parallax<span class="uk-label">New</span></a></li>
                                    <li><a href="portfolio-promo.html">Promo<span class="uk-label">New</span></a></li>
                                    <li><a href="portfolio-single-1.html">Single 1</a></li>
                                    <li><a href="portfolio-single-2.html">Single 2</a></li>
                                    <li><a href="portfolio-single-3.html">Single 3</a></li>
                                    <li><a href="portfolio-single-4.html">Single 4</a></li>
                                    <li><a href="portfolio-single-5.html">Single 5</a></li>
                                    <li><a href="portfolio-single-6.html">Single 6</a></li>
                                    <li><a href="portfolio-single-7.html">Single 7</a></li>
                                    <li><a href="portfolio-single-8.html">Single 8</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="home-shop.html">Shop</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="shop.html">Default Shop</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                    <li><a href="shop-single.html">Single</a></li>
                                </ul>
                            </li>
                    </ul>


                    <div class="tw-socials tw-socials-minimal">
                        <a href="#"><i class="ion-social-facebook"></i></a>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                        <a href="#"><i class="ion-social-pinterest"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </nav>
 