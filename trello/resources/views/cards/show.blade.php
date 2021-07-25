<h1>{{ $list->name }}</h1>

<a href="/lists/{{ $list->board->id }}">
    Back to lists
</a>

<br>
<br>

<a href='/cards/create/{{ $list->id }}'>
    Add new card
</a>

<br>
<br>

@forelse ($list->cards as $card)
    <li >
        <a >
            {{ $card->name }}
        </a>
    </li>
@empty
    No cards
@endforelse