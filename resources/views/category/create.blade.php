{{-- <h1>this categories dashboard</h1>

@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        category Details
                        <a href="{{ url('/createcategories')}}" class="btn btn-primary float-end">Add category</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}



<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

{{-- <a href="{{url('/categories')}}" class="btn btn-primary float-end">back </a> --}}

<div class="card">
    <div class="card">
        <h4>
            Add Category
            <a href="{{url('/categories')}}" class="btn btn-primary float-end">back </a>
        </h4>
    </div>
    <div class="card-body">
        <form action="{{url('/categories')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Category name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </div>

</div>


