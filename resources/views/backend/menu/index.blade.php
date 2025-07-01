@extends('backend.layouts.app')
@section('title', $title)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-header">
                            <h4 class="header-title">Menu Index</h4>
                            <div class="header-buttons">
                                @can('permission-create')
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm fnt_sz"> <i
                                            class="fa fa-plus-circle"></i> {{ __('button.add_new') }}</a>
                                @endcan
                            </div>
                        </div>

                            <ul>
                                @foreach ($menus as $menu)
                                    @include('backend.menu.menu_item', ['menu' => $menu])
                                @endforeach
                            </ul>

                                            

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
