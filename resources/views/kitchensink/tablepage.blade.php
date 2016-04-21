@extends('vendor.pingpong.admin.layouts.master')
@section('content-header')
    @if(!empty($dataType))
        <h1>All {{$dataType}}</h1>
    @else
        <h1>All Items</h1>
    @endif
@stop
@section('content')
    @include('partials.table', ['data' => $players, 'keys' => array_keys(current($players))])
@stop