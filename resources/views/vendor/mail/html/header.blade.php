<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('assets/img/WMWA-Logo.png')}}" class="logo" alt="WMWA CRM" style="width:186px;height:119px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
