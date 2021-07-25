<h1>{{ $board->name }}</h1>

<a href="/">
    Back to boards
</a>

<br>
<br>

<a href='/lists/create/{{ $board->id }}'>
    Add new list
</a>

<br>
<br>

@foreach ($board->boardLists as $list)
    <li >
        <a >
            {{ $list->name }}
        </a>
    </li>
@endforeach