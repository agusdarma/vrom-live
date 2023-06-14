<x-front-layout>  
    @section('title', 'Euro Swing Master Expert Advisor - Industry-leading Expert Advisors - TradingJourney.ID')
              <div id="sini" class="text-center bg-white">                  
                  <div class="row col-mb-50">
                    <div class="p-6 col-md-5 d-inline-flex" style="min-height: 350px">
                      <img src="{{ url("build/assets/all/images/logo-euro-swing-master.png")}}" alt="logo euro swing master">
                    </div>

                    <div class="text-center col-md-7 text-md-start bg-light">

                      <div class="mt-4 heading-block">                        
                        <h2 class="text-black fw-bold">{{ __('messages.euroSwingMasterText1') }}</h2>
                        <span>{{ __('messages.euroSwingMasterText2') }}</span>
                      </div>

                      <p><b>{{ __('messages.euroSwingMasterText1') }}</b> {{ __('messages.euroSwingMasterText3') }}</p>
                      <p>{{ __('messages.euroSwingMasterText4') }}</p>
                      <p>{{ __('messages.euroSwingMasterText5') }}</p>
                      
                      <a href="{{ route('front.checkout', $item->slug) }}" class="text-black button button-3d button-large bg-hijau-stabilo">{{ __('messages.euroSwingMasterText6') }}</a>

                    </div>
                  </div>  
                  <div class="mt-6 fancy-title title-border title-center">
                    <h3>{{ __('messages.euroSwingMasterText7') }}</h3>
                  </div>
        
                  <div class="mb-4 row pricing col-mb-30 g-0">
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.euroSwingMasterText8') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price1Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.euroSwingMasterText9') }}<strong>{{ __('messages.euroSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.euroSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg">{{ __('messages.euroSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.euroSwingMasterText12') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price3Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.euroSwingMasterText9') }}<strong>{{ __('messages.euroSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.euroSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.euroSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.euroSwingMasterText13') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price6Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.euroSwingMasterText9') }}<strong>{{ __('messages.euroSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.euroSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg">{{ __('messages.euroSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.euroSwingMasterText14') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price12Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.euroSwingMasterText9') }}<strong>{{ __('messages.euroSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.euroSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.euroSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                  </div>                               
                  <div class="row justify-content-center">
                    <div class="col-md-10">                        
                      <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.euroSwingMasterText15') }}</p>
                      <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.euroSwingMasterText16') }}</h1>
                      <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
                      <h3>{{ __('messages.euroSwingMasterText17') }}</h3>

                      <div class="mb-0 row col-mb-50">
                        <div class="col-md-6">
                          <ul class="iconlist iconlist-lg">
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText18') }}</span></li>
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText19') }}</span></li>
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText20') }}</span></li>
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText21') }}</span></li>                            
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText22') }}</span></li>
                          </ul>
                        </div>

                        <div class="col-md-6">
                          <ul class="iconlist iconlist-lg">
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText23') }}</span></li>
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText24') }}</span></li>
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText25') }}</span></li>                            
                            <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.euroSwingMasterText26') }}</span></li>
                          </ul>
                        </div>
                      <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
                      
                      <h3>{{ __('messages.euroSwingMasterText27') }}</h3>

                      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/euro-bt2.jpg")}}" alt="Trade while Covid Delta">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-hijau-stabilo" style="width: 18rem;">{{ __('messages.euroSwingMasterText28') }}</h3>                              
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/euro-bt1.jpg")}}" alt="Backtest Result">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-hijau-stabilo" style="width: 12rem;">{{ __('messages.euroSwingMasterText29') }}</h3>                              
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/euro-bt3.jpg")}}" alt="Trade while Ukraine War">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-hijau-stabilo" style="width: 20rem;">{{ __('messages.euroSwingMasterText30') }}</h3>                              
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </a>
                      </div>  
                      <div class="divider divider-right"><i class="bi-heart-fill"></i></div>

                      <div class="row justify-content-center">
                        <div class="col-md-10">
                          <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.euroSwingMasterText31') }}</p>
                          <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.euroSwingMasterText32') }}</h1>
                          <a href="{{ route('front.euro.forwardTest.index') }}" target="_blank" class="text-black button button-3d button-large bg-hijau-stabilo">{{ __('messages.euroSwingMasterText35') }}</a>
                          <div class="divider divider-right"><i class="bi-heart-fill"></i></div>                                                    
                        </div>
                      </div>
                      <!-- Slider -->
                      {{-- <section id="slider" class="mt-5 slider-element revslider-wrap">
                        <div class="container">

                          <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                              <ul>
                                <!--1 SLIDE TRADES  -->
                                <li data-index="rs-15" data-transition="zoomin" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-trades.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Trades" data-description="">
                                  <!-- MAIN IMAGE -->                                     
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-trades.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                    id="slide-18-layer-9"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="600"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:0px;"
                                    data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Trades
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-4"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-8"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>
                                <!--2 SLIDE OVERALL RESULT  -->
                                <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-overall.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Overall Result" data-description="">
                                  <!-- MAIN IMAGE -->                                      
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-overall.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                    id="slide-18-layer-9"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="600"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:0px;"
                                    data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Overall Result
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-4"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                    id="slide-16-layer-8"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>
                                <!--3 SLIDE MONTH RESULT  -->
                                <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-month.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Monthly Result" data-description="">
                                  <!-- MAIN IMAGE -->                                      
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-month.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                      id="slide-18-layer-9"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="600"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;"
                                      data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-1"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Monthly Result
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-4"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-8"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>
                                <!--4 SLIDE Growth RESULT  -->
                                <li data-index="rs-18" data-transition="zoomin" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-growth.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Growth Result" data-description="">
                                  <!-- MAIN IMAGE -->                                      
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-growth.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                      id="slide-18-layer-9"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="600"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;"
                                      data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-1"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Growth Result
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-4"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-8"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>
                                <!--5 SLIDE Consecutive Profit  -->
                                <li data-index="rs-19" data-transition="fadetotopfadefrombottom" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-consecutive-profit.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Consecutive Profit" data-description="">
                                  <!-- MAIN IMAGE -->                                      
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-consecutive-profit.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                      id="slide-18-layer-9"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="650"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;"
                                      data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-1"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Consecutive Profit
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-4"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-8"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>
                                <!--6 SLIDE Consecutive Loss  -->
                                <li data-index="rs-20" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url("build/assets/all/images/forward-test/thumbnail/euro-swing-master-consecutive-loss.png")}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Consecutive Loss" data-description="">
                                  <!-- MAIN IMAGE -->                                    
                                  <img src="{{ url("build/assets/all/images/forward-test/euro-swing-master-consecutive-loss.png")}}"  alt="Image"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                  <!-- LAYERS -->

                                  <!-- LAYER BG -->
                                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                      id="slide-18-layer-9"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                          data-width="650"
                                    data-height="140"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;"
                                      data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000"
                                    data-responsive_offset="on"


                                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                  </div>

                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-1"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                          data-fontsize="['70','70','70','45']"
                                    data-lineheight="['70','70','70','50']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-responsive_offset="on"

                                    data-elementdelay="0.05"

                                    style="z-index: 5; white-space: nowrap;">Consecutive Loss
                                  </div>

                                  <!-- LAYER NR. 2 -->
                                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-4"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1500"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 6; white-space: nowrap;">Euro Swing Master
                                  </div>

                                  <!-- LAYER NR. 3 -->
                                  <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0"
                                      id="slide-16-layer-8"
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                      data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                          data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                      data-style_hover="cursor:default;"

                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="2000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"


                                    style="z-index: 7; white-space: nowrap;"><i class="bi-arrow-repeat"></i>
                                  </div>
                                </li>							
                              </ul>
                              <div class="tp-static-layers"></div>
                              <div class="tp-bannertimer" style="height: 7px; background-color: rgba(95, 253, 170, 0.35);"></div>
                            </div>
                          </div><!-- END REVOLUTION SLIDER -->

                        </div>
                      </section> --}}
                      
                    </div>
                  </div>
				      </div>  
              
                              
        </div>

        <div class="m-0 alert alert-primary rounded-0 fixed-bottom bg-hijau-stabilo" data-animate="fadeInUp faster">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-auto">
                <strong><i class="bi-boxes"></i> {{ __('messages.euroSwingMasterText33') }}</strong> {{ __('messages.euroSwingMasterText34') }}
              </div>
              <div class="mt-3 col-lg-auto mt-lg-0">
                <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-success">{{ __('messages.euroSwingMasterText6') }}</a>
                <button type="button" class="btn-close btn btn-link float-lg-none text-dark ms-md-3" data-bs-dismiss="alert" aria-hidden="true"></button>
              </div>
            </div>
          </div>
        </div>
        <script>
        </script>
</x-front-layout>
