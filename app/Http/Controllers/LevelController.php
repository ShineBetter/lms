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
            $data = level::paginate(4);
            $table = [
                'th' => [
                    'ردیف',
                    'پایه',
                    'عملیات',
                ],

                'tbody' => [
                    'td' => [
                        'row' => 0,
                        'title' => 'level_title',
                    ],
                ],
                'data' => $data
            ];
            return view('backend.admin.level.index', ['table' => $table,'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = level::paginate(4);
        $table = [
            'th' => [
                'ردیف',
                'پایه',
                'عملیات',
            ],

            'tbody' => [
                'td' => [
                    'row' => 0,
                    'title' => 'level_title',
                ],
            ],
            'data' => $data
        ];
        return view('backend.admin.level.index', ['table' => $table,'type' => 'index'])->render();
    }

    public function create()
    {
        $form = [
            'type' => 'add',
            'form' => [
                'method' => 'post',
                'action' => 'level.store',
                'files' => true,
            ],
            'input' => [
                'label_level_title' => [
                    'for' => 'level_title',
                    'class' => 'label-text',
                    'text' => 'نام پایه',
                ],
                'level_title' => [
                    'name' => 'level_title',
                    'type' => 'text',
                    'class' => 'form-control',
                    'placeholder' => 'نام پایه',
                    'values' => true,
                    'value' => 'level_title',
                    'required' => true,
                ],
            ],
            'org' => '',
        ];
        return view('backend.admin.level.index',['form' => $form,'type' => 'add']);
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
        $data = level::findorfail($id);
        $form = [
            'type' => 'edit',
            'form' => [
                'method' => 'put',
                'action' => 'level.update',
                'files' => true,
            ],
                'input' => [
                    'label_level_title' => [
                        'for' => 'level_title',
                        'class' => 'label-text',
                        'text' => 'نام پایه',
                    ],
                    'level_title' => [
                        'name' => 'level_title',
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'نام پایه',
                        'values' => true,
                        'value' => 'level_title',
                        'required' => true,
                    ],
                ],
            'org' => $data,
        ];
        return view('backend.admin.level.index', ['form' => $form,'type' => 'edit']);
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
