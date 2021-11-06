@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                   <div class="form-group">
                       <label for="name">Name of Pizza</label>
                       <input type="text" class="form-control" name="name" placeholder="Name of Pizza">
                   </div>
                   <div class="form-group">
                       <label for="description">Description of Pizza</label>
                       <textarea class="form-control" name="description"></textarea>
                   </div>
                   <label>Pizza Price</label>
                   <div class="form-inline">
                        <input type="number" class="form-control" placeholder="small pizza price">
                        <input type="number" class="form-control" placeholder="medium pizza price">
                        <input type="number" class="form-control" placeholder="large pizza price">
                   </div>
                   <div class="form-group">
                       <label for="category">Category</label>
                       <select class="form-control">
                            <option value="vegitarian">Vegitarian Pizza</option>
                            <option value="nonvegitarian">Non Vegitarian Pizza</option>
                            <option value="traditional">Traditional Pizza</option>
                        </select>
                   </div>
                   <div class="form-group">
                       <label>Image</label>
                       <input type="file" class="form-control" name="image">
                   </div>
                   <div class="form-group text-center">
                       <button class="btn btn-primary ">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
