<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLevelRequest;
use App\Models\Banner;
use App\Models\lesson;
use App\Models\level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = level::paginate(10);
            $table = [
                //table th
                'th' => [
                    'ردیف',
                    'درس',
                    'پایه',
                    'عملیات',
                ],

                //table tbody
                'tbody' => [

                    //table td
                    'td' => [

                        //table td items
                        'row' => [
                            'row' => 0,
                        ],
                        'lesson_title' => [
                            'lesson_title' => 'lesson_title',
                        ],

                        //if td item has model this item is foreign table
                        'level_title' => [

                            //model of foreign table
                            'model' => '\App\Models\level',
                            //original key in this table
                            'org_key' => 'id',
                            //foreign key from foreign table
                            'for_key' => 'level_id',
                            //foreign item that you want
                            'forg_item' => 'level_title',
                        ],
                    ],
                ],
                //data from this table
                'data' => $data,

                //what table can do?
                'do' => [
                    //enable or disable do
                    'status' => true,
                    //enable or disable add button
                    'add' => true,
                    //enable or disable edit button
                    'edit' => true,
                    //enable or disable delete button
                    'delete' => true,
                ],
                //add button action
                'action' => 'lesson'
            ];
            return view('backend.admin.level.index', ['table' => $table, 'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = lesson::paginate(10);
        $table = [
            //table th
            'th' => [
                'ردیف',
                'درس',
                'پایه',
                'عملیات',
            ],

            //table tbody
            'tbody' => [

                //table td
                'td' => [

                    //table td items
                    'row' => [
                        'row' => 0,
                    ],
                    'lesson_title' => [
                        'lesson_title' => 'lesson_title',
                    ],

                    //if td item has model this item is foreign table
                    'level_title' => [

                        //model of foreign table
                        'model' => '\App\Models\level',
                        //original key in this table
                        'org_key' => 'id',
                        //foreign key from foreign table
                        'for_key' => 'level_id',
                        //foreign item that you want
                        'forg_item' => 'level_title',
                    ],
                ],
            ],
            //data from this table
            'data' => $data,

            //what table can do?
            'do' => [
                //enable or disable do
                'status' => true,
                //enable or disable add button
                'add' => true,
                //enable or disable edit button
                'edit' => true,
                //enable or disable delete button
                'delete' => true,
            ],
            //add button action
            'action' => 'lesson'
        ];
        return view('backend.admin.lesson.index', ['table' => $table, 'type' => 'index', 'row' => 0]);
    }


    public function create()
    {
        $data = level::get()->pluck('level_title', 'id');
        $form = [
            //form type (add | edit)
            'type' => 'add',

            //back action
            'action' => 'lesson.index',

            //show name of user
            'hasName' => true,

            //back action
            'action' => 'lesson.index',

            //back action param
            'actionParam' => '',

            //form property
            'form' => [
                //form method (post | get | put | ...)
                'method' => 'post',
                //form action (route name)
                'action' => 'lesson.store',
                //accept file status
                'files' => true,
            ],
            //inputs
            'input' => [
                //rules :
                //*** lable for input must start with label_ ***
                //*** array name must be the same as the input id ***
                //*** input type select = <select></select> ***

                //array name = input id
                'label_lesson_title' => [
                    //for which id ?
                    'for' => 'lesson_title',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام درس',
                ],
                //array name = input id
                'lesson_title' => [
                    //input name
                    'name' => 'lesson_title',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام درس',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'lesson_title',
                    //input required status
                    'required' => true,
                ],
                'label_level' => [
                    'for' => 'level_title',
                    'class' => 'label-text',
                    'text' => 'انتخاب پایه',
                ],
                'level_id' => [
                    'name' => 'level_title',
                    'type' => 'select',
                    'class' => 'form-control',
                    'placeholder' => 'انتخاب پایه',
                    'values' => true,
                    'value' => 'level_title',
                    'select_model' => $data,
                    'selected_value' => 'id',
                    'required' => true,
                ],
            ],
            //data of this model
            'data' => $data,
        ];
        return view('backend.admin.lesson.index', ['form' => $form, 'type' => 'add']);
    }

    public function store(Request $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->level_id;
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
        $data = lesson::findorfail($id);
        $levels = level::get()->pluck('level_title', 'id');
        $levelFind = level::findorfail($data->level_id);
        $form = [
            //form type (add | edit)
            'type' => 'edit',

            //back action
            'action' => 'lesson.index',

            //show name of user
            'hasName' => true,

            //back action param
            'actionParam' => '',

            //form property
            'form' => [
                //form method (post | get | put | ...)
                'method' => 'put',
                //form action (route name)
                'action' => 'lesson.update',
                //accept file status
                'files' => true,
            ],
            //inputs
            'input' => [
                //rules :
                //*** lable for input must start with label_ ***
                //*** array name must be the same as the input id ***
                //*** input type select = <select></select> ***

                //array name = input id
                'label_lesson_title' => [
                    //for which id ?
                    'for' => 'lesson_title',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام درس',
                ],
                //array name = input id
                'lesson_title' => [
                    //input name
                    'name' => 'lesson_title',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام درس',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'lesson_title',
                    //input required status
                    'required' => true,
                ],
                'label_level' => [
                    'for' => 'level_title',
                    'class' => 'label-text',
                    'text' => 'انتخاب پایه',
                ],
                'level_id' => [
                    'name' => 'level_title',
                    'type' => 'select',
                    'class' => 'form-control',
                    'placeholder' => 'انتخاب پایه',
                    'values' => true,
                    'value' => 'level_title',
                    'select_model' => $levels,
                    'select_items' => $levelFind,
                    'selected_value' => 'id',
                    'required' => true,
                ],
            ],
            //data of this model
                'data' => $data,
        ];
        return view('backend.admin.lesson.index', ['form' => $form,'type' => 'edit', 'levelFind' => $levelFind]);
    }

    public function update(Request $request, $id)
    {
        $lesson = lesson::where('id', $id)->first();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->level_id;
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
