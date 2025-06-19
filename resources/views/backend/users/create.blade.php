@extends('backend.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-warning">

                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Role Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                    <div class="text-danger text-sm"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Role">Permission Name</label>
                                @foreach ($permissions as $pr)
                                    <div class="col-md-12">
                                        <input type="checkbox" value="{{ $pr->name }}" name="permission[]">
                                        {{ $pr->name }}
                                    </div>
                                @endforeach

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
