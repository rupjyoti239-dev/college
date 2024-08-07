<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\FileService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('Admin.banner.index', compact('banners'));
    }

    public function add()
    {
        return view('Admin.banner.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,webp,jpeg|max:3000',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = FileService::save($request->file('image'));
        }

        $banner = new Banner();
        $banner->image = $imageName;
        $banner->save();
        
        return redirect()->route('admin.banner.list')->with('success', 'Banner created successfully');
    }

    public function delete($id)
    {
        $banner = Banner::findOrFail($id);

        if ($banner) {
            FileService::delete($banner->image);
            $banner->delete();
            return back()->with('success', 'Banner successfully deleted');
        } else {
            return back()->with('success', 'Banner not found');
        }
    }

    public function status($id)
    {

        $banner = Banner::findOrFail($id);
        if ($banner->status == 1) {
            $banner->status = 2;
        } else {
            $banner->status = 1;
        }
        $banner->save();

        return back()->with('success', 'Status Updated Successfully');
    }

}