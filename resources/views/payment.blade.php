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
                    <div class="col-12">
                        <div class="col-md-6">
                            <img src="{{ url($booking->item->thumbnail)}}" alt="logo euro swing master">
                          </div>
                      <div class="row g-4">                        
                        <div class="col-md-6">
                            <label for="name">Item<small class="text-danger"></small></label>
                            <input disabled="true" type="text" id="name" name="name" value="{{ $booking->item->name }}" class="form-control required">                            
                          </div>
                        <div class="col-md-6">
                          <label for="name">Name<small class="text-danger">*</small></label>
                          <input disabled="true" type="text" id="name" name="name" value="{{ $booking->name }}" class="form-control required">
                        </div>
                        <div class="col-md-6">
                          <label for="email">Email</label>
                          <input disabled="true" type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label for="noHp">Handphone No<small class="text-danger">*</small></label>
                          <input disabled="true" type="text" id="noHp" name="noHp" value="{{ Auth::user()->phone }}" class="form-control required">
                        </div> 
                        <div class="col-md-6">
                          <label for="waktuSewa">Rent For<small class="text-danger">*</small></label>
                          <input disabled="true" type="text" id="waktuSewa" value="{{ Auth::user()->phone }}" class="form-control required">
                        </div>
                        <div class="col-md-6">
                            <label for="paymentMethod">Payment Method<small class="text-danger">*</small></label>
                            <select id="paymentMethod" name="payment_method" class="form-select required">
                              <option value="" disabled selected>Select Payment Method</option>
                              <option value="midtrans">Midtrans</option>                              
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
