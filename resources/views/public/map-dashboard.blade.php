@extends('public.layouts.app')

@section('content')
@include('public.components.interactive-map', ['height' => 'calc(100vh - 80px)'])
@endsection
