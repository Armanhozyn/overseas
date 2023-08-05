<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function index()
    {
        $submenus = Submenu::orderBy('created_at', 'ASC')->get();
        return view('backend.submenu.index', compact('submenus'));
    }

    public function create()
    {
        $mainmenus = Menu::all();
        return view('backend.submenu.create', compact('mainmenus'));
    }

    public function store(Request $request)
    {
        $route = Str::slug($request->name);
        $request->validate([
            'menu_id' => 'required',
            'name' => 'required',
        ]);
        $submenu = new Submenu();

        $submenu->menu_id = $request->menu_id;
        $submenu->name = $request->name;
        $submenu->route = $route;
        $submenu->save();

        return redirect(route('submenus'))->with('success', 'Stored Successfully');
    }

    public function show()
    {
    }

    public function edit($id)
    {
        $mainmenus = Menu::all();
        $submenu = Submenu::findOrFail($id);
        return view('backend.submenu.edit', compact('mainmenus', 'submenu'));
    }

    public function update(Request $request, $id)
    {
        $route = Str::slug($request->name);
        $request->validate([
            'name' => 'required',
        ]);
        $submenu = Submenu::findOrFail($id);

        $submenu->menu_id = $request->menu_id;
        $submenu->name = $request->name;
        $submenu->route = $route;
        $submenu->save();

        return redirect(route('submenus'))->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
    }
}
