@extends('backend.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-warning">

                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-md-1 col-form-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <div class="text-danger text-sm"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-md-1 col-form-label">Email</label>
                               <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                        placeholder="Enter Email">
                                    @error('email')
                                        <div class="text-danger text-sm"><strong>{{ $message }}</strong></div>
                                    @enderror
                               </div>
                            </div>
                            <div class="form-group row">
                                <label for="Role">Role Name : </label>
                                @foreach ($roles as $rl)
                                    <div class="col-md-12">
                                        <input type="checkbox"   {{ $hasRoles->contains($rl->id) ? 'checked' : '' }}
                                            value="{{ $rl->name }}" name="role[]"> {{ $rl->name }}
                                    </div>
                                @endforeach

                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-sm btn-info mt-2">Update</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
