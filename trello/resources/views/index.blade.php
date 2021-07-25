<h1>Boards</h1>

<a href="/create">
    Add new board
</a>

<br>
<br>
<ul>
    @forelse ($boards as $board)
        <li>
            <a href="/lists/{{ $board->id }}">
                {{ $board->name }}
            </a>
            <ul>
                @forelse($board->boardLists as $list)
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
                                <li>
                                    No cards
                                </li>
                            @endforelse
                        </ul>
                    </li>
                @empty
                    <li>
                        No lists
                    </li>
                @endforelse
            </ul>
        </li>
    @empty
        No Boards
    @endforelse
</ul>
