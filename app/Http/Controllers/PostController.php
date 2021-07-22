<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $page = Post::query()->paginate();
        return response()->json(compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePostRequest $request)
    {
        $item = new Post;
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
        $item = Post::query()->findOrFail($id);
        return response()->json(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param StorePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, StorePostRequest $request)
    {
        $item = Post::query()->findOrFail($id);
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
        $count = Post::destroy($id);
        if ($count) {
            return response()->json('OK');
        }
        return response()->json('Resource already deleted!', 410);
    }
}

