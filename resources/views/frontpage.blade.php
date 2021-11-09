@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <form action="{{route('frontpage')}}" method="get">
                        <a href="/" class="list-group-item list-group-item-action">Back</a>
                        <input type="submit" name="category" value="Vegitarian" class="list-group-item list-group-item-action">
                        <input type="submit" name="category" value="NonVegitarian" class="list-group-item list-group-item-action">
                        <input type="submit" name="category" value="Traditional" class="list-group-item list-group-item-action">

                    </form>
                    
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza({{count($pizzas)}})</div>

                <div class="card-body">
                    <div class="row">
                        @forelse($pizzas as $pizza)
                        <div class="col-md-4 mt-2 text-center" style="border: 1px solid white;">
                            <img src="{{Storage::url($pizza->image)}}" alt="{{$pizza->name}}-image"class="img-thumbnail" style="width: 100%;"></img>
                            <p>{{$pizza->name}}</p>
                            <p>{{$pizza->description}}</p>
                            <a href="{{route('pizza.show',$pizza->id)}}">
                                <button class="btn btn-danger">Order Now</button>
                            </a>    
                        </div>

                        @empty
                        <p>No pizza Show</p>

                        @endforelse
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px;
    }

    .card-header{
        background-color: red;
        color: white;
        font-size: 20px;
    }
</style>
@endsection
