@extends('adminlte::master')


@section('adminlte_css')
  @stack('css')
  @yield('css')
@stop


@section('title')
  @yield('title', 'Title')
@stop

@section('classes_body', 'text-center')

{{-- @section('body_data', $layoutHelper->makeBodyData()) --}}


@section('body')
  @yield('content')
@stop

@section('adminlte_js')
  @stack('js')
  @yield('js')
@stop
