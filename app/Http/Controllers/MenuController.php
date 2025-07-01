<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus  = Menu::whereNull('parent_id')->with('children')->get();
        $title  = 'Menu List';
        return view('backend.menu.index',compact('menus','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus  = Menu::all();
        $title  = 'Menu Create';
        return view('backend.menu.create',compact('menus','title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'          =>'required|string:255',
            'url'            => 'nullable|string',
            'icon'           => 'nullable|string',
            'parent_id'      => 'nullable|exists:menus,id',
        ]);

        Menu::create($request->only('title','url','icon','parent_id'));
        return redirect()->route('menus.create')->with('success', 'Menu Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
