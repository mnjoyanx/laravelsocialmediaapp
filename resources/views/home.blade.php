@extends('templates.default')


@section('content')
    <p>this is my body section</p>
    {{Session::get('info')}}
@endsection
