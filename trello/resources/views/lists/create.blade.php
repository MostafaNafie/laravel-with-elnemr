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
        <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-white" type="submit">
            Save
        </button>
    </div>
</form>