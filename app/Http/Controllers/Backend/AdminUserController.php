<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdminUser\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUserController extends BackendController
{
    public function index(Request $request)
    {/*************Searching Admin Users*/
        if (!empty($request->search_admin_users)) {
            $criteria = $request->search_admin_users;
            $userData=AdminUser::where('name','LIKE','%'.$criteria.'%')
                ->orwhere('username','LIKE','%'.$criteria.'%')
            ->orwhere('email','LIKE','%'.$criteria.'%')->get();
            $this->data('usersData', $userData);
            return view($this->pagePath . '.admins.show-admin-users', $this->data);
        } else {

            $userData = AdminUser::orderBy('id', 'desc')->get();
            $this->data('usersData', $userData);
            return view($this->pagePath . '.admins.show-admin-users', $this->data);
        }
/**************End Search Admin Users*/

    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.admins.add-admin-user', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'username' => 'required|min:3|max:20|unique:admin_users,username',
                'email' => 'required|email|unique:admin_users,email',
                'password' => 'required|min:3|max:20|confirmed',
                'password_confirmation' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'
            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/admins');
                if (!$file->move($uploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'file not upload');
                }
                $data['image'] = $imageName;


            }


            if (AdminUser::create($data)) {
                return redirect()->route('admin-users')->with('success', 'Data was inserted');
            } else {
                return redirect()->back()->with('error', 'Data was  not inserted');
            }
        }
    }

    /************************Start Update Status*************************************/
    public function updateStatus(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findOrFail($criteria);
            if (isset($_POST['active'])) {
                $findUser->status = 0;
                $message = "Status was  Inactive";
            }
            if (isset($_POST['inactive'])) {
                $findUser->status = 1;
                $message = "Status was  Active";
            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);

            }
        }
    }
    /*****************End Update status***********************/

    /**************UpdateAdminType***********************/
    public function updateAdminType(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findOrFail($criteria);

            if (isset($_POST['super-admin'])) {
                $findUser->admin_type = 'admin';
                $message = "Admin Type was changed";
            }
            if (isset($_POST['admin'])) {
                $findUser->admin_type = 'super-admin';
                $message = "Admin Type was changed";
            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);
            }
        }

    }

    /*****************End Admin Types***********************/

    public function delete(Request $request)
    {
        $id = $request->criteria;

        if ($this->deleteFile($id) && AdminUser::findOrFail($id)->delete()) {
            return redirect()->back()->with('success', 'Data was deleted');
        }
    }

    /***********Startn Delete and Images************************/
    function deleteFile($id)
    {
        $findData = AdminUser::findOrFail($id);
        $fileName = $findData->image;
        $filePath = public_path('uploads/admins/' . $fileName);

        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
            return true;
        } else {

            return true;
        }

    }
    /***************End Delete Data and Images**************/

    /**********Start Edit**********/
    public function edit(Request $request)
    {
        $id = $request->criteria;
        $adminData = AdminUser::findOrFail($id);
        $this->data('adminData', $adminData);
        return view($this->pagePath . '.admins.edit-admin', $this->data);
    }

    public function editAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $id = $request->criteria;

            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'username' => 'required|min:3|max:20|', [
                    Rule::unique('admin_users', 'username')->ignore($id)
                ],
                'email' => 'required|email|', [
                    Rule::unique('admin_users', 'email')->ignore($id)
                ],
                'image' => 'mimes:jpg,jpeg,gif,png'
            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/admins');
                if ($this->deleteFile($id) && $file->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }


            }


            if (AdminUser::findOrFail($id)->update($data)) {
                return redirect()->route('admin-users')->with('success', 'Data was successfully Updated');
            } else {
                return redirect()->back()->with('error', 'Data was  not updated');
            }

        }
    }
    /*********End Edit***************/
}
