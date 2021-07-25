<?php

namespace App\Http\Controllers;

use App\Models\BoardList;
use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $listID)
    {
        return view('cards.create', [
            'listID' => $listID
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Card::create([
            'name' => request()->input('name'),
            'list_id' => request()->input('list_id')
        ]);
        return redirect('/cards/' . request()->input('list_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = BoardList::find($id);
        return view('cards.show', [
            'list' => $list
        ]);
    }
}
