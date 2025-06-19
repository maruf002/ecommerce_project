@extends('backend.layouts.app')
@section('title', 'Permission')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-header">
                            <h4 class="header-title">Roles</h4>
                            <div class="header-buttons">
                                @can('permission-create')
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm fnt_sz"> <i
                                            class="fa fa-plus-circle"></i> {{ __('button.add_new') }}</a>
                                @endcan
                            </div>
                        </div>

                        <table class="table table-bordered datatables" >
                            <thead>
                                <tr>
                                    <th class="text-center">Sl</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $value)
                                    <tr>

                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td class="text-center">{{ $value->name }}</td>
                                        <td class="text-center">{{ $value->email }}</td>
                                        <td class="text-center">{{ $value->roles->pluck('name')->implode(', ') }}</td>
                                        <td class="text-center"><a class="btn btn-sm btn-warning"
                                                href="{{ route('users.edit', $value->id) }}"><i class="fa fa-edit "></i>
                                                Edit</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
    </div>
@endsection

@push('js')
    <script>
        $('.datatables').DataTable({


        });
    </script>
@endpush
