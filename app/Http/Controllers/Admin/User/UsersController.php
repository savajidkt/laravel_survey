<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
Use Image;
use Intervention\Image\Exception\NotReadableException;
use Illuminate\Support\Facades\File;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = User::where('user_type', 2);
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('user_status', function (User $user) {
                    return $user->status;
                })
                ->filterColumn('user_status', function ($query, $keyword) {
                    $query->status($keyword);
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })->rawColumns(['action'])->make(true);
        }

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rawData = new User;
        return view('admin.user.create', ['model' => $rawData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        
        $user = new User;
        $validationArr = array();
        $validationArr['first_name'] = 'required';
        $validationArr['last_name'] = 'required';
        $validationArr['email'] = 'required|email|unique:users,email';
        $validationArr['password'] = 'required|min:8|same:confirm-password';
        $validationArr['confirm-password'] = 'required|min:8';
       


        $validation = $this->validate($request, $validationArr,
        [
        'password.min' => 'Password minimum value should be 8.', 
        'password.same' => 'Password does not match with confirm password.', 
        'confirm_password.min' => 'Password minimum value should be 8.'
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->input('password'));
        $user->user_type = 2;
        $user->is_first_time_login = 2;
        $user->user_status = 0;
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        
        return redirect()->route('users.index')->with('success', "User created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
