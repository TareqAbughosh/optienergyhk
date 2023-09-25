@extends('layouts.app')
<style>
    .button-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.glass-btn {
  width: 100px;
  height: 100px;
  background-color: #fafafa;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 7px;
  margin-left: 1em;
  margin-right: 1em;
  cursor: pointer;
  transition: all 0.3s;
}
.glass-btn.blue-btn {
  box-shadow: 0px 20px 20px -17px rgba(0, 111, 255, 0.53);
}
.glass-btn.blue-btn:hover {
  box-shadow: 0px 20px 35px -16px rgba(0, 111, 255, 0.65);
}
.glass-btn.blue-btn .content {
  font-size: 4em;
  font-family: "Roboto", sans-serif;
  background: linear-gradient(to right, #006fff, #00acff 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 10px 37px rgba(0, 111, 255, 0.8);
}
.glass-btn.red-btn {
  box-shadow: 0px 20px 20px -17px rgba(255, 16, 39, 0.5);
}
.glass-btn.red-btn:hover {
  box-shadow: 0px 20px 35px -16px rgba(255, 16, 39, 0.57);
}
.glass-btn.red-btn .content {
  font-size: 4em;
  font-family: "Roboto", sans-serif;
  background: linear-gradient(to right, #ff1027, #ff4f06 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 10px 37px rgba(255, 16, 39, 0.6);
}
.glass-btn.amber-btn {
  box-shadow: 0px 20px 20px -17px rgba(255, 159, 16, 0.53);
}
.glass-btn.amber-btn:hover {
  box-shadow: 0px 20px 35px -16px rgba(255, 159, 16, 0.6);
}
.glass-btn.amber-btn .content {
  font-size: 4em;
  font-family: "Roboto", sans-serif;
  background: linear-gradient(to right, #ff8d00, #f7ad07 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 10px 37px rgba(255, 94, 16, 0.7);
}
.glass-btn:hover {
  background-color: whitesmoke;
  transform: translateY(-5px);
  transition: all 0.3s;
}
</style>
@section('content')
<section class="page_slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="ds cover-image">
                <img src="/images/slide01.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        <h6 class="intro_before_featured_word">Cruide Oil Trading</h6>
                                        <h2 class="text-capitalize intro_featured_word">
                                            Maximize returns through our expertise of market leverage and risk management.
                                        </h2>
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>
            <li class="ds cover-image">
                <img src="/images/slide02.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        <h6 class="intro_before_featured_word">Natural Gas Trading</h6>
                                        <h2 class="text-capitalize intro_featured_word">
                                            Competitve pricing through our complix navigation of the supply chain.
                                        </h2>
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>
            <li class="ds cover-image">
                <img src="/images/slide03.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        <h6 class="intro_before_featured_word">Petroleum Products</h6>
                                        <h2 class="text-capitalize intro_featured_word">
                                            We facilitate all refined fuels and petrochemicals products.
                                        </h2>
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>


        </ul>
    </div> <!-- eof flexslider -->
</section>

<section class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60" id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="special-heading">
                    <span class="text-capitalize">
                        Our Approach
                    </span>
                </h2>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <p class="special-heading" style="letter-spacing: 3px;">
                    <span>
                        At Opti Energy, we adopt a global and agile approach to fulfill the energy
                        requirements of our partners worldwide. This is made possible through our strong
                        and strategic partnerships in the industry and our streamlined supply chain
                        operations. We pride ourselves on supporting suppliers in maintaining uninterrupted
                        production operations by faithfully honoring our contractual upliftment commitments.
                    </span>
                </p>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>

            </div>
            <div class="col-lg-6">
                <div class="divider-40 hidden-above-lg"></div>
                <div class="button-container">
  
                    <div class="glass-btn amber-btn">
                      <!--<div class="content">
                        h
                      </div> -->
                      <i class="fa fa-book fa-2x"></i>
                    </div>
                  
                    <div class="glass-btn red-btn">
                      <!-- <div class="content">
                        e
                      </div> -->
                      <img src="https://i.postimg.cc/LstJ4Hhf/youtube.png" alt="youtube" style="width: 6em;">
                    </div>
                    
                    <div class="glass-btn amber-btn">
                      <!-- <div class="content">
                        y
                      </div> -->
                      <img src="https://i.postimg.cc/tgQ1H1Rp/soundcloud.png" alt="soundcloud" style="width: 6em;">
                    </div>
                  
                  </div>
            </div>
        </div>
    </div>
</section>
<section class="ds text-sm-left text-center container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="row service-v2">
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-refinery"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Thermal Power
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-tank"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Oil Platform
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-oil"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Gas Flaring
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-extraction"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Oil Pump
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-oil-tanker"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Oil Refinaery
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="service-single.html">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-pipe"></i>
                        </div>
                    </a>
                    <a href="service-single.html">
                        <h5>
                            Factory
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center c-gutter-60" id="partners">
    <div class="container">
        <div class="row">
            <h2 class="special-heading text-sm text-center">
                <span class="text-capitalize">
                    Our partners
                </span>
            </h2>
            <br>
            <br>
            <div class="col-12">
                <div class="divider-30 hidden-above-lg"></div>
                <div class="row isotope-wrapper masonry-layout images-grid c-mb-30 c-gutter-30">
                    <div class="col-lg-4  col-sm-6  ">
                        <a href="https://www.lubrico.com.tr/en/" target="_blank">
                            <div class="bordered text-center p-xl-50 p-20 rounded">
                                <img src="/images/partners/lubrico.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6  ">
                        <a href="https://www.legendbrokers.com/" target="_blank">
                            <div class="bordered text-center p-xl-50 p-20 rounded">
                                <img src="/images/partners/legendbrokers.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6  ">
                        <a href="https://yavuzkiymetlimadenler.com" target="_blank">
                            <div class="bordered text-center p-xl-50 p-20 rounded">
                                <img src="/images/partners/Yavuz.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6  ">
                        <a href="https://www.enrocks.com/" target="_blank">
                            <div class="bordered text-center p-xl-50 p-20 rounded">
                                <img src="/images/partners/enrocks.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6  ">
                        <a href="https://www.hadefpartners.com/" target="_blank">
                            <div class="bordered text-center p-xl-50 p-20 rounded">
                                <img src="/images/partners/hadef-and-partners.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mt--30"></div>
            </div>
        </div>
    </div>
</section>

<section class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60" id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="special-heading">
                    <span class="text-capitalize">
                        ABOUT US
                    </span>
                </h2>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <p class="special-heading">
                    <span>
                        At Opti Energy, we are more than just an energy trading company; we are a dynamic
                        force driving innovation and excellence in the global energy marketplace. With a
                        distinguished reputation and a commitment to unwavering integrity, we have
                        established ourselves as a trusted partner in the ever-evolving energy industry.
                    </span>
                </p>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="d-flex flex-column flex-sm-row justify-content-between flex-wrap ">
                    <div class="simple-counter">
                        <h3 class="special-heading counter-wrap">
                            <span class="counter color-main thin big" data-from="0" data-to="20" data-speed="1800">0</span>
                        </h3>
                        <p class="special-heading bold color-darkgrey">
                            <span>
                                Years
                            </span>
                        </p>
                        <h6 class="special-heading text-capitalize">
                            <span>
                               Team Experience
                            </span>
                        </h6>
                    </div>
                    <div class="divider-30 hidden-above-sm"></div>
                    <div class="simple-counter">
                        <h3 class="special-heading counter-wrap">
                            <span class="counter color-main thin big" data-from="0" data-to="1" data-speed="1800">0</span>
                        </h3>
                        <p class="special-heading bold color-darkgrey">
                            <span>
                                Office

                            </span>
                        </p>
                        <h6 class="special-heading text-capitalize">
                            <span>
                                Worldwide
                            </span>
                        </h6>
                    </div>
                    <div class="divider-30 hidden-above-sm"></div>
                    <div class="simple-counter">
                        <h3 class="special-heading counter-wrap">
                            <span class="counter-add thin color-main big">+</span>
                            <span class="counter color-main thin big" data-from="0" data-to="20" data-speed="1800">0</span>
                        </h3>
                        <p class="special-heading bold color-darkgrey">
                            <span>
                                Professionals
                            </span>
                        </p>
                        <h6 class="special-heading text-capitalize">
                            <span>
                                Employed
                            </span>
                        </h6>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="divider-40 hidden-above-lg"></div>
                <div id="map-vector"></div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="special-heading text-center">
                    <span class="text-capitalize">
                        Latest News
                    </span>
                </h2>
                <p class="special-heading text-center">
                    <span class="text-capitalize color-darkgrey bold">
                        our blog
                    </span>
                </p>
                <div class="divider-50 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="shortcode-posts row tiled-layout c-gutter-30 c-mb-30">
                    <div class="bigitem col-xl-6 col-lg-5">
                        <article class="vertical-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-@@type.html">
                                    <img src="/images/blog/01.jpg" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <div class="byline">
                                            <span class="date">
                                                <a href="blog-@@type.html" rel="bookmark">
                                                    <time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
                                                </a>
                                            </span>
                                            <span class="author vcard">
                                                <a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="blog-single-@@type.html" rel="bookmark">
                                            Consectetur adipisicing elited do eiusmod tempor incididunt ut labore.
                                        </a>
                                    </h4>

                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>
                                        Tempor incididunt labore dolmagna aliqua eniminim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                                    </p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article><!-- #post-## -->
                    </div>
                    <div class=" smallitem col-xl-6 col-lg-7">
                        <article class="vertical-item side-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-@@type.html">
                                    <img src="/images/blog/square/02.jpg" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <div class="byline">
                                            <span class="date">
                                                <a href="blog-@@type.html" rel="bookmark">
                                                    <time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
                                                </a>
                                            </span>
                                            <span class="author vcard">
                                                <a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="blog-single-@@type.html" rel="bookmark">
                                            Lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h4>

                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>
                                        Tempor incididunt labore dolmagna aliqua eniminim veniam quis.
                                    </p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article>
                        <article class="vertical-item side-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-@@type.html">
                                    <img src="/images/blog/square/03.jpg" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <div class="byline">
                                            <span class="date">
                                                <a href="blog-@@type.html" rel="bookmark">
                                                    <time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
                                                </a>
                                            </span>
                                            <span class="author vcard">
                                                <a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="blog-single-@@type.html" rel="bookmark">
                                            Adipisicing elit sed do eiusmod
                                        </a>
                                    </h4>

                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>
                                        Nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article>
                    </div>
                </div>
                <div class="mt--30"></div>
            </div>
        </div>
    </div>
</section> --}}
@endsection