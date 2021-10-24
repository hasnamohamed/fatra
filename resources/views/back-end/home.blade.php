@can('admin-perm', Auth::user())
@extends('back-end.layouts.app')
@section('title')
Home | Page
@endsection
@section('content')
    @component('back-end.layouts.header')

        @slot('nav_title')
            Home Page
        @endslot

    @endcomponent
@endsection
@endcan
