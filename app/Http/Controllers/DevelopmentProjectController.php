<?php

namespace App\Http\Controllers;

use App\Models\DevelopmentCategory;
use App\Models\DevelopmentProject;
use Illuminate\Http\Request;

class DevelopmentProjectController extends Controller
{
    public function index()
    {
        $developmentCategories = DevelopmentCategory::latest()->get();
        $developmentProjects = DevelopmentProject::latest()->get();
        return view('admin/Development/project', [
            'developmentCategories' => $developmentCategories,
            'developmentProjects' => $developmentProjects,
            'developmentCategory' => new DevelopmentProject()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'marketing_category_id' => 'required|exists:marketing_categories,id',
            'title' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tags' => 'nullable|string'
        ]);

        // ✅ Handle Tags (Tagify sends JSON)
        $tags = [];
        if ($request->tags) {
            $decoded = json_decode($request->tags, true);

            // Extract only values
            $tags = collect($decoded)->pluck('value')->toArray();
        }

        // ✅ Handle Image Upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('marketing', 'public');
        }

        // ✅ Save Data
        $project = new DevelopmentProject();
        $project->marketing_category_id = $request->marketing_category_id;
        $project->title = $request->title;
        $project->url = $request->url;
        $project->description = $request->description;
        $project->image = json_decode($imagePath);

        // Save tags as JSON
        $project->tags = $tags;

        $project->save();

        return redirect()->back()->with('success', 'Marketing created successfully');
    }
}
