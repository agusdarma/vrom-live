@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Trading Journey Logo">
@else
<img src="{{ url("build/assets/all/images/logo-trading-journey-footer.png")}}" class="logo" alt="Trading Journey Logo">
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
