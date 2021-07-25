<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Models\BoardList;
use App\Models\Card;
use App\Repositories\Repository;

class CardsController extends Controller
{
    protected $model;
    protected $listModel;
    
    public function __construct(Card $card, BoardList $listModel)
    {
        // set the model
        $this->model = new Repository($card);
        $this->listModel = new Repository($listModel);
    }

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
    public function store(RequestForm $request)
    {
        $data = $request->only($this->model->getModel()->fillable);
        $this->model->create($data);
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
        return view('cards.show', [
            'list' => $this->listModel->show($id)
        ]);
    }
}
