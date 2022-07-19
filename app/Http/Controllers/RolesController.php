<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create()
    {
//        $role = new Role();
//        $role->name='Client';
//        $role->save();
//        Role::insert(['name' => 'Admin']);
        Role::create([
           'name' => 'manager',
        ]);
        return response()->json(true);
    }

    public function index()
    {
        $role=Role::find(3)->delete();
//        return response()->json(Role::get());
    }

}
