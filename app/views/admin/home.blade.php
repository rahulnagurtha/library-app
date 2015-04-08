@extends('admin.master')
@section('head')
    @endsection
@section('content')
        {{ Hash::make('pass') }}
        {{ App::environment() }}
    @endsection

@section('script')

    @endsection