<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLevelRequest;
use App\Models\Banner;
use App\Models\lesson;
use App\Models\level;
use App\Models\User;
use Illuminate\Http\Request;

class LessonController extends Controller
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
            return view('backend.admin.level.index', ['table' => $table, 'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = lesson::paginate(4);
//        $level_title = level::where('id','17')->pluck('level_title');
//        dd($level_title);
        $table = [
            'th' => [
                'ردیف',
                'درس',
                'پایه',
                'عملیات',
            ],

            'tbody' => [
                'td' => [
                    'row' => 0,
                    'lesson_title' => 'title',
                    'forg' => [
                        'level' => [
                            'model' => '\App\Models\level',
                            'org_key' => 'id',
                            'for_key' => 'level_id',
                            'forg_item' => 'level_title',
                        ],
                        'base' => [
                            'model' => '\App\Models\level',
                            'org_key' => 'id',
                            'for_key' => 'level_id',
                            'forg_item' => 'level_title',
                        ],
                    ],
                ],
            ],
            'data' => $data,
            'do' => [
                'status' => true,
                'add' => true,
                'edit' => true,
                'delete' => true,
            ]
        ];
        return view('backend.admin.lesson.index', ['table' => $table, 'type' => 'index', 'row' => 0]);
    }


    public function create()
    {
        $levels = ['' => level::get()->pluck('level_title', 'id')];
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
        return view('backend.admin.lesson.create', ['form' => $form, 'type' => 'add']);
    }

    public function store(Request $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->levels;
        $lesson->save();
        $comment = 'اطلاعات ، به درستی ذخیره شد. ';
        session()->flash('lesson', $comment);
        return redirect()->route('lesson.index');
    }

    public function show(lesson $lesson)
    {
        $lesson = lesson::findorfail($lesson);
        return $lesson;
    }

    public function edit($id)
    {
        $data = ['' => level::get()->pluck('level_title', 'id')];
        $lesson = lesson::findorfail($id);
        $levelFind = level::findorfail($lesson->level_id);
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
        return view('backend.admin.lesson.edit', ['form' => $form, 'lesson' => $lesson, 'levelFind' => $levelFind]);
    }

    public function update(createLevelRequest $request, $id)
    {
        $lesson = lesson::where('id', $id)->first();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->levels;
        $lesson->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('lesson', $comment);
        return redirect()->route('lesson.index');
    }

    public function destroy($id)
    {
        $lesson = lesson::where('id', $id)->first();
        $lesson->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('lesson', $comment);
        return back();
    }
}
