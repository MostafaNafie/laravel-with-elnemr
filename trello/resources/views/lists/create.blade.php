<a href="/">
    Back to board
</a>


<br>
<br>

<form action="/lists" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block">
        <input type="hidden" name="board_id" value="{{ $boardID }}">
        <input type="text" name="name" placeholder="List name...">
        <button type="submit">
            Save
        </button>
    </div>
</form>