@extends('backend.layouts.app')
@section('title', 'Permission')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-warning">

                    <form action="{{ route('permission.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                    <div class="text-danger text-sm"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-sm btn-dark mt-2">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
