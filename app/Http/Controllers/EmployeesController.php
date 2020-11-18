<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{
    public function index(){
        $employees = Employee::all();
       // $activeEmployees = Employee::active()->get();
        //$inactiveEmployees = Employee::inactive()->get();
        //return view('employees.index', compact('activeEmployees','inactiveEmployees'));
        return view('employees.index', compact('employees'));
    }

    public function create(){
        $companies = Company::all();
        $employee = new Employee();
        return view('employees.create', compact('companies','employee'));
    }

    public function store(){

        Employee::create($this->validateRequest());

        return redirect('employees');
    }

    public function show($employee){
        $employee = Employee::where('id', $employee)->firstOrfail();
      return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee){
        $companies = Company::all();
        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(Employee $employee){

        $employee->update($this->validateRequest());
        return redirect('employees/' . $employee->id);
    }

    public function destroy(Employee $employee){
        $employee->delete();

        return redirect('employees');
    }
    private function validateRequest()
    {
        return request()->validate(
            ['name'=>'required|min:4',
                'email'=>'required|email',
                'active'=>'required',
                'company_id'=>'required',
            ]);
    }
}
