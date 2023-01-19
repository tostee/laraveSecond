@extends('dashboard.generals.base')
@section('title', 'Types')
@section('main')
<h3>Users Types</h3>
<a href="{{route('types.create')}}">Create New Type</a>
@include('dashboard.types._sections.table',['types' => $types])
    
@endsection