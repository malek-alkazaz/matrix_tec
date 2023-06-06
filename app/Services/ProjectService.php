<?php

namespace App\Services;

use App\Models\Cost;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;

class ProjectService{

    public function index()
    {
        return $projects = ProjectResource::collection(Project::with('costs')->get());
    }

    public function store($request)
    {
        $project = Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return $project;
    }

    public function show($id){
        $project = Project::where('id','=',$id)->with('costs')->firstOrFail();
        return new ProjectResource($project);
    }

    public function update($request,$id){
        $project = Project::find($id);
        $project->update([
            'name' => ($request->name) ? $request->name : $project->name ,
            'description' => ($request->description) ? $request->description : $project->description,
        ]);
        return new ProjectResource($project);
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if($project){
            $project->delete();
            return $id;
        }else{
            return null;
        }
    }
}
