<tr>
    <td>{{$role['id']}}</td>
    <td>{{$role['type']}}</td>
    <td>{{$role['created_at']}}</td>
    <td>{{$role['updated_at']}}</td>
    <td>
        <a class="btn btn-success" href="{{route('roles.edit',['id' => $role['id']])}}">Edit</a>
    </td>
    <td>
        <form action="{{route('roles.delete', ['id' => $role['id']])}}" method="POST" id="logout">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
    </td>
    
</tr>