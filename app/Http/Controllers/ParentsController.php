<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\parents;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('user_role', 'parent')->paginate(10);
            $table = [
                //table th
                'th' => [
                    'ردیف',
                    'نام',
                    'نام خانوادگی',
                    'ایمیل',
                    'نام دانش آموز',
                    'عملیات',
                ],

                //table tbody
                'tbody' => [
                    'td' => [
                        //table td items
                        'row' => [
                            'row' => 0,
                        ],
                        'name' => [
                            'model' => '\App\Models\profile',
                            'org_key' => 'user_id',
                            'for_key' => 'id',
                            'forg_item' => 'name',
                        ],
                        'lastName' => [
                            'model' => '\App\Models\profile',
                            'org_key' => 'user_id',
                            'for_key' => 'id',
                            'forg_item' => 'lastName',
                        ],
                        'email' => [
                            'email' => 'email',
                        ],
                        'pid' => [
                            'model' => '\App\User',
                            'relation' => 'profile',
                            'org_key' => 'pid',
                            'for_key' => 'id',
                            'forg_item' => 'name',
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
                'action' => 'parent'
            ];
            return view('backend.admin.level.index', ['table' => $table, 'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = User::where('user_role', 'parent')->paginate(10);
        $table = [
            //table th
            'th' => [
                'ردیف',
                'نام',
                'نام خانوادگی',
                'ایمیل',
                'نام دانش آموز',
                'عملیات',
            ],

            //table tbody
            'tbody' => [
                'td' => [
                    //table td items
                    'row' => [
                        'row' => 0,
                    ],
                    'name' => [
                        'model' => '\App\Models\profile',
                        'org_key' => 'user_id',
                        'for_key' => 'id',
                        'forg_item' => 'name',
                    ],
                    'lastName' => [
                        'model' => '\App\Models\profile',
                        'org_key' => 'user_id',
                        'for_key' => 'id',
                        'forg_item' => 'lastName',
                    ],
                    'email' => [
                        'email' => 'email',
                    ],
                    'pid' => [
                        'model' => '\App\User',
                        'relation' => 'profile',
                        'org_key' => 'pid',
                        'for_key' => 'id',
                        'forg_item' => 'name',
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
            'action' => 'parent'
        ];
        return view('backend.admin.parents.index', ['table' => $table, 'type' => 'index', 'row' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::where('user_role', 'student')->pluck('email', 'id');
        $form = [
            //form type (add | edit)
            'type' => 'add',

            //back action
            'action' => 'parent.index',

            //show name of user
            'hasName' => false,

            //back action param
            'actionParam' => '',

            //form property
            'form' => [
                //form method (post | get | put | ...)
                'method' => 'post',
                //form action (route name)
                'action' => 'parent.store',
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
                'label_name' => [
                    //for which id ?
                    'for' => 'name',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام',
                ],
                //array name = input id
                'name' => [
                    //input name
                    'name' => 'name',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'name',
                    //input required status
                    'required' => true,
                ],

                'label_lastName' => [
                    //for which id ?
                    'for' => 'lastName',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام خانوادگی',
                ],
                //array name = input id
                'lastName' => [
                    //input name
                    'name' => 'lastName',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام خانوادگی',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'lastName',
                    //input required status
                    'required' => true,
                ],

                'label_email' => [
                    //for which id ?
                    'for' => 'email',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'ایمیل',
                ],
                //array name = input id
                'email' => [
                    //input name
                    'name' => 'email',
                    //input type
                    'type' => 'email',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'ایمیل',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'email',
                    //input required status
                    'required' => true,
                ],


                'label_password' => [
                    //for which id ?
                    'for' => 'pasword',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'پسورد',
                ],
                //array name = input id
                'pasword' => [
                    //input name
                    'name' => 'pasword',
                    //input type
                    'type' => 'pasword',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'پسورد',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'password',
                    //input required status
                    'required' => true,
                ],

                'label_phone' => [
                    //for which id ?
                    'for' => 'phone',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'تلفن',
                ],
                //array name = input id
                'phone' => [
                    //input name
                    'name' => 'phone',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'تلفن',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'phone',
                    //input required status
                    'required' => true,
                ],

                'label_nationalNumber' => [
                    //for which id ?
                    'for' => 'nationalNumber',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'کد ملی',
                ],
                //array name = input id
                'nationalNumber' => [
                    //input name
                    'name' => 'nationalNumber',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'کد ملی',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'nationalNumber',
                    //input required status
                    'required' => true,
                ],

                'label_mobile' => [
                    //for which id ?
                    'for' => 'mobile',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'موبایل',
                ],
                //array name = input id
                'mobile' => [
                    //input name
                    'name' => 'mobile',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'موبایل',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'mobile',
                    //input required status
                    'required' => true,
                ],

                'label_date_of_birth' => [
                    //for which id ?
                    'for' => 'date_of_birth',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'تاریخ تولد',
                ],
                //array name = input id
                'date_of_birth' => [
                    //input name
                    'name' => 'date_of_birth',
                    //input type
                    'type' => 'date',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'تاریخ تولد',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'date_of_birth',
                    //input required status
                    'required' => true,
                ],

                'label_address' => [
                    //for which id ?
                    'for' => 'address',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'آدرس',
                ],
                //array name = input id
                'address' => [
                    //input name
                    'name' => 'address',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'آدرس',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'address',
                    //input required status
                    'required' => true,
                ],

                'label_photo' => [
                    //for which id ?
                    'for' => 'photo',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'عکس',
                ],
                //array name = input id
                'photo' => [
                    //input name
                    'name' => 'photo',
                    //input type
                    'type' => 'file',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'عکس',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'photo',
                    //input required status
                    'required' => true,
                ],


                'label_pid' => [
                    'for' => 'pid',
                    'class' => 'label-text',
                    'text' => 'نام دانش اموز',
                ],
                'pid' => [
                    'name' => 'pid',
                    'type' => 'select',
                    'class' => 'form-control',
                    'placeholder' => 'نام دانش اموز',
                    'values' => true,
                    'value' => 'pid',
                    'select_model' => $data,
                    'selected_value' => 'id',
                    'required' => true,
                    'loop' => true,
                ],
            ],
            //data of this model
            'data' => $data,
        ];
        return view('backend.admin.parents.index', ['form' => $form, 'type' => 'add']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child_id = $request->pid;
        $parent_child = User::where('id', $child_id)->first();
        $parents = new User();
        $profile = new profile();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->pid = 0;
        $parents->save();
        $parent_child->pid = $parents->id;
        $parent_child->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $parents->profile()->save($profile);
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
        return redirect()->route('parent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parents = User::findorfail($id);
        return $parents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parents = User::findorfail($id);
        $child = User::where('user_role', 'student')->pluck('email', 'id');
        $childFind = User::findorfail($parents->id);
        $data = profile::where('user_id', '=', $id)->firstorfail();
        $form = [
            //form type (add | edit)
            'type' => 'edit',

            //back action
            'action' => 'parent.index',

            //show name of user
            'hasName' => false,

            //back action param
            'actionParam' => '',

            //form property
            'form' => [
                //form method (post | get | put | ...)
                'method' => 'put',
                //form action (route name)
                'action' => 'parent.update',
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
                'label_name' => [
                    //for which id ?
                    'for' => 'name',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام',
                ],
                //array name = input id
                'name' => [
                    //input name
                    'name' => 'name',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'name',
                    //input required status
                    'required' => true,
                ],

                'label_lastName' => [
                    //for which id ?
                    'for' => 'lastName',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'نام خانوادگی',
                ],
                //array name = input id
                'lastName' => [
                    //input name
                    'name' => 'lastName',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'نام خانوادگی',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'lastName',
                    //input required status
                    'required' => true,
                ],

                'label_email' => [
                    //for which id ?
                    'for' => 'email',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'ایمیل',
                ],
                //array name = input id
                'email' => [
                    //input name
                    'name' => 'email',
                    //input type
                    'type' => 'email',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'ایمیل',
                    //show values in the input status
                    'values' => true,
                    //show values in the input status
                    'model' => '\App\User',
                    //show values in the input status
                    'org_key' => 'id',
                    //show values in the input status
                    'forg_key' => 'id',
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'email',
                    //input required status
                    'required' => true,
                ],

                'label_password' => [
                    //for which id ?
                    'for' => 'pasword',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'پسورد',
                ],
                //array name = input id
                'pasword' => [
                    //input name
                    'name' => 'pasword',
                    //input type
                    'type' => 'pasword',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'پسورد',
                    //show values in the input status
                    'values' => false,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'password',
                    //input required status
                    'required' => true,
                ],

                'label_phone' => [
                    //for which id ?
                    'for' => 'phone',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'تلفن',
                ],
                //array name = input id
                'phone' => [
                    //input name
                    'name' => 'phone',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'تلفن',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'phone',
                    //input required status
                    'required' => true,
                ],

                'label_nationalNumber' => [
                    //for which id ?
                    'for' => 'nationalNumber',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'کد ملی',
                ],
                //array name = input id
                'nationalNumber' => [
                    //input name
                    'name' => 'nationalNumber',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'کد ملی',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'nationalNumber',
                    //input required status
                    'required' => true,
                ],

                'label_mobile' => [
                    //for which id ?
                    'for' => 'mobile',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'موبایل',
                ],
                //array name = input id
                'mobile' => [
                    //input name
                    'name' => 'mobile',
                    //input type
                    'type' => 'number',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'موبایل',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'mobile',
                    //input required status
                    'required' => true,
                ],

                'label_date_of_birth' => [
                    //for which id ?
                    'for' => 'date_of_birth',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'تاریخ تولد',
                ],
                //array name = input id
                'date_of_birth' => [
                    //input name
                    'name' => 'date_of_birth',
                    //input type
                    'type' => 'date',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'تاریخ تولد',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'date_of_birth',
                    //input required status
                    'required' => true,
                ],

                'label_address' => [
                    //for which id ?
                    'for' => 'address',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'آدرس',
                ],
                //array name = input id
                'address' => [
                    //input name
                    'name' => 'address',
                    //input type
                    'type' => 'text',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'آدرس',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'address',
                    //input required status
                    'required' => true,
                ],

                'label_photo' => [
                    //for which id ?
                    'for' => 'photo',
                    //label class
                    'class' => 'label-text',
                    //label text
                    'text' => 'عکس',
                ],
                //array name = input id
                'photo' => [
                    //input name
                    'name' => 'photo',
                    //input type
                    'type' => 'file',
                    //input class
                    'class' => 'form-control',
                    //input placeholder
                    'placeholder' => 'عکس',
                    //show values in the input status
                    'values' => true,
                    //enable input status
                    'enable' => true,
                    //input value
                    'value' => 'photo',
                    //input required status
                    'required' => true,
                ],


                'label_pid' => [
                    'for' => 'pid',
                    'class' => 'label-text',
                    'text' => 'نام دانش اموز',
                ],
                'pid' => [
                    'name' => 'pid',
                    'type' => 'select',
                    'class' => 'form-control',
                    'placeholder' => 'نام دانش اموز',
                    'values' => true,
                    'value' => 'pid',
                    'select_model' => $child,
                    'select_items' => $childFind,
                    'selected_value' => 'id',
                    'required' => true,
                    'loop' => true,
                ],
            ],
            //data of this model
            'data' => $data,
        ];
        return view('backend.admin.parents.index', ['form' => $form,'type' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parents = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $parents->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
        return redirect()->route('parent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parents = User::where('id', $id)->first();
        $parents->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('parents', $comment);
        return back();
    }
}
