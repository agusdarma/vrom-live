<x-app-layout>
  <x-slot name="title">Admin</x-slot>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Booking') }}
    </h2>
  </x-slot>
  <x-slot name="script">
    <script>
      // AJAX DataTable
      var datatable = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },        
         columns: [{
            data: 'id',
            name: 'id',
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'user.name',
            name: 'user.name'
          },                    
           {
            data: 'status',
            name: 'status'
          }, 
          {
            data: 'payment_status',
            name: 'payment_status'
          },
          {
            data: 'total_price',
            name: 'total_price'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '15%'
          },
        ],
      });
    </script>
  </x-slot>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">      
      <div class="overflow-hidden shadow sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <table id="dataTable">
            <thead>
              <tr>
                <th style="max-width: 1%">ID</th>
                <th>Booking Name</th>
                <th>User</th>                                   
                <th>Status</th>        
                <th>Status Pembayaran</th>
                <th>Total Dibayar</th>
                <th style="max-width: 1%">Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>