@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

    @include('includes.info') 

    @include('includes.recent-posts') 

    @include('includes.clients') 

@endsection