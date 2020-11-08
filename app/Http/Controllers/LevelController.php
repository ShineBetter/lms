<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLevelRequest;
use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{

    public function index()
    {
        $level = level::paginate(4);
        return view('backend.admin.level.index', ['level' => $level,'row'=>0]);
    }

    public function create()
    {
        return view('backend.admin.level.create');
    }

    public function store(createLevelRequest $request)
    {
        $level=new level();
        $level->title = $request->title;
        $level->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('level', $comment);

        return redirect()->route('level.index');

    }

    public function show(level $level)
    {
        $level = level::findorfail($level);
        return $level;
    }

    public function edit($id)
    {
        $level = level::findorfail($id);
        return view('backend.admin.level.edit', compact('level'));
    }

    public function update(createLevelRequest $request, $id)
    {
        $level = level::where('id', $id)->first();
        $level->title = $request->title;
        $level->save();


        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('level', $comment);
        return redirect()->route('level.index');
    }

    public function destroy($id)
    {
        $level = level::where('id', $id)->first();
        $level->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('level', $comment);
        return back();
    }
}
