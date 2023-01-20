@extends('dashboard.generals.base')
@section('title','Create a new User')
@section('header')
<nav>
<a class="btn btn-light" href="{{route('users.index')}}">Go back</a>
</nav>
@endsection
@section('main')
<h3 class="title text-center">Users / @if ($id)
    Update User
    @else
    Create User
@endif

</h3>

<div class="row justify-content-center">
    <div class="col-12 col-md-3">
<form action="{{route('users.save', ['id' => $id])}}" method="POST">
    @if ($user!=null)
    @method('PUT')
    <input type="hidden" name="id" value="{{$id}}"/>
    @endif
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input class="form-control" type="text" placeholder="name" name="name" value="{{$user != null?$user['name']:''}}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" placeholder="email" name="email" value="{{$user != null?$user['email']:''}}">
    </div>
    <button class="btn btn-primary">Save</button>

</form>
    </div>
</div>
@endsection