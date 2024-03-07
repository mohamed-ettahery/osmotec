<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    public function showProjects()
    {
        $category = request()->query('category');
        $projects = Project::all();
        return view("projects", compact("projects", "category"));
    }
    public function showDetail($slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (!$project) {
            abort(404, 'Not found');
        }
        return view("project-details", compact("project"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => "required|min:4",
            "image" => "required|mimes:jpg,jpeg,png,webp|max:2048",
            "description" => "required|min:4",
        ]);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $image_name);
        }
        $miniature_name = "";
        if ($request->has('miniature')) {
            $file = $request->miniature;
            $miniature_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects/miniatures'), $miniature_name);
        }
        Project::create([
            "name" => $request->name,
            "slug" => Str::slug($request->name, '-'),
            "image" => $image_name,
            "miniature" => $miniature_name ? $miniature_name : NULL,
            "client" => $request->client ? $request->client : NULL,
            "description" => $request->description,
            "budget" => $request->budget ? $request->budget : NULL,
            "date_realisation" => $request->date_realisation ? $request->date_realisation : NULL,
            "localisation" => $request->localisation ? $request->localisation : NULL,
            "capacite" => $request->capacite ? $request->capacite : NULL,
            "choix_site" => $request->choix_site ? $request->choix_site : NULL,
            "order_service" => $request->order_service ? $request->order_service : NULL,
            "fabrication_montage" => $request->fabrication_montage ? $request->fabrication_montage : NULL,
            "travaux_site" => $request->travaux_site ? $request->travaux_site : NULL,
            "mise_place" => $request->mise_place ? $request->mise_place : NULL,
            "demarrage_mise_service" => $request->demarrage_mise_service ? $request->demarrage_mise_service : NULL,
        ]);
        return redirect()->route('projects.index')->with("success", "Le projet à été ajouté avec succés.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            "name" => "required|min:4",
            "slug" => Str::slug($request->name, '-'),
            "description" => "required|min:4",
            "category_id" => "required",
        ]);
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $image_name);
            if (file_exists(public_path("uploads/projects/{$project->image}"))) {
                unlink(public_path("uploads/projects/{$project->image}"));
            }
        } else {
            $image_name = $project->image;
        }
        if ($request->has('miniature')) {
            $file = $request->miniature;
            $miniature_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects/miniatures'), $miniature_name);
            if ($project->miniature) {
                if (file_exists(public_path("uploads/projects/miniatures/{$project->miniature}"))) {
                    unlink(public_path("uploads/projects/miniatures/{$project->miniature}"));
                }
            }
        } else {
            $miniature_name = $project->miniature;
        }
        $project->update([
            "name" => $request->name,
            "image" => $image_name,
            "miniature" => $miniature_name,
            "client" => $request->client ? $request->client : NULL,
            "description" => $request->description,
            "category_id" => $request->category_id,
            "budget" => $request->budget ? $request->budget : NULL,
            "date_realisation" => $request->date_realisation ? $request->date_realisation : NULL,
            "localisation" => $request->localisation ? $request->localisation : NULL,
            "capacite" => $request->capacite ? $request->capacite : NULL,
            "choix_site" => $request->choix_site ? $request->choix_site : NULL,
            "order_service" => $request->order_service ? $request->order_service : NULL,
            "fabrication_montage" => $request->fabrication_montage ? $request->fabrication_montage : NULL,
            "travaux_site" => $request->travaux_site ? $request->travaux_site : NULL,
            "mise_place" => $request->mise_place ? $request->mise_place : NULL,
            "demarrage_mise_service" => $request->demarrage_mise_service ? $request->demarrage_mise_service : NULL,
        ]);
        // dd($request->all());
        return redirect()->back()->with("success", "Le projet à été modifié avec succés.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (file_exists(public_path("uploads/projects/{$project->image}"))) {
            unlink(public_path("uploads/projects/{$project->image}"));
            $project->delete();
        }
        if ($project->miniature) {
            if (file_exists(public_path("uploads/projects/miniatures/{$project->miniature}"))) {
                unlink(public_path("uploads/projects/miniatures/{$project->miniature}"));
            }
        }
        return redirect()->route("projects.index")->with("success", "Le projet à été supprimé avec succés.");
    }
}
