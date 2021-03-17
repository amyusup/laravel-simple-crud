@extends('layout.main')
@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Detail Of Product</h1>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp. {{$product->price}}</h6>
                            <p class="card-text">Qyt : {{$product->stock}}</p>
                        </div>
                        <div class="col">
                        <a href="/products/{{$product->id}}/edit" class="btn btn-success w-100 mb-2">Edit</a>
                        <form action="/products/{{$product->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
