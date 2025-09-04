@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
<img src="{{ asset('images/logo.png', true) }}" class="logo" alt="{{ config('app.name') }}" style="width: 200px; height: auto; display: block;">
</a>
</td>
</tr>
