@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
    Create | User
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            Create User
        @endslot
    @endcomponent

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create User</h4>
            <p class="card-category">Complete User's Information</p>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @include('back-end.users.form')
                <button type="submit" class="btn btn-primary pull-right">Create User</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>

@endsection
@endcan
