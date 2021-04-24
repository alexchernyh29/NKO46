<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data['news'] = News::paginate(4);
        return view('news.index', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('news.create');
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
            $newNews = [
                'title' => $input['title'],
                'message' => $input['message'],
                'link' => $input['link'],
            ];
            News::create($newNews);
            return redirect(route('news.index'));
        } // else if ($validator->fails())
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, $id)
    {
        $news_id = $id;
        $data['news'] = News::find($news_id);
        return view('news.show', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $news = News::find($id);
        if (is_null($news)) {
            return redirect(route('news.index'));
        } else {
            $data['news'] = $news;
            //dd($data);
            return view('news.edit', $data);
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
            return redirect((route('news.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_news = News::find($input['id']);
            $one_news->fill($input)->save();
            return redirect(route('news.index'));
        } // else  if ($validator->fails())
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request, $id)
    {

        $news = News::find($id);
        $news->delete();
        return redirect(route('news.index'))->with('success', 'Новость удалена!');
    }
}
