<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function addProject(Request $request){
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

}
