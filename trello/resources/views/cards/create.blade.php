<a href="/cards/{{ $listID }}">
    Back to list
</a>


<br>
<br>

<form action="/cards" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block">
        <input type="hidden" name="list_id" value="{{ $listID }}">
        <input type="text" name="name" placeholder="Card name...">
        <button type="submit">
            Save
        </button>
    </div>
</form>