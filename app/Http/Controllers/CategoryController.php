<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Category";
        $categories = Category::where('is_delete', 0)->get();
        return view("admin.category.index", compact('categories', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Lấy các danh mục CHA (parent_id = null)
        $categories = Category::whereNull('parent_id')
            ->where('is_delete', 0)
            ->get();

        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'is_active' => $request->has('is_active') ? 1 : 0,
            'is_delete' => 0,
        ]);

        return redirect()->route('category');
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
        $category = Category::findOrFail($id);
        // Lấy các category KHÔNG PHẢI là chính nó và không phải con cháu
        $categories = Category::where('id', '!=', $category->id)
            ->where('is_delete', 0)
            ->get();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $category = Category::findOrFail($id);

        if ($request->parent_id == $category->id) {
            return back()->withErrors([
                'parent_id' => 'Không được chọn chính danh mục này làm cha'
            ]);
        }

        if ($request->parent_id && $category->isDescendantOf($request->parent_id)) {
            return back()->withErrors([
                'parent_id' => 'Không được chọn danh mục con hoặc cháu làm cha'
            ]);
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $hasChildren = Category::where('parent_id', $category->id)
            ->where('is_delete', 0)
            ->exists();

        if ($hasChildren) {
            return back()->withErrors([
                'error' => 'Không thể xóa danh mục đang có danh mục con'
            ]);
        }

        $category->update([
            'is_delete' => 1
        ]);

        return redirect()->route('category');
    }
}
