<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(Store $store)
    {
        $this->store = $store;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->store->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->store->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return $store;
    }

    /**
     * @param Store $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $store->update($request->all());

        return $store;
    }

    /**
     * @param Store $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        return $store->delete();
    }
}
