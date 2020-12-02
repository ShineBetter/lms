<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLevelRequest;
use App\Models\level;
use App\User;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = level::paginate(10);
            return view('backend.admin.level.index', ['data' => $data])->render();
        }
    }

    public function index()
    {
        $data = level::paginate(10);
        return view('backend.admin.level.index', ['data' => $data,'row'=>0]);
    }

    public function create()
    {
        return view('backend.admin.level.create');
    }

    public function store(createLevelRequest $request)
    {
        $level = new level();
        $level->level_title = $request->level_title;
        $level->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('level', $comment);
        return redirect()->route('level.index');

    }

    public function show(createLevelRequest $level)
    {
        $level = level::findorfail($level);
        return $level;
    }

    public function edit($id)
    {
        $data = level::findorfail($id);
        return view('backend.admin.level.edit', ['data' => $data]);
    }

    public function update(createLevelRequest $request, $id)
    {
        $level = level::where('id', $id)->first();
        $level->level_title = $request->level_title;
        $level->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('edit_status', $comment);
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
