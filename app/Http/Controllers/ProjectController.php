<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Events\ProjectCreated;

class ProjectController extends Controller
{
   public function __construct() {
       $this->middleware('auth');
   } 
   public function index()
   {
       //$projects = Project::where('owner_id',auth()->id())->get();
       
       return view('projects.index',[
           'projects' => auth()->user()->projects
       ]);
   }
      
    
   public function edit(Project $project)
   {      
       return view('projects.edit', compact('project'));
   }
   
   public function show(Project $project)
   {      
     //abort_if($project->owner_id != auth()->id(),403);
      // $this->authorize('update',$project);
       return view('projects.show',compact('project'));
   }
   
   public function update(Project $project)
   {
       
       $project->update($this->validateProject());      
       return redirect("/projects");
   }
   
   public function destroy(Project $project)
   {
       $project->delete();       
       return redirect("/projects");       
   }
   
   public function create()
   {
       
       return view('projects.create');
   }
   
   public function store(){
       
       $attributes = $this->validateProject();
      $attributes['owner_id'] = auth()->id();
      
       $project = Project::create($attributes);
       
       // event(new ProjectCreated($project));
       
       return redirect("/projects");
   }
   
   private function  validateProject()
   {
       return request()->validate([
                      'title' => ['required','min:3'],
                      'description' => ['required','min:3'],
                     ]);
   
   }
   
}
