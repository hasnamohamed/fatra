@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
   Edit | Post
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            Edit Post
        @endslot
    @endcomponent

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Post</h4>
            <p class="card-category">Edit Post's Information</p>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.update', ['id'=>$post->id]) }}" method="POST">
                @method('PUT')
                @include('back-end.posts.form')
                <button type="submit" class="btn btn-primary pull-right">Edit Post</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
@endsection
@endcan
