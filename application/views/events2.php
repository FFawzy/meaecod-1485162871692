<div class="content-wrapper">

<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-rose">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Case Studies</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="index-2.html">Home</a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span href="#">Case Studies</span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>

<!-- End Stunning header -->

<!-- Overlay search -->

<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay search -->

<!-- Case Item -->

<div class="container">
    <div class="row medium-padding120">

        <div class="col-lg-12">

            <div class="heading align-center">
                <h4 class="h1 heading-title">We Help Over 80 Companies</h4>
            </div>

            <ul class="cat-list align-center sorting-menu">

                <li class="cat-list__item active" data-filter="*"><a href="#" class="">All Projects</a></li>
                <li class="cat-list__item" data-filter=".ecommerce"><a href="#" class="">Ecommerce</a></li>
                <li class="cat-list__item" data-filter=".smm"><a href="#" class="">SMM</a></li>
                <li class="cat-list__item" data-filter=".technology"><a href="#" class="">Technology</a></li>
                <li class="cat-list__item" data-filter=".b2b"><a href="#" class="">B2B Services</a></li>
                <li class="cat-list__item" data-filter=".seo"><a href="#" class="">SEO</a></li>

            </ul>


            <div class="row sorting-container" data-layout="fitRows">
                 <?php
                    foreach ($Data as $event) {
                        echo ' <a href="'.base_url().'Home/eventDetail/'.$event->id.'"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sorting-item ecommerce seo smm">
                                <div class="case-item align-center big mb60">
                                    <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                        <img src="'.base_url().$event->image.'" alt="our case">
                                    </div>
                                    <h5 class="case-item__title">'.$event->name.'</h5>
                                    <div class="case-item__cat">
                                        <p>'.$event->location.'</p>
                                        <p>'.$event->country.'</p>
                                    </div>
                                </div>
                            </div></a>';
                    }

                ?>

                

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <nav class="navigation align-center">

                        <a href="#" class="page-numbers prev">
                            <svg class="btn-prev">
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                        </a>

                        <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                        <a href="#" class="page-numbers bg-border-color"><span>5</span></a>

                        <a href="#" class="page-numbers next">
                            <svg class="btn-next">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>

                    </nav>

                </div>

            </div>

        </div>

    </div>
</div>

<!-- End Case Item -->

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">

            <div class="row">

                <div class="subscribe scrollme">

                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="http://cdn1.crumina.net/html-seosight/import.php">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="img/subscr-gear.png" alt="gear" class="gear">
                        <img src="img/subscr1.png" alt="mail" class="mail">
                        <img src="img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->

</div>