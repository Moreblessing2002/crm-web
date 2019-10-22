<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\CollectionItem;

class CollectionController extends Controller
{
    /**
     * Display a listing of the collection.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($collection)
    {
        $collection = Collection::called($collection);

        return view('collections.index')
            ->with('collection', $collection);
    }

    /**
     * Show the form for creating a new collection item.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($collection)
    {
        $collection = Collection::called($collection);

        return view('collections.create')
            ->with('collection', $collection);
    }

    /**
     * Store a newly created collection item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $collection)
    {
        //
    }

    /**
     * Display the specified collection item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($collection, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified collection item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($collection, $id)
    {
        //
    }

    /**
     * Update the specified collection item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $collection, $id)
    {
        //
    }

    /**
     * Remove the specified collection item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($collection, $id)
    {
        //
    }
}
