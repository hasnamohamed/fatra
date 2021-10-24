@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
   Edit | User
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            Edit User
        @endslot
    @endcomponent

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit User</h4>
            <p class="card-category">Edit User's Information</p>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', ['id'=>$user->id]) }}" method="POST">
                @method('PUT')
                @include('back-end.users.form')
                <button type="submit" class="btn btn-primary pull-right">Edit User</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
@endsection
@endcan
