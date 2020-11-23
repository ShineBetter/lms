@extends('backend.admin.partial._master')
@section('title','ارسال دوره')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    @include('backend.admin.partial.form')
@endsection
