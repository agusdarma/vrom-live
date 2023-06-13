<x-front-layout> 
    @section('title', 'Euro Swing Forward Test - Industry-leading Expert Advisors - TradingJourney.ID')
    <x-slot name="headerScript">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    </x-slot>
    <div id="sini" class="mt-6 fancy-title title-border title-center">
        <h3>{{ __('messages.euroForwardTestText1') }}</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">   
            <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.euroForwardTestText2') }}</p>
        </div>
    </div>
    
    <div  class="container">        
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Open Time</th>
                    <th>Close Time</th>
                    <th>Symbol</th>
                    <th>Action</th>
                    <th>Open Price</th>
                    <th>TP Price</th>
                    <th>SL Price</th>                    
                    <th>Pips</th>
                    <th>Result</th>
                    {{-- <th width="100px">Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="mb-6 w-100 divider divider-center"><i class="bi-circle-fill"></i></div>

    <!-- Row 1 -->
    <div class="mb-4 row col-mb-30 g-0">
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="pricing-title text-uppercase title-sm bg-primary">
                  <h3>Total Trade</h3>
                </div>
                <div class="pricing-price">
                  @isset($summaryEuroTrades->total_trades)
                    {{ $summaryEuroTrades->total_trades }}X
                  @endisset                  
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-success pricing-title text-uppercase title-sm">
                  <h3>Probability</h3>
                </div>
                <div class="pricing-price">
                  @isset($summaryEuroTrades->probability)
                    {{ $summaryEuroTrades->probability }}%
                  @endisset                  
                  
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-danger pricing-title text-uppercase title-sm">
                  <h3>Avg Risk Reward</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->risk_reward)
                    1:{{ $summaryEuroTrades->risk_reward }}
                  @endisset                  
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-info pricing-title text-uppercase title-sm">
                  <h3>Avg Holding Period</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->holding_period)
                  {{ $summaryEuroTrades->holding_period }} Min
                  @endisset  
                </div>                
              </div>
        </div>
    </div> 
    <!-- Row 2 -->
    <div class="mb-4 row col-mb-30 g-0">
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="pricing-title text-uppercase title-sm bg-success-subtle">
                  <h3>Total Pips</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->total_pips)
                    {{ $summaryEuroTrades->total_pips }} Pips
                  @endisset  
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-primary-subtle pricing-title text-uppercase title-sm">
                  <h3>Avg Pips / Trade</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->avg_pips_trade)
                    {{ $summaryEuroTrades->avg_pips_trade }} Pips
                  @endisset 
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-secondary-subtle pricing-title text-uppercase title-sm">
                  <h3>Avg Pips / Month</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->avg_pips_month)
                  {{ $summaryEuroTrades->avg_pips_month }} Pips
                  @endisset
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-warning-subtle pricing-title text-uppercase title-sm">
                  <h3>Avg Pips / Year</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->avg_pips_year)
                    {{ $summaryEuroTrades->avg_pips_year }} Pips
                  @endisset
                </div>                
              </div>
        </div>
    </div> 
    <!-- Row 3 -->
    <div class="mb-4 row col-mb-30 g-0">
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                {{-- <div class="pricing-title text-uppercase title-sm bg-success-subtle">
                  <h3>Total Pips</h3>
                </div>
                <div class="pricing-price">
                 188.8 Pips
                </div>                 --}}
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-success pricing-title text-uppercase title-sm">
                  <h3>Consecutive Profit</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->consecutive_profit)
                    {{ $summaryEuroTrades->consecutive_profit }}x
                  @endisset
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                <div class="bg-danger pricing-title text-uppercase title-sm">
                  <h3>Consecutive Loss</h3>
                </div>
                <div class="pricing-price">                  
                  @isset($summaryEuroTrades->consecutive_loss)
                    {{ $summaryEuroTrades->consecutive_loss }}x
                  @endisset
                </div>                
              </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="text-center pricing-box">
                {{-- <div class="bg-warning-subtle pricing-title text-uppercase title-sm">
                  <h3>Avg Pips / Year</h3>
                </div>
                <div class="pricing-price">
                    1000 Pips
                </div>                 --}}
              </div>
        </div>
    </div> 

    <x-slot name="script">
        <script type="text/javascript">
            $(function () {
                
              var table = $('.data-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('front.euro.forwardTest.index') }}",
                  columns: [
                      {data: 'open_time', name: 'open_time'},
                      {data: 'close_time', name: 'close_time'},
                      {data: 'symbol', name: 'symbol'},
                      {data: 'action', name: 'action'},
                      {data: 'open_price', name: 'open_price'},
                      {data: 'tp_price', name: 'tp_price'},
                      {data: 'sl_price', name: 'sl_price'},
                      {data: 'pips', name: 'pips'},                      
                      {data: 'result', name: 'result'},
                      // {data: 'action', name: 'action', orderable: false, searchable: false},
                  ]
              });
                
            });
          </script>
    </x-slot>
</x-front-layout>