<a href="/">
    Back to boards
</a>


<br>
<br>

<form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block">
        <input type="text" name="name" placeholder="Board name...">
        <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-white" type="submit">
            Save
        </button>
    </div>
</form>