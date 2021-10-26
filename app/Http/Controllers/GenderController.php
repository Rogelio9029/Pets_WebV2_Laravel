<?php

namespace App\Http\Controllers;

use App\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        return response()->json(Gender::all(), 200);
    }

    public function create(){ }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gender' => 'required|string|max:20|unique:genders',
        ]);
        $gender = Gender::create($validatedData);
        return response()->json([
            'gender' => $gender,
            'success' => 'Success a create'
        ], 200);
    }

    public function show(Gender $gender)
    {
        return response()->json(['gender' => $gender], 200);
    }

    public function edit(Gender $gender){ }

    public function update(Request $request, Gender $gender)
    {
        $validatedData = $request->validate([
            'gender' => 'required|string|max:20|unique:genders',
        ]);
        return $validatedData;
        $gender->update($validatedData);
        return response()->json([
            'gender' => $gender,
            'success' => 'Success a update'
        ], 200);
    }

    public function destroy(Gender $gender)
    {
        $gender->delete();
        return response()->json([
            'gender' => $gender,
            'success' => 'Success a delete'
        ], 200);
    }
}