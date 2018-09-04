<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('site.admin.category.index',compact('categories'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        request()->validate([
            'name_category' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->name_category);
        if (isset($image)) {
            // make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //check category dir is exists
            if (!Storage::disk('public')->exists('category')) {
                Storage::disk('public')->makeDirectory('category');
            }

            // resize image for category and upload
            $category = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('category/'.$imagename,$category);

            // check category slider dir is exists
            if (!Storage::disk('public')->exists('category/slider')) {
                Storage::disk('public')->makeDirectory('category/slider');
            }

            // resize image for category slider and upload
            $slider = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('category/'.$imagename,$slider);
        }else{
            $imagename = "default.png";
        }
        $category = new Category;
        $category->name = $request->name_category;
        $category->slug = $slug;
        $category->image = $imagename;

        $category->save();
        Toastr::success('Category Successfully Saved','success');
        return redirect()->route('site.admin.category.index');

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
        $category = Category::find($id);
        return view('site.admin.category.edit',compact('category'));
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
        request()->validate([
            'name_category' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);
        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->name_category);
        $category = Category::find($id);
        if (isset($image)) {
            // make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //check category dir is exists
            if (!Storage::disk('public')->exists('category')) 
            {
                Storage::disk('public')->makeDirectory('category');
            }
            // delete old image
            if (Storage::disk('public')->exists('category/'.$category->image)) 
            {
                Storage::disk('public')->delete('category/'.$category->image);
            }

            // resize image for category and upload
            $categoryimage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('category/'.$imagename,$categoryimage);

            // check category slider dir is exists
            if (!Storage::disk('public')->exists('category/slider')) 
            {
                Storage::disk('public')->makeDirectory('category/slider');
            }
            // delete old slider image
            if (Storage::disk('public')->exists('category/slider/'.$category->image)) 
            {
                Storage::disk('public')->delete('category/slider/'.$category->image);
            }

            // resize image for category slider and upload
            $slider = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('category/'.$imagename,$slider);
        }else{
            $imagename = $category->image;
        }

        $category->name = $request->name_category;
        $category->slug = $slug;
        $category->image = $imagename;

        $category->save();
        Toastr::success('Category Successfully Update','success');
        return redirect()->route('site.admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (Storage::disk('public')->exists('category/'.$category->image))
        {
            Storage::disk('public')->delete('category/'.$category->image);
        }

        if (Storage::disk('public')->exists('category/slider/'.$category->image)) 
        {
             Storage::disk('public')->delete('category/slider/'.$category->image);
        }
        $category->delete();
        Toastr::success('Category Successfully Delete','success');
        return redirect()->route('site.admin.category.index');
    }
}
