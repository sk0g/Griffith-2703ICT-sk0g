<h1> {{ $item->summary }} </h1>
    <p>
        {{ $item->details }}
    <p>
        <a href="{{ url("delete_item_action/$item->id") }}">Delete this item</a>
    <p>
        <a href="{{ url("update_item/$item->id") }}">Update this item</a>
    <p>
<a href="{{ url('') }}">Home</a>