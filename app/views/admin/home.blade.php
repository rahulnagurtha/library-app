@extends('admin.master')
@section('head')
    @endsection
@section('content')
        {{ Hash::make('pass') }}
        {{ App::environment() }}
    {{ Auth::admin()->get()->username }}
    @endsection

@section('script')

    @endsection