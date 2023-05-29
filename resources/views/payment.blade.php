<x-front-layout>
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10">
          <div class="my-5 shadow-sm card">
            <div class="p-5 card-body">
              <h4 class="text-center ls-4">Confirmation Form</h4>
              <div class="divider divider-sm divider-center text-dark"><i class="bi-heart"></i></div>
              <div class="form-widget" data-alert-type="false">
                <div class="form-result"></div>
                <div class="form-process">
                  <div class="css3-spinner">
                    <div class="css3-spinner-double-bounce1"></div>
                    <div class="css3-spinner-double-bounce2"></div>
                  </div>
                </div>
                <form class="mb-0" id="checkoutForm" action="{{ route('front.payment.update', $booking->id) }}" 
                  method="post">
                  @csrf
                  @method('post')
                  <div class="row g-4">   
                    <div class="mb-5 text-center col-12">
                      <h6 class="font-body text-uppercase ls-3">Customer Information</h6>                  
                    </div>         
                    <div class="col-12">
                      <div class="row g-4">
                        <div class="col-md-6">
                          <label for="name">Name</label>
                          <input disabled="true" type="text" id="name" name="name" value="{{ $booking->name }}" class="form-control required" placeholder="Enter your name">
                        </div>
                        <div class="col-md-6">
                          <label for="email">Email</label>
                          <input disabled="true" type="text" id="email" name="email" value="{{ $booking->email }}" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                          <label for="no_hp">Handphone No</label>
                          <input disabled="true" type="text" id="no_hp" name="no_hp" value="{{ $booking->no_hp }}" class="form-control required" placeholder="Enter your handphone no">
                        </div> 
                        <div class="col-md-6">
                          <label for="telegram_id">Telegram Id</label>
                          <input disabled="true" type="text" id="telegram_id" name="telegram_id" value="{{ $booking->telegram_id }}" class="form-control required" placeholder="ex: https://t.me/TradingJourneyId">
                        </div> 
                      </div>                  
                    </div> 
                    <div class="mb-5 text-center col-12">
                      <h6 class="font-body text-uppercase ls-3">Item Information</h6>
                    </div>        
                    <div class="col-12">
                      <div class="row g-4">
                        <div class="p-4 col-md-5 d-inline-flex" style="min-height: 350px">
                          <img src="{{ $booking->item->thumbnail }}" alt="logo euro swing master">
                        </div>
                        <div class="col-md-6">                     
                          
                        </div>
                        <div class="col-md-6">
                          <label for="item_name">Item Name</label>
                          <input type="text" id="item_name" name="item_name" value="{{ $booking->item_name }}" class="form-control required" placeholder="Enter your Name">
                        </div>                                       
                        <div class="col-md-6">
                          <label for="rental_time">Rent For</label>
                          <select id="rental_time" name="rental_time" class="form-select required">
                            <option value="" disabled selected>{{ $booking->rental_time }} months</option>                            
                          </select>
                        </div>
                      </div>                  
                    </div> 
                    <div class="mb-5 text-center col-12">
                      <h6 class="font-body text-uppercase ls-3">Payment Information</h6>
                    </div>   
                    <div class="col-12">
                      <div class="row g-4">
                        <div class="col-md-6">
                          <label for="payment_method">Payment Method<small class="text-danger">*</small></label>
                          <select id="payment_method" name="payment_method" class="form-select required">
                            <option value="" disabled selected>Select Payment Method</option>
                            <option value="midtrans">BCA Virtual Account</option>
                            <option value="midtrans">Qris</option>
                            <option value="midtrans">Gopay</option>                            
                          </select>
                        </div>
                      </div>
                    </div>             
                    <div class="col-12">
                      <button type="submit" id="checkoutButton" class="btn btn-secondary w-100 btn-lg">Checkout</button>
                    </div>      
                  </div>
                </form>
              </div>        
            </div>
          </div>
        </div>
      </div>
</x-front-layout>
