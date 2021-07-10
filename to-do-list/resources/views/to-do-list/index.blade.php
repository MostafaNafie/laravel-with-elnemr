@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            To-Do List
        </h1>
    </div>
    <div class="pt-10">
        <a href="to-do-list/create"
        class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Add new To-Do &rarr;
        </a>
    </div>
    <div class="w-5/6 py-10">
        @foreach ($todos as $todo)
            <div class="m-auto">
                <div class="">
                    <form class="pt-3" action="{{ route('mark-complete', $todo) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit"
                        class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Mark as completed &rarr;
                        </button>
                    </form>
                    <a href="to-do-list/{{ $todo->id }}/edit"
                        class="border-b-2 pb-2 border-dotted italic text-green-500">
                        Edit &rarr;
                    </a>
                    <form class="pt-3" action="to-do-list/{{ $todo->id }}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit"
                        class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>
                </div>
                <h2 class="{{ $todo->is_completed ? 'text-red-700' : 'text-gray-700' }} text-5xl">
                    {{ $todo->to_do }}
                </h2>
                <hr class="mt-4 mb-8">
            </div>
        @endforeach
    </div>
</div>
@endsection