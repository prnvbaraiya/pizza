@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Customers
                    <a href="{{route('pizza.create')}}" style="float:right;"><button class="btn btn-light">Create Pizza</button></a>
                    <a href="{{route('pizza.index')}}" style="float:right;"><button class="btn btn-light">View Pizza</button></a>
                </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)

                        <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{\Carbon\Carbon::parse($customer->created_at)->format('d M Y')}}</td>
                        
                        </tr>
                    @endforeach
                    </tbody>
                    </table>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
