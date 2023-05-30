<x-front-layout>
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-10">
      <div class="my-5 shadow-sm card">
        <div class="p-5 card-body">
          <h4 class="text-center ls-4">Checkout Form</h4>
          <div class="divider divider-sm divider-center text-dark"><i class="bi-heart"></i></div>
          <div class="form-widget" data-alert-type="false">
            <div class="form-result"></div>
            <div class="form-process">
              <div class="css3-spinner">
                <div class="css3-spinner-double-bounce1"></div>
                <div class="css3-spinner-double-bounce2"></div>
              </div>
            </div>
            <form class="mb-0" id="checkoutForm" action="{{ route('front.checkout.store', $item->slug) }}" 
              method="post">
              @csrf
              @method('post')
              <div id="sini" class="row g-4">    
                <div class="mb-5 text-center col-12">
                  <h6 class="font-body text-uppercase ls-3">Customer Information</h6>                  
                </div>        
                <div class="col-12">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <label for="name">Name<small class="text-danger">*</small></label>
                      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control required" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                      <label for="email">Email<small class="text-danger">*</small></label>
                      <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="col-md-6">
                      <label for="no_hp">Handphone No<small class="text-danger">*</small></label>
                      <input type="text" id="no_hp" name="no_hp" value="{{ Auth::user()->phone }}" class="form-control required" placeholder="Enter your handphone no">
                    </div> 
                    <div class="col-md-6">
                      <label for="telegram_id">Telegram Id<small class="text-danger">*</small></label>
                      <input type="text" id="telegram_id" name="telegram_id" value="" class="form-control required" placeholder="ex: https://t.me/TradingJourneyId">
                    </div> 
                  </div>                  
                </div>  
                <div class="mb-5 text-center col-12">
                  <h6 class="font-body text-uppercase ls-3">Item Information</h6>
                </div>        
                <div class="col-12">
                  <div class="row g-4">
                    <div class="p-4 col-md-5 d-inline-flex" style="min-height: 350px">
                      <img src="{{ $item->thumbnail }}" alt="logo euro swing master">
                    </div>
                    <div class="col-md-6">                     
                      
                    </div>
                    <div class="col-md-6">
                      <label for="item_name">Item Name<small class="text-danger">*</small></label>
                      <input type="text" id="item_name" name="item_name" value="{{ $item->name }}" class="form-control required" placeholder="Enter your Name">
                    </div>                                       
                    <div class="col-md-6">
                      <label for="rental_time">Rental Time<small class="text-danger">*</small></label>
                      <select id="rental_time" name="rental_time" class="form-select required">
                        <option value="" disabled selected>Select Rental Time</option>
                        <option value="1">Rent 1 month - {{ $price1Month }}/Month</option>
                        <option value="3">Rent 3 months - {{ $price3Month }}/Months</option>
                        <option value="6">Rent 6 months - {{ $price6Month }}/Months</option>
                        <option value="12">Rent 12 months - {{ $price12Month }}/Months</option>
                      </select>
                    </div>
                  </div>                  
                </div>                
                <div class="col-12">
                  <button type="submit" id="checkoutButton" class="btn btn-primary w-100 btn-lg">Checkout</button>
                </div>      
              </div>
            </form>
          </div>        
        </div>
      </div>
    </div>
  </div>
</x-front-layout>
