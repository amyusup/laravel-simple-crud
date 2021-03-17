@extends('layout.main')
@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List Of Product</h1>

            <a href={{url('products/create')}} class="btn btn-primary my-3"> Add New Product</a>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href={{url('products/'.$item->id)}} class="btn btn-sm btn-info text-white">Detail</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
