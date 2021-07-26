<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Models\Board;
use App\Models\BoardList;
use App\Repositories\Repository;

class BoardListsController extends Controller
{
    protected $model;
    protected $boardModel;

    public function __construct(BoardList $list, Board $boardModel)
    {
        // set the model
        $this->model = new Repository($list);
        $this->boardModel = new Repository($boardModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $boardID)
    {
        return view('lists.create', [
            'boardID' => $boardID
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
        return redirect('/lists/' . request()->input('board_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('lists.show', [
            'board' => $this->boardModel->show($id)
        ]);
    }
}
