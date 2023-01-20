@extends('dashboard.generals.base')
@section('title', 'Users')

@section('main')
<div class="container">
<h3>Users</h3>
<a class="btn btn-primary" href="{{route('users.create')}}">
    <i class = "fas fa-plus">Create New User</i> 
</a>

@includeif('dashboard.users._sections.table',['users' => $users])
@endsection
</div>
