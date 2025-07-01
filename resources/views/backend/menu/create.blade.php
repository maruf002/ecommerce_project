@extends('backend.layouts.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-warning">

                    <form action="{{ route('menus.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                           
                            <div class="form-group">
                                <label for="title">Menu Title</label>
                                <input type="text" name="title" class="form-control form-control-sm" required>
                            </div>

                            <div class="form-group">
                                <label for="url">URL </label>
                                <input type="text" name="url" class="form-control form-control-sm">
                            </div>

                            <div class="form-group">
                                <label for="icon">Icon Class </label>
                                <input type="text" name="icon" class="form-control form-control-sm" placeholder="e.g. fa fa-home">
                            </div>

                            <div class="form-group">
                                <label for="parent_id">Parent Menu </label>
                                <select name="parent_id" class="form-control form-control-sm">
                                    <option value="">-- No Parent (Top Level) --</option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <button  type="submit" class="btn btn-sm btn-dark mt-2">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
