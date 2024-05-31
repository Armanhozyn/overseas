<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('created_at', 'ASC')->get();
        return view('backend.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('backend.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $menu = new Menu();

        $menu->name = $request->name;
        $menu->route = $request->route;
        $menu->save();

        return redirect(route('menulist'))->with('success', 'Stored Successfully');
    }

    public function show()
    {
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('backend.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $menu = Menu::findOrFail($id);

        $menu->name = $request->name;
        $menu->route = $request->route;
        $menu->save();

        return redirect(route('menulist'))->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $page = Menu::find($id);
        $page->delete();
        return back()->with('success', 'Deleted Successfuly');
    }
}
