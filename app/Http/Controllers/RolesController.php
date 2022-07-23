<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return Role::get();
    }


    public function create(Request $request)
    {
        return response()->json(true);
    }

    public function update(Request $request, Role $role)
    {

        $role->update($request->only('name'));
        return response()->json($role);
    }

    
    public function show(Role $role)
    {
//
        return response()->json(['data' => $role]);
    }

    public function users(Role $role)
    {

        return $role->users->map->name;
    }

}
