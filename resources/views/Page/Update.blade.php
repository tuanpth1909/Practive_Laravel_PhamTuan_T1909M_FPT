@extends('Master')
@section('Main')
    <div class="main mt-5">
        <div class="container">
            <div class="row">
                @include('Conponent.Header')
            </div>
            <div class="row">
                <div class="col">
                    <form action="{{route('Update',$pd->id)}}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" value="{{ $pd->name }}" name="name"  aria-describedby="emailHelp" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" class="form-control" value="{{ $pd->price }}"name="price" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" value="{{ $pd->description }}"name="description"id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
