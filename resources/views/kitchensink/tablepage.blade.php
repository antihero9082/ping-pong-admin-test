@extends('vendor.pingpong.admin.layouts.master')
@section('content-header')
    @if(!empty($dataType))
        <h1>All {{$dataType}}</h1>
    @else
        <h1>All Items</h1>
    @endif
@stop
@section('content')
    @if(!empty($customKeys))
        <!--
         Interesting way to set variables using blade templates
         http://laravel-recipes.com/recipes/256/assigning-a-variable-in-a-blade-template
        --!>
       {{--*/ $keys = $customKeys /*--}}
    @else
        <?php
        $keys = [];
        foreach (array_keys(current($players)) as $key) {
            $keys[$key]['display'] = $key;
        }
        ?>
    @endif
    @include('partials.table', ['data' => $players, 'keys' => $keys])
@stop