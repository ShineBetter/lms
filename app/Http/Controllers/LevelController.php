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
            $table = [
                //table th
                'th' => [
                    'ردیف',
                    'پایه',
                    'عملیات',
                ],

                //table tbody
                'tbody' => [
                    'td' => [

                        //table td items
                        'row' => [
                            'row' => 0,
                        ],
                        'level_title' => [
                            'level_title' => 'level_title',
                        ],
                    ],
                ],
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
                'action' => 'level'
            ];
            return view('backend.admin.level.index', ['table' => $table,'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = level::paginate(10);
        $table = [
            //table th
            'th' => [
                'ردیف',
                'پایه',
                'عملیات',
            ],

            //table tbody
            'tbody' => [
                'td' => [

                    //table td items
                    'row' => [
                        'row' => 0,
                    ],
                    'level_title' => [
                        'level_title' => 'level_title',
                    ],
                ],
            ],
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
            'action' => 'level'
        ];
        return view('backend.admin.level.index', ['table' => $table,'type' => 'index'])->render();
    }

    public function create()
    {
        $form = [
            //form type (add | edit)
            'type' => 'add',

            //back action
            'action' => 'lesson.index',

            //show name of user
            'hasName' => true,

            //back action param
            'actionParam' => '',

            //form property
            'form' => [
                //form method (post | get | put | ...)
                'method' => 'post',
                //form action (route name)
                'action' => 'level.store',
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
                'label_level_title' => [
                    //for which id ?
                    'for' => 'level_title',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام پایه',
                ],
                //array name = input id
                'level_title' => [
                    //input name
                    'name' => 'level_title',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام پایه',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'level_title',
                    //input required status
                    'required' => true,
                ],
            ],
            //data of this model
                'data' => '',
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
                'action' => 'level.update',
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
                'label_level_title' => [
                    //for which id ?
                    'for' => 'level_title',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام پایه',
                ],
                //array name = input id
                'level_title' => [
                    //input name
                    'name' => 'level_title',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام پایه',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'level_title',
                    //input required status
                    'required' => true,
                ],
            ],
            //data of this model
            'data' => $data,
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
