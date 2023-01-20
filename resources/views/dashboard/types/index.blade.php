@extends('dashboard.generals.base')
@section('title', 'Types')
@section('main')
<h3>Users Types</h3>
<a class="btn btn-primary" href="{{route('types.create')}}">
    <i class="fas fa-plus"> New Type</i>
</a>
@include('dashboard.types._sections.table',['types' => $types])
    
@endsection