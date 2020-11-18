@extends('layout')
@section('title', 'Employee profile')
@section('content')

    <div class="row">
        <div class="col-12">
            <h4>Details for {{$employee->name}}</h4>
            <p><a href="{{ $employee->id }}/edit">Edit</a></p>

            <form action="{{ $employee->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <p><strong>Name:</strong>{{$employee->name}}</p>
            <p><strong>Email:</strong>{{$employee->email}}</p>
            <p><strong>Company:</strong>{{$employee->company->name}}</p>
        </div>
    </div>
