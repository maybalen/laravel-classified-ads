<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use App\Http\Requests\StoreChildCategoryRequest;
use Illuminate\Support\Str;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $child_categories = ChildCategory::paginate(12);
        return view('admin.childcategories.index', compact('child_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.childcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildCategoryRequest $request)
    {
        if($request->hasFile('image')) {
            $path = $request->file('image')->store('public/childcategories');

            ChildCategory::create([
                'name' => $request->name, 
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id,
                'image' => $path,
            ]);

        }

        return redirect()->route('admin.childcategories.index')->with('message', 'Child Category has been created');

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
        $child_category = ChildCategory::find($id);
        return view('admin.childcategories.edit', compact('child_category'));
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
        $child_category = ChildCategory::find($id);

        if($request->hasFile('image')) {
            $path = $request->file('image')->store('public/childcategories');

            $child_category->update([
                'name' => $request->name,
                'sub_category_id' => $request->sub_category_id,
                'slug' => Str::slug($request->name),
                'image' => $path,
            ]);

        } else {

            $child_category->update([
                'name' => $request->name,
                'sub_category_id' => $request->sub_category_id,
                'slug' => Str::slug($request->name)
            ]);

        }

        return redirect()->route('admin.childcategories.index')->with('message', 'Child Category has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child_category = ChildCategory::findOrFail($id);
        $child_category->delete();
        return redirect()->route('admin.childcategories.index')->with('message', 'Child Category has been deleted.');
    }
}
