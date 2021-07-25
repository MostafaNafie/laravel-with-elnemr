<a href="/">
    Back to boards
</a>


<br>
<br>

<form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block">
        <input type="text" name="name" placeholder="Board name...">
        <button type="submit">
            Save
        </button>
    </div>
</form>