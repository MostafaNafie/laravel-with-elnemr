<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Models\Board;
use App\Repositories\Repository;

class BoardsController extends Controller
{
    protected $model;

    public function __construct(Board $board)
    {
        // set the model
        $this->model = new Repository($board);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'boards' => $this->model->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
        return redirect('/');
    }
}
