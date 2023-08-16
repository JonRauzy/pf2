<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Redirect;

class ProjectsController extends Controller
{

    public function addProject(Request $request){

        $request['stack'] = Str::replace(' ', '|||', $request['stack']);

        $data = $request->validate([
            'title'=> 'required',
            'body'=> 'required',
            'stack'=> 'required',
            'link_url'=> 'required',
            'image_url'=> 'required',
        ]);

        Project::create($data);

        return redirect('/admin')->with('success', "New project registered successfully");
    }

    public function editProject(Project $project, Request $request){
        $data = $request->validate([
            'title'=> 'required',
            'body'=> 'required',
            'stack'=> 'required',
            'link_url'=> 'required',
            'image_url'=> 'required',
        ]);

        $project->update($data);
        return Redirect('/admin')->with('success', "Le project $project->title a bien été mis à jour");
    }

    public function deleteProject(Project $project, Request $request){
        
        $project->delete();
        return redirect('/admin')->with('success', "Le project a bien été supprimé ! ");
    }
}
