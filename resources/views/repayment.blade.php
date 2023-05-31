<x-front-layout>
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10">
          <div class="my-5 shadow-sm card">
            <div class="p-5 card-body">
              <h4 class="text-center ls-4">Re Payment Form</h4>
              <div class="divider divider-sm divider-center text-dark"><i class="bi-heart"></i></div>
              <div class="form-widget" data-alert-type="false">
                <div class="form-result"></div>
                <div class="form-process">
                  <div class="css3-spinner">
                    <div class="css3-spinner-double-bounce1"></div>
                    <div class="css3-spinner-double-bounce2"></div>
                  </div>
                </div>
                <form class="mb-0" id="checkoutForm" action="{{ route('front.repayment.update', $booking->id) }}" 
                  method="get">
                  @csrf
                  @method('get')
                  <div id="sini" class="row g-4">   
                    <div class="mb-5 text-center col-12">
                      <h6 class="font-body text-uppercase ls-3">Customer Information</h6>                  
                    </div>         
                    <div class="col-12">
                      <div class="row g-4">
                        <div class="col-md-6">
                          <label for="name">Name</label>
                          <input disabled="true" type="text" id="name" name="name" value="{{ $booking->name }}" class="form-control required">
                        </div>
                        <div class="col-md-6">
                          <label for="email">Email</label>
                          <input disabled="true" type="text" id="email" name="email" value="{{ $booking->email }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label for="no_hp">Handphone No</label>
                          <input disabled="true" type="text" id="no_hp" name="no_hp" value="{{ $booking->no_hp }}" class="form-control required">
                        </div> 
                        <div class="col-md-6">
                          <label for="telegram_id">Telegram Id</label>
                          <input disabled="true" type="text" id="telegram_id" name="telegram_id" value="{{ $booking->telegram_id }}" class="form-control required">
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
                          <input disabled="true" type="text" id="item_name" name="item_name" value="{{ $booking->item_name }}" class="form-control required">
                        </div>                                       
                        <div class="col-md-6">
                          <label for="rental_time">Rental Time</label>
                          <select id="rental_time" name="rental_time" class="form-select required">
                            <option value="" disabled selected>{{ $booking->rental_time }} months</option>                            
                          </select>
                        </div>
                        <div class="col-md-6">
                          @if($booking->discount =='ada')         
                          <label for="total_price">Total Price - Discount First Rent: </label>                                                
                          @else
                          <label for="total_price">Total Price: </label>                                                
                          @endif                          
                          <div class="pricing-price">                                                        
                              <span class="price-unit">&dollar;</span>{{ $booking->total_price }}<span class="price-tenure"></span>                                                                                  
                          </div>
                         
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
                            <option value="" disabled selected>{{ $booking->payment_method }}</option>                              
                          </select>
                        </div>
                      </div>
                    </div>             
                    <div class="col-12">
                      <button type="submit" id="checkoutButton" class="btn btn-primary w-100 btn-lg">Repay</button>
                    </div>      
                  </div>
                </form>
              </div>        
            </div>
          </div>
        </div>
      </div>
</x-front-layout>
