@extends('template.master')
@section('page-content')

    @if($data['status'] == 1)
        <img src="{{ asset('admin/assets/images/on.jpg') }}">
    @else
        <img src="{{ asset('admin/assets/images/off.jpg') }}">
    @endif
@endsection