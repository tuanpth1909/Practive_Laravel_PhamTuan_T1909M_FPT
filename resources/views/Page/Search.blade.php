@extends('Master')
@section('Main')
    <div class="main mt-5">
        <div class="container">
            <div class="row">
                @include('Conponent.Header')
            </div>
            <div class="row">
                <div class="col">
                    <div class="info">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">SỬA</th>
                                <th scope="col">XÓA</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $product->id}}</td>
                                    <td>{{ $product->name}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>{{ $product->description}}</td>
                                    <td>
                                        <a class="btn btn-primary text-white" href="{{ route('Edit',$product->id) }}">Thay đổi</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('Delete',$product->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button TYPE="submit" class="btn btn-primary text-white" >Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
