<x-front-layout>
  @section('title', 'Home Page - Industry-leading Expert Advisors - TradingJourney.ID')
  
    <!--Shape Divider--> 
    <div class="p-0 mt-5 section min-vh-75">
        <img
          src="{{ url("build/assets/all/images/shape-divider/11.jpg")}}"
          alt="Divider Image"
          class="top-0 object-cover w-100 h-100 position-absolute start-0"
        />
        <div
          class="shape-divider"
          data-shape="hills-2"
          data-height="150"
        ></div>
        <div
          class="shape-divider"
          data-shape="hills-2"
          data-position="bottom"
          data-height="150"
        ></div>
      </div>
      <div class="text-center bg-white section">
          <div class="container py-5">
            <div class="promo-users">
              <img src="{{ url("build/assets/all/images/users/1.jpg")}}" alt=".." class="square square-lg rounded-circle">
              <img src="{{ url("build/assets/all/images/users/2.jpg")}}" alt=".." class="square square-md rounded-circle">
              <img src="{{ url("build/assets/all/images/users/3.jpg")}}" alt=".." class="square square-md rounded-circle">
              <img src="{{ url("build/assets/all/images/users/4.jpg")}}" alt=".." class="square square-lg rounded-circle">
              <img src="{{ url("build/assets/all/images/users/5.jpg")}}" alt=".." class="square square-lg rounded-circle">
            </div>                    
            <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
            <div class="row justify-content-center">
              <div class="col-md-10">                
                <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.landingText1') }}</p>
                <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.landingText2') }}                   
                    {{ __('messages.landingText3') }}
                    {{ __('messages.landingText4') }} <span class="nocolor text-decoration-underline fw-bold" style="text-underline-offset: 5px;">{{ __('messages.landingText5') }}</span></h1>
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText6') }} <b>{{ __('messages.landingText7') }}</b> {{ __('messages.landingText8') }}</p>
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText9') }}</p>
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText10') }}</p>
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText11') }}</p>
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText12') }}</p>                        
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText13') }}</p>                        
                <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText14') }}</p>                                                
                <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
                <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.landingText15') }}</p>
                <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.landingText16') }}</h1>
                  <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText17') }}</p>                        
                  <p class="mx-auto mb-5 op-07 mw-xs">{{ __('messages.landingText18') }}</p>                                          
              </div>
            </div>
          </div>
          <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
          <div class="row col-mb-50">
            <div class="p-6 col-md-5 d-inline-flex" style="min-height: 350px">
              <img src="{{ url("build/assets/all/images/logo-euro-swing-master.png")}}" alt="logo euro swing master">
            </div>

            <div class="text-center col-md-7 text-md-start bg-light">
              <div class="mt-4 heading-block">
                <h2 class="text-black fw-bold">{{ __('messages.landingText19') }}</h2>
                <span>{{ __('messages.landingText20') }}</span>
              </div>
              <p><b>{{ __('messages.landingText19') }}</b> {{ __('messages.landingText21') }}</p>
              <p>{{ __('messages.landingText22') }}</p>
              <p>{{ __('messages.landingText23') }}</p>    
              <a href="{{ route('front.euro', $euro->slug) }}" class="text-black button button-3d button-large bg-hijau-stabilo">Learn more about Euro Swing Master</a>              
            </div>
          </div>
          <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
          <div class="row col-mb-50">
            <div class="p-6 col-md-5 d-inline-flex" style="min-height: 350px">
              <img src="{{ url("build/assets/all/images/logo-pound-swing-master.png")}}" alt="logo pound swing master">
            </div>

            <div class="text-center col-md-7 text-md-start bg-light">

              <div class="mt-4 heading-block">
                <h2 class="text-black fw-bold">{{ __('messages.landingText24') }}</h2>
                <span>{{ __('messages.landingText25') }}</span>
              </div>

              <p><b>{{ __('messages.landingText24') }}</b> {{ __('messages.landingText26') }}</p>
              <p>{{ __('messages.landingText27') }}</p>
              <p>{{ __('messages.landingText28') }}</p>
              
              <a href="{{ route('front.pound','pound-swing-master-8kkbd') }}" class="text-black button button-3d button-large bg-primary">Learn more about Pound Swing Master</a>
              

            </div>
          </div>          
              </div> 
</x-front-layout>
