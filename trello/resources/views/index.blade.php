<h1>Boards</h1>

<a href="/create">
    Add new board
</a>

<br>
<br>
@foreach ($boards as $board)
    <li >
        <a href="/lists/{{ $board->id }}">
            {{ $board->name }}
        </a>
    </li>
@endforeach