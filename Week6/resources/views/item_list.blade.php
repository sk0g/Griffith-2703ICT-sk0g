@if ($items)
<ul>
    @foreach ($items as $item)
        <li><a href="{{ url("item_detail/$item->id") }}">{{ $item->summary }}</a></li>
    @endforeach
</ul>
@else
<p>No items found.</p>
@endif

<br>
<a href="{{ url("add") }}">Create an item</a>