@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
    Create | Post
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            Create Post
        @endslot
    @endcomponent

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create Post</h4>
            <p class="card-category">Complete Post's Information</p>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @include('back-end.posts.form')
                <button type="submit" class="btn btn-primary pull-right">Create Post</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>

@endsection
@endcan
