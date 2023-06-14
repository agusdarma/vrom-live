<x-front-layout>  
      @section('title', 'Pound Swing Master Expert Advisor - Industry-leading Expert Advisors - TradingJourney.ID')    
              <div id="sini" class="text-center bg-white">                  
                  <div class="row col-mb-50">
                    <div class="p-6 col-md-5 d-inline-flex" style="min-height: 350px">
                      <img src="{{ url("build/assets/all/images/logo-pound-swing-master.png")}}" alt="logo pound swing master">
                    </div>

                    <div class="text-center col-md-7 text-md-start bg-light">

                      <div class="mt-4 heading-block">
                        <h2 class="text-black fw-bold">{{ __('messages.poundSwingMasterText1') }}</h2>
                        <span>{{ __('messages.poundSwingMasterText2') }}</span>
                      </div>

                      <p><b>{{ __('messages.poundSwingMasterText1') }}</b> {{ __('messages.poundSwingMasterText3') }}</p>
                      <p>{{ __('messages.poundSwingMasterText4') }}</p>
                      <p>{{ __('messages.poundSwingMasterText5') }}</p>
                      
                      <a href="{{ route('front.checkout', $item->slug) }}" class="text-black button button-3d button-large bg-primary">{{ __('messages.poundSwingMasterText6') }}</a>                      

                    </div>
                  </div>  
                  <div class="mt-6 fancy-title title-border title-center">
                    <h3>{{ __('messages.poundSwingMasterText7') }}</h3>
                  </div>
        
                  <div class="mb-4 row pricing col-mb-30 g-0">
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.poundSwingMasterText8') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price1Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.poundSwingMasterText9') }} <strong>{{ __('messages.poundSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.poundSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.poundSwingMasterText12') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price3Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.poundSwingMasterText9') }} <strong>{{ __('messages.poundSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.poundSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.poundSwingMasterText13') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price6Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.poundSwingMasterText9') }} <strong>{{ __('messages.poundSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.poundSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                    <div class="col-md-6 col-lg-3">
        
                      <div class="text-center pricing-box">
                        <div class="pricing-title text-uppercase title-sm">
                          <h3>{{ __('messages.poundSwingMasterText14') }}</h3>
                        </div>
                        <div class="pricing-price">
                          <span class="price-unit">&dollar;</span>{{ $price12Month }}<span class="price-tenure">/mo</span>
                        </div>
                        <div class="pricing-features">
                          <ul>
                            <li>{{ __('messages.poundSwingMasterText9') }} <strong>{{ __('messages.poundSwingMasterText10') }}</strong></li>
                            <li>{{ __('messages.poundSwingMasterText11') }}</li>                                                        
                          </ul>
                        </div>
                        <div class="px-4 pricing-action">
                          <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingMasterText6') }}</a>
                        </div>
                      </div>
        
                    </div>
        
                  </div>                               
                  <div class="row justify-content-center">
                    <div class="col-md-10">                        
                      <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.poundSwingMasterText15') }}</p>
                      <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.poundSwingMasterText16') }}</h1>
                      <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
                      <h3>{{ __('messages.poundSwingMasterText17') }}</h3>

                      <div class="mb-0 row col-mb-50">
                        <div class="col-md-6">
                          <ul class="iconlist iconlist-lg">
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText18') }}</span></li>
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText19') }}</span></li>
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText20') }}</span></li>
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText21') }}</span></li>                            
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText22') }}</span></li>
                          </ul>
                        </div>

                        <div class="col-md-6">
                          <ul class="iconlist iconlist-lg">
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText23') }}</span></li>
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText24') }}</span></li>
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText25') }}</span></li>                            
                            <li class="px-3 py-2 rounded bg-primary bg-opacity-10">
                              <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingMasterText26') }}</span></li>
                          </ul>
                        </div>
                      <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
                      
                      <h3>{{ __('messages.poundSwingMasterText27') }}</h3>

                      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>        
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound1.png")}}" alt="Backtest Result">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-primary" style="width: 12rem;">{{ __('messages.poundSwingMasterText28') }}</h3>                           
                            </div>
                          </div>
                          <div class="carousel-item active">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound2.png")}}" alt="Trade Result">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-primary" style="width: 12rem;">{{ __('messages.poundSwingMasterText29') }}</h3>                              
                            </div>
                          </div>
                          <div class="carousel-item active">
                            <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound3.png")}}" alt="Trade Result">
                            <div class="carousel-caption d-none d-lg-block">
                              <h3 class="mb-2 text-black bg-primary" style="width: 12rem;">{{ __('messages.poundSwingMasterText29') }}</h3>                              
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
                    </div>
                  </div>
				      </div>  
              
                              
        </div>

        <div class="m-0 alert alert-primary rounded-0 fixed-bottom bg-slate-50" data-animate="fadeInUp faster">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-auto">
                <strong><i class="bi-boxes"></i> {{ __('messages.poundSwingMasterText30') }}</strong> {{ __('messages.poundSwingMasterText31') }}
              </div>
              <div class="mt-3 col-lg-auto mt-lg-0">
                <a href="{{ route('front.checkout', $item->slug) }}" class="btn btn-primary">{{ __('messages.poundSwingMasterText6') }}</a>
                <button type="button" class="btn-close btn btn-link float-lg-none text-dark ms-md-3" data-bs-dismiss="alert" aria-hidden="true"></button>
              </div>
            </div>
          </div>
        </div>
        <script>
        </script>
</x-front-layout>
