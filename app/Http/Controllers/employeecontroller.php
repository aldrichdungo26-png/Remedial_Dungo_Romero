<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employees = employee::all();
        return view('employee.index', compact('employees'));
    }


    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $employees = new employee;
        $employees->name = $request->name;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        $employees->save();
        return redirect()->route('employee.index');
    }

    public function edit( int $id)
    {
        $employees = employee::find($id);
        return view('employee.edit', compact('employees'));
    }

    public function update(Request $request, int $id) {
        $employees = employee::find($id);
        $employees->name = $request->name;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        $employees->save();
        return redirect()->route('employee.index');
    }

    public function destroy(int $id){
        $employees = employee::find($id);
        $employees->delete();
        return redirect()->route('employee.index');
    }
}
