<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminResource;
use App\Http\Resources\StaffResource;

use App\Admin;
use App\Staff;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminLoginPage(Request $request)
    {
        return view('admin_login');
    }

    public function adminRegisterPage()
    {
        return view('admin_register');
    }

    public function adminLogin()
    {
        return $this->staffIndexPage();
    }

    public function adminCreate(Request $request)
    {
        $admin = new Admin;

        \DB::transaction(function () use ($request, $admin) {
        $admin->admin_name = $request->name;
        $admin->admin_email = $request->email;
        $admin->admin_password = $request->password;
        $admin->save();
        });

        return view('admin_login');
    }

    public function staffRegisterPage()
    {
        $data['staff']=[
            'mode' => 'new'
        ];
        return view('staff_register')->with($data);
    }

    public function staffEditPage($id)
    {
        $staff = Staff::find($id);

        if(!$staff)
            $this->adminLogin();

        $resource = new StaffResource($staff);

        $data['staff'] = [
            'id' => $resource->staff_id,
            'name' => $resource->staff_name,
            'email' => $resource->staff_email,
            'phone' => $resource->staff_phone,
            'added_by' => $resource->staff_added_by,
            'created_at' => $resource->created_at,
            'mode' => 'edit',
        ];
        return view('staff_update')->with($data);
    }

    public function staffIndexPage()
    {
        $staffs= Staff::all();
        $resource = new StaffResource($staffs);

        $data['staffs'] = $resource;

        return view('staff_table')->with($data);
    }

    public function staffCreate(Request $request)
    {
        $staff = new staff;

        \DB::transaction(function () use ($request, $staff) {
            $staff->staff_name     = $request->name;
            $staff->staff_email    = $request->email;
            $staff->staff_phone    = $request->phone;
            $staff->staff_added_by = $request->admin_name;
            $staff->save();
        });

        return $this->staffIndexPage();
    }

    public function staffShow($id)
    {
        $staff = Staff::find($id);

        if(!$staff)
            return $this->staffIndexPage();

        $resource = new StaffResource($staff);
        $data['staff'] = [
            'id'         => $resource->staff_id,
            'name'       => $resource->staff_name,
            'email'      => $resource->staff_email,
            'phone'      => $resource->staff_phone,
            'added_by'   => $resource->staff_added_by,
            'created_at' => $resource->created_at

        ];
        return view('staff_detail')->with($data);
    }

    public function staffUpdate(Request $request, $id)
    {
        $staff = Staff::find($id);

        \DB::transaction(function () use ($request, $staff) {
            $staff->staff_name = $request->name;
            $staff->staff_email = $request->email;
            $staff->staff_phone = $request->phone;
            $staff->staff_added_by = $request->admin_name;
            $staff->save();
        });

        $staffs= Staff::all();
        $resource = new StaffResource($staffs);

        $data['staffs'] = $resource;

        return view('staff_table')->with($data);

    }

    public function staffDelete($id)
    {
        $staff = Staff::find($id);
        if(!$staff)
            $this->adminLogin();
        else
            $staff->delete();

        return $this->adminLogin();
    }
}
