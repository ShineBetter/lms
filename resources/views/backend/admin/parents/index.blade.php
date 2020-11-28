@extends('backend.admin.partial._master')
@section('cntd')
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    @if($type == 'index')
        @include('backend.admin.partial.table')
    @elseif($type == 'edit')
        @include('backend.admin.partial.form')
    @elseif($type == 'add')
        @include('backend.admin.partial.form')
    @endif

@endsection
