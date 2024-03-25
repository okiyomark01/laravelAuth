<?php

namespace App\Http\Controllers;

use App\Models\DummyData;
use Illuminate\Http\Request;

class DummyDataController extends Controller
{
    protected $dummyData;
    public function __construct()
    {
        $this->dummyData = new DummyData();
    }

    public function index()
    {
        return $this->dummyData->all();
    }

    
    public function store(Request $request)
    {
        return $this->dummyData->create($request->all());
    }

    
    public function show($id)
    {
        return $this->dummyData->find($id);
    }

    
    public function update(Request $request, $id)
    {
        $dummyData = $this->dummyData->find($id);
        $dummyData->update($request->all());
        return $dummyData;
    }

    
    public function destroy($id)
    {
        $dummyData = $this->dummyData->find($id);
        return $dummyData->delete();
    }
}
