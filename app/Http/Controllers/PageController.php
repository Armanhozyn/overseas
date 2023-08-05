<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('status', 0)->latest()->get();
        $users = User::all();
        return view('backend.pages.index', compact('pages', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::with('submenus')->where('status', 1)->select('id', 'name', 'route')->orderBy('created_at', 'ASC')->get();
        return view('backend.pages.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'route_id' => 'required|unique:pages,submenu_id',
            'title' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:1025',
            'description' => 'required'
        ]);

        // image processing

        $processingImage = $request->picture;
        $extension = $processingImage->getClientOriginalExtension();
        $originName = $processingImage->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $fileName = $fileName . '_' . time() . '.' . $extension;

        $path = public_path('/uploads/pages');
        if (!File::exists($path)) {
            mkdir($path, 0777, true);
        }
        $processingImage->move($path, $fileName);

        $page = new Page();

        $page->submenu_id = $request->route_id;
        $page->title = $request->title;
        $page->image = $fileName;
        $page->description = $request->description;
        $page->save();

        return back()->with('success', 'Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Page::find($id);
        return view('backend.pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (isset($request->picture)) {
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);

            // image processing

            $processingImage = $request->picture;
            $extension = $processingImage->getClientOriginalExtension();
            $originName = $processingImage->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $path = public_path('/uploads/pages');
            if (!File::exists($path)) {
                mkdir($path, 0777, true);
            }
            $processingImage->move($path, $fileName);

            Page::find($id)->update([
                'title' => $request->title,
                'image' => $fileName,
                'description' => $request->description,
                'updated_at' => Carbon::now()
            ]);
            return back()->with('success', 'Stored Successfully');
        } else {
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);

            Page::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'updated_at' => Carbon::now()
            ]);
            return back()->with('success', 'Stored Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return back()->with('success', 'Deleted Successfuly');
    }


    public function status(Request $request, $id)
    {
        $page = Page::find($id);
        if ($page->status == 0) {
            $page->status = 1;
        } else {
            $page->status = 0;
        }
        $page->save();
        return back()->with('success', 'Status Updated Successfuly');
    }

    // pages information
    public function SPage($id)
    {
        $page = Page::where('id', $id)->first();
        return view('backend.pages.SPage', compact('page'));
    }
    public function allPages()
    {
        $pages = Page::where('status', 1)->get();
        return view('backend.pages.index', compact('pages'));
    }
    public function allPagesArchive()
    {
        $pages = Page::where('status', 0)->get();
        return view('backend.pages.archived_index', compact('pages'));
    }
}
