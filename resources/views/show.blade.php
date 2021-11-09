@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if(Auth::check())
                    <form action="{{route('order.store')}}" method="post">@csrf
                        <p>Name      : {{auth()->user()->name}}</p>
                        <p>E-mail    : {{auth()->user()->email}}</p>
                        <p>Phone No. <input type="number" class="form-control" name="phone"></p>
                        <p>Samll Pizza<input type="number" class="form-control" name="small_pizza" value="0"></p>
                        <p>Medium Pizza<input type="number" class="form-control" name="medium_pizza" value="0"></p>
                        <p>Large Pizza<input type="number" class="form-control" name="large_pizza" value="0"></p>
                        <p><input type="hidden" name="pizza_id" value="{{$pizza->id}}"></p>
                        <p><input type="date" name="date" class="form-control" ></p>
                        <p><input type="time" name="time" class="form-control" ></p>
                        <p><textarea name="body" class="form-control"></textarea></p>
                        <p class="text-center">
                            <input type="submit" class="btn btn-danger" value="Make Order">
                        </p>
                        @if(session('message'))
                        <div class="alert alert-success" role="alert">
                            {{session('message')}}
                        </div>
                        @endif

                        @if(session('errmessage'))
                        <div class="alert alert-danger" role="alert">
                            {{session('errmessage')}}
                        </div>
                        @endif

                    </form>
                    @else
                    <o><a href="/login">Login to Order Pizza</a></p>
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body text-center">
                        <div class="col-md-4 mt-2" style="border: 1px solid white;">
                            <img src="{{Storage::url($pizza->image)}}" alt="{{$pizza->name}}-image"class="img-thumbnail" style="width: 100%;"></img>
                            <p>{{$pizza->name}}</p>
                            <p>{{$pizza->description}}</p>
                            <p>Small Pizza Price : {{$pizza->small_pizza_price}}</p>
                            <p>Medium Pizza Price : {{$pizza->medium_pizza_price}}</p>
                            <p>Large Pizza Price : {{$pizza->large_pizza_price}}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px;
    }
    a.list-group-item:hover{
        background-color: red;
        color: white;
    }
    .card-header{
        background-color: red;
        color: white;
        font-size: 20px;
    }
</style>
@endsection
