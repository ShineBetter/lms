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
        $table = [
            'th' => [
                'ردیف',
                'پایه',
                'عملیات',
            ],
            'tbody' => $level
        ];


        return view('backend.admin.level.index', ['level' => $table, 'row' => 0]);
    }

    public function create()
    {
        return view('backend.admin.level.create');
    }

    public function store(Request $request)
    {
        $level = new level();
        $level->level_title = $request->level_title;
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
        $form = [
            'type' => 'edit',
            'form' => [
                'method' => 'put',
                'action' => 'level.update',
                'files' => true,
            ],
                'input' => [
                    'text' => [
                        'name' => 'level_title',
                        'class' => 'form-control',
                        'placeholder' => 'نام پایه',
                        'values' => true,
                        'value' => 'level_title'
                    ],
                    'password' => [
                        'name' => 'passtitle',
                        'class' => 'form-control',
                        'placeholder' => 'نام پایه',
                        'values' => true,
                        'value' => 'id',
                    ],
                ],
            'org' => $level,
        ];
        return view('backend.admin.level.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $level = level::where('id', $id)->first();
        $level->level_title = $request->level_title;
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
