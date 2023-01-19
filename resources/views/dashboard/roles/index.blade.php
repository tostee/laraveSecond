@extends('dashboard.generals.base')
@section('title', 'Roles')

@section('main')
<div class="container">
<h3>Users Roles</h3>
<a class="btn btn-primary" href="{{route('roles.create')}}">
    <i class = "fas fa-plus">Create New Role</i> 
</a>

@includeif('dashboard.roles._sections.table',['roles' => $roles])
@endsection
</div>
