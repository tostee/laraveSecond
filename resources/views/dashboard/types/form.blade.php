@extends('dashboard.generals.base')
@section('title','Create type')
@section('header')
<a href="{{route('types.index')}}">Go back</a>
@endsection
@section('main')
<h3>Users Types / @if ($id)
    Update Type
    @else
    Create Type
@endif

</h3>


<form action="{{route('types.save', ['id' => $id])}}" method="POST">
    @if ($type!=null)
    @method('PUT')
    <input type="hidden" name="id" value="{{$id}}/>
    @endif
    @csrf
    <label for="">Type</label>
    <input type="text" placeholder="Type" name="type" value="{{$type != null?$type['type']:''}}">
    <button>Save</button>

</form>
@endsection