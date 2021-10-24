@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
    User | Control
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            User Control
        @endslot
    @endcomponent


    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">User Control</h4>
                        <p class="card-category"> Here you can add , edit and delete users</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('users.create') }}" class="btn btn-white btn-round">Add User</a>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Role
                                </th>
                                <th class="text-right">
                                    Control
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->role }}
                                    </td>
                                    @can('view-user',$user)
                                    <td class="td-actions text-right">
                                        <a href="{{ route('users.edit', ['id' => $user->id]) }}"> <button type="button"
                                                rel="tooltip" title="" class="btn btn-white btn-link btn-sm"
                                                data-original-title="Edit User">
                                                <i class="material-icons">edit</i>
                                            </button></a>
                                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                                            @method('delete')
                                            {{ csrf_field() }}
                                            <button type="submit" rel="tooltip" title=""
                                                class="btn btn-white btn-link btn-sm" data-original-title="Delete">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@endcan
