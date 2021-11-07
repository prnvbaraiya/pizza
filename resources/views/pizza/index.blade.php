@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Pizza</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scoper="col">S.Price</th>
                            <th scoper="col">M.Price</th>
                            <th scoper="col">L.Price</th>
                            <th scoper="col">Catogery</th>
                            <th scoper="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pizzas as $key=> $pizza)
                            <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td><img src="{{Storage::url($pizza->image)}}" width="80"></td>
                            <td>{{$pizza->name}}</td>
                            <td>{{$pizza->description}}</td>
                            <td>{{$pizza->small_pizza_price}}</td>
                            <td>{{$pizza->medium_pizza_price}}</td>
                            <td>{{$pizza->large_pizza_price}}</td>
                            <td>{{$pizza->catogery}}</td>
                            <td><button class="btn btn-primary">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
