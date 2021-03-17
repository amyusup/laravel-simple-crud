@extends('layout.main')
@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Edit New Product</h1>
            <form action="/products/{{$product->id}}" method="post">
                @method('patch')
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="name" name="name" value="{{ $product->name}}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="stock" name="stock" value="{{ $product->stock}}">
                    <label for="stock">Stock</label>
                    @error('stock')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" name="price" value="{{ $product->price}}">
                    <label for="price">Price</label>
                    @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
