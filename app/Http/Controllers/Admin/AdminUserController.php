<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\ModelHasRole;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Yajra\DataTables\Facades\DataTables;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        if ($error = $this->authorize('admin-user-manage')) {
            return $error;
        }

        if ($request->ajax()) {
            $admin_users = User::whereIn('role', [1]);
            return DataTables::of($admin_users)
                ->addIndexColumn()
                ->addColumn('permission', function ($row) {
                    return 'Admin';
                })
                ->addColumn('image', function ($row) {
                    $path = imagePath('user', $row->image);
                    return '<img src="' . $path . '" width="70px" alt="image">';
                })
                ->addColumn('is_active', function ($row) {
                    if (userCan('admin-user-edit')) {
                        return view('button', ['type' => 'is_active', 'route' => route('admin.admin_users.is_active', $row->id), 'row' => $row->is_active]);
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    if (userCan('admin-user-edit')) {
                        $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.admin-users.edit', $row->id), 'row' => $row]);
                    }
                    if (userCan('admin-user-delete')) {
                        $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.admin-users.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    }
                    return $btn;
                })
                ->rawColumns(['image', 'is_active', 'action'])
                ->make(true);
        }
        // $roles = Role::all();
        return view('admin.user.admin.index');
    }

    function status(User $user)
    {
        if ($error = $this->authorize('admin-user-edit')) {
            return $error;
        }
        $user->is_active = $user->is_active  == 1 ? 0 : 1;
        try {
            $user->save();
            return response()->json(['message' => 'The status has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }


    // public function store(StoreUserRequest $request)
    // {
    //     if ($error = $this->authorize('admin-user-add')) {
    //         return $error;
    //     }
    //     $data = $request->validated();
    //     $data['role'] = '1';
    //     if ($request->hasFile('image')) {
    //         $data['image'] = imageStore($request, 'image', 'user', 'uploads/images/user/');
    //     }
    //     try {
    //         $admin_user = User::create($data);
    //         $admin_user->assignRole($request->role);
    //         return response()->json(['message' => __('app.success-message')], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['message'=>__('app.oops')], 500);
    //     }
    // }

    // public function edit(Request $request, User $admin_user)
    // {
    //     if ($error = $this->authorize('admin-user-edit')) {
    //         return $error;
    //     }
    //     if ($request->ajax()) {
    //         $roles = Role::all();
    //         $modal = view('dashboard.admin_user.edit')->with(['admin_user' => $admin_user, 'roles' => $roles])->render();
    //         return response()->json(['modal' => $modal], 200);
    //     }
    //     return abort(500);
    // }

    // public function update(UpdateUserRequest $request, User $admin_user)
    // {
    //     if ($error = $this->authorize('admin-user-add')) {
    //         return $error;
    //     }
    //     $data = $request->validated();
    //     if (user()->email != $request->email) {
    //         $data['email'] = $request->email;
    //     }
    //     if (isset($request->password)) {
    //         $data['password'] = bcrypt($request->password);
    //     }
    //     $image = user()->image;
    //     if ($request->hasFile('image')) {
    //         $data['image'] = imageUpdate($request, 'image', 'user', 'uploads/images/user/', $image);
    //     }
    //     try {
    //         $admin_user->update($data);
    //         if($request->role){
    //             ModelHasRole::whereModel_id($admin_user->id)->update(['role_id'=>Role::whereName($request->role)->first()->id]);
    //         }
    //         return response()->json(['message' => 'Data Successfully Inserted'], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['message' => __('app.oops')], 500);
    //     }
    // }

    // public function destroy(User $admin_user)
    // {
    //     if ($error = $this->authorize('admin-user-delete')) {
    //         return $error;
    //     }
    //     try {
    //         $checkPath =  public_path('uploads/images/user/' . $admin_user->image);
    //         if (file_exists($checkPath)) {
    //             unlink($checkPath);
    //         }
    //         $admin_user->delete();
    //         return response()->json(['message' => __('app.success-message')], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['message' => __('app.oops')], 500);
    //     }
    // }
}
