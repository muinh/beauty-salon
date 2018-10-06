@extends('layouts.base')
@section('title', 'Hair salon furniture & beauty salon equipment - Gamma & Bross')
@section('content')
<div class="wrapper">
    <div class="header-v6 header-classic-white header-sticky">
        <div class="topbar bg-grey ">
            <div class="container" >
                <div class="row">
                    <div class="col-xs-6" >
                        <ul class="top-socials list-inline">
                            <li><a href="https://www.facebook.com/gammabross"  target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="https://plus.google.com/116150927900990201324/posts"  target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>

                            <li><a href="http://www.twitter.com/gammabross"  target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="http://pinterest.com/gammabross/"  target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>

                            <li><a href="http://www.youtube.com/user/gammabross"  target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>

                        </ul>

                    </div>
                    <div class="col-xs-6 text-right" >
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm dropdown-toggle top-menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('/img/flags/en.png') }}" alt="">&nbsp;<i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right lang-menu">
                                <li>
                                    <a href="{{ url('/it') }}"><img src="{{ asset('/img/flags/it.png') }}" alt="Entra" class="icon-lang-prehome" ></a>
                                    <a href="{{ url('/en') }}"><img src="{{ asset('/img/flags/en.png') }}" alt="Enter" class="icon-lang-prehome"></a>
                                    <a href="{{ url('/fr') }}"><img src="{{ asset('/img/flags/fr.png') }}" alt="Entrer" class="icon-lang-prehome"></a>
                                    <a href="{{ url('/es') }}"><img src="{{ asset('/img/flags/es.png') }}" alt="Entrar" class="icon-lang-prehome"></a>
                                    <a href="{{ url('/de') }}"><img src="{{ asset('/img/flags/de.png') }}" alt="Eingeben" class="icon-lang-prehome"></a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-sm top-menu-btn">
                                &nbsp;<a href="http://private.gammabross.com" >
                                    <img src="{{ asset('img/unlock.png') }}" alt=""></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation" >
            <div class="container container-space" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand"  >
                        <a href="en.html"> <img alt="Gamma & Bross" class="shrink-logo" src="{{ asset('img/logo.png') }}" > </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse"  >
                    <div class="menu-container" >
                        <ul class="nav navbar-nav" >
                            <!-- Home -->
                            <li class="active" > <a href="en.html">Home</a></li>
                            <!-- End Home -->

                            <li class="dropdown  "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    Company              </a>
                                <ul class="dropdown-menu">
                                    <!-- About Pages -->
                                    <li><a href="https://www.gammabross.com/en/company-profile/" >
                                            Profile                  </a></li>
                                    <li><a href="https://www.gammabross.com/en/company-philosophy/" >
                                            Philosophy                  </a></li>
                                    <li><a href="https://www.gammabross.com/en/company-history/" >
                                            History                  </a></li>
                                    <li><a href="https://www.gammabross.com/en/distribution/">
                                            Distribution                  </a></li>


                                </ul>
                                <!-- End About Pages -->
                            </li>
                            <!-- Start Dropdpwn Categorie -->
                            <li class="dropdown"><a href="https://www.gammabross.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button">Products</a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.gammabross.com/en/cat/">Categories</a></li>
                                    <li class="divider"></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/shampoo-bowls/"> Shampoo Bowls </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/styling-salon-chairs/"> Styling Salon Chairs </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/barber-chairs/"> Barber Chairs </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/island-stations/"> Island Stations </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-styling-stations/"> Salon Styling Stations </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-reception-desks/"> Salon Reception Desks </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/waiting-area-seating/"> Waiting Area Seating </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-retail-displays/"> Salon Retail Displays </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/manicure-tables/"> Manicure Tables </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/beauty-furniture/"> Beauty Furniture </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-trolleys/"> Salon Trolleys </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/beauty-salon-stools/"> Beauty Salon Stools </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-design-accessories/"> Salon Design Accessories </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/hood-dryers/"> Hood Dryers </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/salon-posters/"> Salon Posters </a></li>
                                    <li><a  href="https://www.gammabross.com/en/cat/pedicure-spa-chairs/"> Pedicure Spa Chairs </a></li>

                                </ul>
                            </li>
                            <!-- End Dropdpwn Categorie -->


                            <!-- Start Dropdpwn Linee -->
                            <li class="dropdown">
                                <a href="https://www.gammabross.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button">Lines</a>
                                <ul class="dropdown-menu">
                                    <li><a  href="https://www.gammabross.com/en/line/black-design-by-f-a-porsche/"> Black Design by F.A.Porsche </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/homme/"> Homme </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/echoes-collection/"> Echoes Collection </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/bio-logic/"> Bio Logic </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/nutopia-by-karim-rashid/"> Nutopia by Karim Rashid </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/fashion-collection/"> Fashion Collection </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/collezione-privata-by-marcel-wanders/"> Collezione Privata by Marcel Wanders </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/dressing-beauty-by-aldo-coppola/"> Dressing Beauty by Aldo Coppola </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/9000-series/"> 9000 Series </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/giugiaro-design/"> Giugiaro Design </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/artform/"> ArtForm </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/pop-beauty/"> Pop Beauty </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/salon-emotion-polaris-collection-l-oreal/"> Salon Emotion Polaris Collection L'Oreal </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/fluid-generation/"> Fluid Generation </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/spa-logic/"> Spa Logic </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/diamond-line/"> Diamond Line </a></li>
                                    <li><a  href="https://www.gammabross.com/en/line/glow-series/"> Glow Series </a></li>

                                </ul>
                            </li>
                            <!-- End Dropdpwn Linee -->

                            <!-- Designers-->
                            <li class="dropdown "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Designers </a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.gammabross.com/en/designers/fendi-casa/"  > Fendi Casa </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/marcel-wanders/"  > Marcel Wanders </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/karim-rashid/"  > Karim Rashid </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/giugiaro-design/"  > Giugiaro Design </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/f-a-porsche/"  > F. A. Porsche </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/anton-kobrinetz/"  > Anton Kobrinetz </a></li>
                                    <li><a href="https://www.gammabross.com/en/designers/aldo-coppola/"  > Aldo Coppola </a></li>
                                </ul>
                            </li>
                            <!-- /Designers -->

                            <!-- Design Center-->
                            <li class="dropdown "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Design Center </a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.gammabross.com/en/salon-layouts/"  > Salon Layouts </a></li>
                                    <li><a href="https://www.gammabross.com/en/salon-pictures/"  > Salon Pictures </a></li>
                                    <li><a href="https://www.gammabross.com/en/showrooms/"  > Showrooms </a></li>
                                    <li><a href="https://www.gammabross.com/en/salon-planner/"  > Salon Planner </a></li>
                                </ul>
                            </li>
                            <!-- /Design Center -->

                            <!-- News-->
                            <li class=""> <a href="https://www.gammabross.com/en/news/">News</a></li>
                            <!-- /News -->

                            <!-- Contatti -->
                            <li class="dropdown "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Contacts </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="https://www.gammabross.com/en/contacts-email/" class="menulink "> Email addresses </a> </li>
                                    <li><a href="https://www.gammabross.com/en/contacts-info/"  > Info Request </a></li>
                                    <li><a href="https://www.gammabross.com/en/contacts-job/"  > Send Your Application </a></li>
                                    <li><a href="https://www.gammabross.com/en/contacts-catalog/"  > Catalog Request </a></li>
                                </ul>
                            </li>
                            <!-- /Contatti -->

                            <li class="dropdown search-box">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    &nbsp;<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <ul class="dropdown-menu pull-right col-md-6">
                                    <li>
                                        <form action="https://www.gammabross.com/searchset.php" method="get" enctype="multipart/form-data" id="searchform" class="uk-form uk-navbar-content">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="searchstring" placeholder="Product name or code">
                                                <span class="input-group-btn">
						        <button class="btn btn-default" type="submit">&nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
						      </span>
                                            </div>
                                            <input type="hidden" name="lang" value="en">
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!-- /Header -->

    <!-- Slider -->
    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                    <!-- MAIN IMAGE -->
                    <img class="homeimage" src="{{ asset('img/slider/echoes-collectio1n.jpg') }}" alt="ECHOES Collection"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> </li>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                    <!-- MAIN IMAGE -->
                    <img class="homeimage" src="{{ asset('img/slider/Slider_5ae199f133702.png') }}" alt="2018 Promo"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> </li>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
                    <!-- MAIN IMAGE -->
                    <img class="homeimage" src="{{ asset('img/slider/Slider_57ecc54c857e8.jpg') }}" alt="BARBER SHOP Collection"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> </li>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 4">
                    <!-- MAIN IMAGE -->
                    <img class="homeimage" src="{{ asset('img/slider/Slider_57ecc510b4d0c.jpg') }}" alt="Collezione Privata by Marcel Wanders"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> </li>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
                    <!-- MAIN IMAGE -->
                    <img class="homeimage" src="{{ asset('img/slider/Slider_57ee74611718c.jpg') }}" alt="Gamma & Bross"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->
    <!-- /Slider -->

    <div class=" margin-bottom-60 margin-top-60">

        <div class="container">
            <div class="row">
                <div class="col-md-9">



                    <h1 class="title-v2 margin-top-20">Hair salon furniture & beauty salon equipment</h1>
                    <p class="margin-bottom-20">
                    <p><strong>Gamma &amp; Bross</strong> is leader in the design and manufacturing of furniture and equipment for beauty salons and spas. Our products are designed by the most talented international designers including Marcel Wanders, Karim Rashid, F.A. Porsche, and Gamma Design Lab, our internal team of designers. We constantly work with the best Italian suppliers to engineer the most innovative solutions for our clients. Gamma &amp; Bross salon equipment products are manufactured in Italy and sold in over 40 countries worldwide through our network of selected dealers as well as our flagship showrooms in New York, Paris and Cologne. Our salon furniture collections are divided into 4 brands: <strong>MGBross</strong> gathers our top designer lines and is addressed to high-end beauty salons. <strong>Gamma State-of-the-Art</strong> includes all our in-house designed furniture for medium/high-end clients. <strong>GammaStore</strong> is focused on affordable salon furnishings for a broader clientele. <strong>Spa Logic</strong> provides design furniture and equipment for Spas.</p></p>
                    <a href="https://www.gammabross.com/en/company-profile/" class="btn-u margin-bottom-20">More</a>


                </div>
                <div class="col-md-3">
                    <h3>Categories</h3>
                    <ul class="list-group sidebar-nav-v1">
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/shampoo-bowls/"> Shampoo Bowls </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/styling-salon-chairs/"> Styling Salon Chairs </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/barber-chairs/"> Barber Chairs </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/salon-styling-stations/"> Salon Styling Stations </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/salon-reception-desks/"> Salon Reception Desks </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/pedicure-spa-chairs/"> Pedicure Spa Chairs </a></li>
                        <li role="presentation" class="list-group-item"><a href="https://www.gammabross.com/en/cat/massage-tables/"> Massage Tables </a></li>

                    </ul>
                    <a href="https://www.gammabross.com/en/cat/" class="btn-u">Products</a>
                </div>
            </div>
        </div>
    </div>


    <div class="headline-center">
        <!--=== prod parallax ===-->
        <div class="parallax-team parallaxBg">
            <div class="container content">
                <div class="title-box-v2">
                    <h2>Product highlights</h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>

                <div class="row">

                    <!-- prod -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-v2">
                            <a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/741/alipes-roto/"><img class="img-responsive" src="{{ asset('img/products/1.jpeg') }}" alt="Alipes Roto" /></a>
                            <div class="inner-team">
                                <h3><a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/741/alipes-roto/">Alipes Roto</a></h3>
                                <p><a href="https://www.gammabross.com/en/cat/styling-salon-chairs/">Styling Salon Chairs</a></p>
                                <p><strong>GammaStore</strong></p>
                            </div>
                        </div>

                    </div>
                    <!-- End prod -->

                    <!-- prod -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-v2">
                            <a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/1114/babuska-roto/"><img class="img-responsive" src="{{ asset('img/products/2.jpeg') }}" alt="Babuska Roto" /></a>
                            <div class="inner-team">
                                <h3><a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/1114/babuska-roto/">Babuska Roto</a></h3>
                                <p><a href="https://www.gammabross.com/en/cat/styling-salon-chairs/">Styling Salon Chairs</a></p>
                                <p><strong>GammaStore</strong></p>
                            </div>
                        </div>

                    </div>
                    <!-- End prod -->

                    <!-- prod -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-v2">
                            <a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/1114/babuska-roto/"><img class="img-responsive" src="{{ asset('img/products/3.jpeg') }}" alt="Babuska Roto" /></a>
                            <div class="inner-team">
                                <h3><a href="https://www.gammabross.com/en/product/gammastore/styling-salon-chairs/1114/babuska-roto/">Babuska Roto</a></h3>
                                <p><a href="https://www.gammabross.com/en/cat/styling-salon-chairs/">Styling Salon Chairs</a></p>
                                <p><strong>GammaStore</strong></p>
                            </div>
                        </div>

                    </div>
                    <!-- End prod -->

                    <!-- prod -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-v2">
                            <a href="https://www.gammabross.com/en/product/gammastore/shampoo-bowls/1431/celebrity-prime-shiatsu/"><img class="img-responsive" src="{{ asset('img/products/4.jpeg') }}" alt="Celebrity Prime Shiatsu" /></a>
                            <div class="inner-team">
                                <h3><a href="https://www.gammabross.com/en/product/gammastore/shampoo-bowls/1431/celebrity-prime-shiatsu/">Celebrity Prime Shiatsu</a></h3>
                                <p><a href="https://www.gammabross.com/en/cat/shampoo-bowls/">Shampoo Bowls</a></p>
                                <p><strong>GammaStore</strong></p>
                            </div>
                        </div>

                    </div>
                    <!-- End prod -->

                </div>
            </div>
        </div> </div>
    <!--=== End prod parallax ===-->

    <div>
        <div class="container content-sm home-news margin-bottom-20">
            <div class="text-center margin-bottom-30">
                <h2 class="title-v2 title-center">Latest news</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnails-v1 margin-bottom-20">
                        <div class="thumbnail-img"> <img class="img-responsive" src="{{ asset('img/news/ProductNews_5ba3bc664f40a.jpg') }}" alt=""> </div>
                        <div class="caption">
                            <h3><a href="https://www.gammabross.com/en/story/85/grand-opening-gamma-bross-duesseldorf-showroom/">Grand Opening GAMMA & BROSS Düsseldorf Showroom</a></h3>
                            <small>30 Sep. 2018</small>
                            <p>Gamma & Bross is glad to announce the opening of its new Flagship Showroom in Halskestraße, 46, 40880 Ratingen. The new showroom is equipped with all the latest salon furniture collections, as well as the best sellers, who made Gamma & Bross leader in the world of hairdressing furnishings.
                                All cl ... </p>
                            <a href="https://www.gammabross.com/en/story/85/grand-opening-gamma-bross-duesseldorf-showroom/" class="btn-u">More</a> </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnails-v1 margin-bottom-20">
                        <div class="thumbnail-img"> <img class="img-responsive" src="{{ asset('img/news/ProductNews_5b9a61470832f.jpg') }}" alt=""> </div>
                        <div class="caption">
                            <h3><a href="https://www.gammabross.com/en/story/84/mondial-coiffure-beaute-2018-paris-france/">MONDIAL COIFFURE BEAUTÈ 2018 Paris - France</a></h3>
                            <small>08 Sep. 2018</small>
                            <p>Gamma & Bross took part to MCB 2018 in Paris, the most relevant Beauty Show in France, where it announced its new collaboration with L'Oréal Professionnel for the supply of Salon Emotion furniture program. The company presented on its stand the new Polaris Collection. On the booth, new products fro ... </p>
                            <a href="https://www.gammabross.com/en/story/84/mondial-coiffure-beaute-2018-paris-france/" class="btn-u">More</a> </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnails-v1 margin-bottom-20">
                        <div class="thumbnail-img"> <img class="img-responsive" src="{{ asset('img/news/ProductNews_5aabd1989a5e9.png') }}" alt=""> </div>
                        <div class="caption">
                            <h3><a href="https://www.gammabross.com/en/story/83/cosmoprof-2018-dressing-beauty-by-aldo-coppola/">Cosmoprof 2018 - Dressing Beauty by Aldo Coppola</a></h3>
                            <small>16 Mar. 2018</small>
                            <p>We welcome you to visit our booth C25-B26.. at Pavillion 33. For those of you who won’t be able to attend, follow our live sessions and news on our Facebook page Facebook page facebook.com/gammabross and Instagram page instagram.com/gammabross ... </p>
                            <a href="https://www.gammabross.com/en/story/83/cosmoprof-2018-dressing-beauty-by-aldo-coppola/" class="btn-u">More</a> </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="brands bg-grey">
        <!--=== Owl Clients v1 ===-->
        <div class="container content-sm">
            <div id="owl-brands">

                <div>
                    <a href="http://www.gamma-spalogic.net"><img class="img-responsive transition" src="{{ asset('img/brands/brand-spalogic.png') }}" alt="Spa Logic"></a>
                </div>

                <div>
                    <a href="http://www.mgbross.com"><img class="img-responsive transition" src="{{ asset('img/brands/brand-mgbross.png') }}" alt="MG Bross"></a>
                </div>

                <div>
                    <a href="http://www.gammastore.com"><img class="img-responsive transition" src="{{ asset('img/brands/brand-gammastore.png') }}" alt="Gamma Store"></a>
                </div>

                <div>
                    <a href="http://www.gamma-state-of-the-art.com"><img class="img-responsive transition" src="{{ asset('img/brands/brand-gamma.png') }}" alt="Gamma State of the Art"></a>
                </div>
            </div>
        </div>
        <!--=== End Owl Clients v1 ===-->
    </div>
    @include('layouts.footer')
</div>
@endsection
