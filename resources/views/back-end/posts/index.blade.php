@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
    Post | Control
@endsection
@section('content')
    @component('back-end.layouts.header')
        @slot('nav_title')
            Post Control
        @endslot
    @endcomponent
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">Post Control</h4>
                        <p class="card-category"> Here you can add , edit and delete posts</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('posts.create') }}" class="btn btn-white btn-round">Add Post</a>
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
                                    Title
                                </th>
                                <th>
                                    Post
                                </th>
                                <th>
                                    Role
                                </th>
                                <th class="text-right">
                                    User
                                </th>
                                <th class="text-right">
                                    Control
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        {{ $post->post }}
                                    </td>
                                    <td>
                                        {{ $post->user->role }}
                                    </td>
                                    <td class="text-right">
                                        {{ $post->user->name }}
                                    </td>
                                    @can('view-control',$post)
                                        <td class="td-actions text-right">
                                            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"> <button type="button"
                                                    rel="tooltip" title="" class="btn btn-white btn-link btn-sm"
                                                    data-original-title="Edit Post">
                                                    <i class="material-icons">edit</i>
                                                </button></a>
                                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
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
