<?php

namespace App\Http\Controllers;

use App\Http\Requests\DistributorRequest;
use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributors = Distributor::all();

        return view('pages.distributors.index', ['distributors' => $distributors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.distributors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistributorRequest $request)
    {
        $data = $request->except('_token');
        Distributor::create($data);

        return redirect()->route('distributors.index')->with('success', 'Distribuidora registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distributor = Distributor::find($id);
        return view('pages.distributors.edit', ['distributor' => $distributor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistributorRequest $request, $id)
    {
        $data = $request->except('_token', '_method');
        Distributor::where('id', $id)->update($data);

        return redirect()->route('distributors.index')->with('success', 'Distribuidora alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $distributor = Distributor::find($id);
       $distributor->active = 0;
       $distributor->save();

    }

    public function active($id)
    {
       $distributor = Distributor::find($id);
       $distributor->active = 1;
       $distributor->save();

    }
}
