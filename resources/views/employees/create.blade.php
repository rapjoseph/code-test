@extends('layout')
@section('title', 'Employee Add')
@section('content')
<div class="row">
    <div class="col-12">
        <h3>Add New Employee</h3>
    </div>
</div>

<div class="row">
    <div class="col-12">

        <form action='/employees' method='POST'>
            @include('employees.form')

            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>
</div>

