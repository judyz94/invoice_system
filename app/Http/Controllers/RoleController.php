<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $roles = Role::paginate(10);

        return view('roles.index', compact( 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Role $role
     * @return Factory|View
     */
    public function create(Role $role)
    {
        $role = new Role();
        $permissions = Permission::all();

        return view('roles.create', compact('role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $role = new Role();
        $role->name = $request->input('name');
        $role->slug = $request->input('slug');
        $role->description = $request->input('description');
        $role->special = $request->input('special');
        $role->save();

        $role->permissions()->sync($request->input('permissions'));

        Cache::forget('permissions');

        return redirect()->route('roles.index')->with('info', 'Role successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return Factory|View
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('roles.edit',  compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Role $role
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Role $role)
    {
        $role->name = $request->input('name');
        $role->slug = $request->input('slug');
        $role->description = $request->input('description');
        $role->special = $request->input('special');
        $role->save();

        $role->permissions()->sync($request->input('permissions'));

        Cache::forget('permissions');

        return redirect()->route('roles.index')->with('info', 'Role successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Role $role)
    {
        $role->delete();

        Cache::forget('permissions');

        return redirect()->route('roles.index')->with('info', 'Role successfully deleted.');
    }
}

