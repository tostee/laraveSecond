@extends('dashboard.generals.base')
@section('title','Create type')
@section('header')
<nav>
<a class="btn btn-light" href="{{route('types.index')}}">Go back</a>
</nav>
@endsection
@section('main')
<h3 class="title text-center">Users Types / @if ($id)
    Update Type
    @else
    Create Type
@endif

</h3>

<div class="row justify-content-center">
    <div class="col-12 col-md-3">
<form action="{{route('types.save', ['id' => $id])}}" method="POST">
    @if ($type!=null)
    @method('PUT')
    <input type="hidden" name="id" value="{{$id}}"/>
    @endif
    @csrf
    <div class="form-group">
        <label for="">Type</label>
        <input class="form-control" type="text" placeholder="Type" name="type" value="{{$type != null?$type['type']:''}}">
    </div>
    <button class="btn btn-primary">Save</button>

</form>
    </div>
</div>
@endsection