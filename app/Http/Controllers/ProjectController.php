<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data['project'] = Project::paginate(4);
        return view('project.index', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'message' => 'required',
            'link' => 'required',

        ]);
        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('news.create')))->withInput();
        } else {
            $newProject = [
                'title' => $input['title'],
                'message' => $input['message'],
                'link' => $input['link'],
            ];
            Project::create($newProject);
            return redirect(route('project.index'));
        } // else if ($validator->fails())
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, $id)
    {
        $project_id = $id;
        $data['project'] = Project::find($project_id);
        return view('project.show', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $project = Project::find($id);
        if (is_null($project)) {
            return redirect(route('project.index'));
        } else {
            $data['project'] = $project;
            //dd($data);
            return view('project.edit', $data);
        } // else if (is_null($news))
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'message' => 'required',
            'link' => 'required',
        ]);
        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('project.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_project = Project::find($input['id']);
            $one_project->fill($input)->save();
            return redirect(route('project.index'));
        } // else  if ($validator->fails())
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request, $id)
    {

        $project = Project::find($id);
        $project->delete();
        return redirect(route('project.index'))->with('success', 'Новость удалена!');
    }
}
