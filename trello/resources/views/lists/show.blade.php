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

@forelse ($board->boardLists as $list)
    <ul>
        <li>
            <a href="/cards/{{ $list->id }}">
                {{ $list->name }}
            </a>
            <ul>
                @forelse($list->cards as $card)
                    <li>
                        <a>
                            {{ $card->name }}
                        </a>
                    </li>
                @empty
                    No cards
                @endforelse
            </ul>
        </li>
    </ul>
@empty
    No Lists
@endforelse