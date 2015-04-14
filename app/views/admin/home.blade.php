@extends('admin.master')
@section('head')
    @endsection
@section('content')
        {{ Hash::make('fe43wg') }}
        {{ App::environment() }}
    {{ Auth::admin()->get()->username }}
    @endsection

@section('script')

    @endsection