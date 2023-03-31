<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Http\Requests\StoreManagerRequest;
use App\Http\Requests\UpdateManagerRequest;

class ManagerController extends Controller
{

    public function index()
    {
        $managers = Manager::all();
            return $managers;
    }

    public function create()
    {
        
    }

    public function store(StoreManagerRequest $request)
    {
        //
    }

    public function show(Manager $manager)
    {
        //
    }

    public function edit(Manager $manager)
    {
        
    }

    public function update(UpdateManagerRequest $request, Manager $manager)
    {
        //
    }

    public function destroy(Manager $manager)
    {
        //
    }
}
