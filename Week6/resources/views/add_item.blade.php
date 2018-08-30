<form method="post" action=add_item_action>
    {{ csrf_field() }}
    <p>
        <label>Summary: </label> <br>
        <input type="text" name="summary">
    </p>
    <p>
        <label>Details: </label> <br>
        <textarea name="details"></textarea>
    </p>
    <input type="submit" value="Add item">
</form>