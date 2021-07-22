<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $page = User::query()->paginate();
        return response()->json(compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreUserRequest $request)
    {
        $item = new User;
        $item->fill($request->validated());
        $item->save();
        return response()->json(compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $item = User::query()->findOrFail($id);
        return response()->json(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param StoreUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, StoreUserRequest $request)
    {
        $item = User::query()->findOrFail($id);
        $item->update($request->validated());
        return response()->json(compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $count = User::destroy($id);
        if ($count) {
            return response()->json('OK');
        }
        return response()->json('Resource already deleted!', 410);
    }
}

