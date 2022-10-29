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

@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<a href="{{url('/categories/create')}}" class="btn btn-primary float-end">create category </a>


{{-- <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">category name</th>
            <h3>categories</h3> --}}
{{dd($categories)}}
{{-- @foreach ($categories as $category)
    <p>{{$category->name}}</p>

@endforeach --}}
          </tr>
        </thead>
        <tbody>

          <tr>

          </tr>

        </tbody>
      </table>
</div>


