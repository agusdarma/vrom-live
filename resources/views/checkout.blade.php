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
              <div class="row g-4">            
                <div class="col-12">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <label for="name">Name<small class="text-danger">*</small></label>
                      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control required" placeholder="Enter your Name">
                    </div>
                    <div class="col-md-6">
                      <label for="email">Email</label>
                      <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <label for="noHp">Handphone No<small class="text-danger">*</small></label>
                      <input type="text" id="noHp" name="noHp" value="{{ Auth::user()->phone }}" class="form-control required" placeholder="Handphone No">
                    </div> 
                    <div class="col-md-6">
                      <label for="waktuSewa">Rent For<small class="text-danger">*</small></label>
                      <select id="waktuSewa" name="waktuSewa" class="form-select required">
                        <option value="" disabled selected>Select Rent Type</option>
                        <option value="1">1 Month</option>
                        <option value="3">3 Month</option>
                        <option value="6">6 Month</option>
                        <option value="12">12 Month</option>
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
