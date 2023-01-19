@extends('dashboard.generals.base')
@section('header')
<nav>
<a class="btn btn-light" href="{{route('roles.index')}}">Go back</a>
</nav>
@endsection
@section('main')
<h3 class="title text-center">Users Roles / @if ($role)
    Update Role
    @else
    Create Role
@endif

</h3>

<div class="row justify-content-center">
    <div class="col-12 col-md-3">
        <form action="{{route('roles.save', ['id' => $id])}}" method="POST">
            @if ($role!=null)
            @method('PUT')
            <input type="hidden" name="id" value="{{$id}}"/>
            @endif
            @csrf
            <div class="form-group">
                <label for="">Type</label>
                <input class="form-control" type="text" placeholder="Type a role" name="type" value="{{$role != null?$role['type']:''}}">
            </div>
            <button class="btn btn-success">Save</button>
            

        </form>
    </div>
</div>
@endsection