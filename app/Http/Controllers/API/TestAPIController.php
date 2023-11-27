<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TestAPIController extends Controller
{
    public function index()
    {
        // dd("HI");
        $users = User::all();
        
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $users2 = User::create($request->all());
        return response()->json($users2, 201);
    }

    public function show($id)
    {
        $users3 = User::findOrFail($id);
        return response()->json($users3);
    }

    public function update(Request $request, $id)
    {
        $users4 = User::findOrFail($id);
        $users4->update($request->all());
        return response()->json($users4, 200);
    }

    public function destroy($id)
    {
        $users5 = User::findOrFail($id);
        $users5->delete();
        return response()->json(null, 204);
    }
}