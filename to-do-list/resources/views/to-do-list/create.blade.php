@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Create a To-Do
        </h1>
    </div>
    <div class="pt-10">
        <a href="/to-do-list"
        class="border-b-2 pb-2 borde-dotted italic text-gray-500">
            &larr; back
        </a>
    </div>
</div>
<div class="flex justify-center pt-20">
    <form action="/to-do-list" method="POST">
        @csrf
        <div class="block">
            <input class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" type="text" name="to_do" placeholder="To-Do..." id="">
            <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-white" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection