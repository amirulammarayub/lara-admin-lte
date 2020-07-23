<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminResource;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        // $admin = \App\Staff::query()->first();
        $admin = \App\Admin::query()->with(['staffs'])->first();
        // $resource = new \App\Http\Resources\StaffResource($admin);
        $resource = new \App\Http\Resources\AdminResource($admin);
        $staffs = $resource->staffs;
        $data['staffs'] = [
            'id' => $resource->staff_id,
            'name' => $resource->name,
            'staff_items' => collect($staffs)
        ];
        return view('staff_table')->with($data);
        // return $resource;
    }

    public function view(){
        return view('admin_register');
    }

    public function show($id)
    {
        return new AdminResource(Admin::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $admin = Admin::create($request->all());

        return (new AdminResource($admin))
            ->response()
            ->setStatusCode(201);
    }

    // public function update($id)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //     ]);

    //     $admin = admin::create($request->all());

    //     return (new adminResource($admin))
    //         ->response()
    //         ->setStatusCode(201);
    // }

    public function delete($id)
    {
        $admin = admin::findOrFail($id);
        $admin->delete();

        return response()->json(null, 204);
    }


    //
}
