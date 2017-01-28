
<div class="content-wrapper" style="backroung-color:#f7f9f9;">

 <div class="header-spacer"></div>

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
                <h4 class="h1 heading-title">Check our Events</h4>
            </div>


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

           <!--  <div class="row">

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

            </div> -->

        </div>

    </div>
</div>

<!-- End Case Item -->



</div>