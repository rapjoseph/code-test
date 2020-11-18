@extends('layout')
@section('title', 'Employee Edit')
@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Edit Employee for {{ $employee->name }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <form action='/employees/{{ $employee->id }}' method='POST'>
                @method('PATCH');
                @include('employees.form')

                <button type="submit" class="btn btn-primary">Save Employee</button>
            </form>
        </div>
    </div>

