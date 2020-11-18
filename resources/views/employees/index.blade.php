@extends('layout')
@section('title', 'Employee List')
@section('content')
<div class="row">
    <div class="col-12">
        <h3>Employee List</h3>
        <p><a href="/employees/create">Add new Employee</a></p>
    </div>
</div>




@foreach($employees as $employee)

    <div class="row">
        <div class="col-2">
            {{ $employee->id }}
        </div>
        <div class="col-4">
           <a href="/employees/{{ $employee->id }}">{{ $employee->name }}</a>
        </div>
        <div class="col-4">
            {{ $employee->company->name }}
        </div>
        <div class="col-2">
            {{ $employee->active}}
        </div>
    </div>

@endforeach
@endsection

