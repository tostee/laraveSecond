<tr>
    <td>{{$type['id']}}</td>
    <td>{{$type['type']}}</td>
    <td>{{$type['created_at']}}</td>
    <td>{{$type['updated_at']}}</td>
    <td>
        <a class="btn btn-success" href="{{route('types.edit',['id' => $type['id']])}}">Edit</a>
    </td>
    <td>
        <form action="{{route('types.delete', ['id' => $type['id']])}}" method="POST" id="logout">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
    </td>
    
</tr>