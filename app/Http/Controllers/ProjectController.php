<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    use ResponseAPI;
    private $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = $this->projectService->index();
        if($projects){
            return $this->success($projects);
        }
        return $this->error();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = $this->projectService->store($request);
        if($project){
            return $this->created($project);
        }
        return $this->error();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = $this->projectService->show($id);
        if($project){
            return $this->success($project);
        }
        return $this->notFound();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project = $this->projectService->update($request , $project->id);
        if($project){
            return $this->success($project);
        }
        return $this->error();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($id){
            $project = $this->projectService->destroy($id);
            if($project == null){
                return $this->notFound();
            }else{
                return $this->deleted($project);
            }
        }
        return $this->error();
    }
}
