<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['created_at']}}</td>
    <td>{{$user['updated_at']}}</td>
    <td>
        <a class="btn btn-success" href="{{route('users.edit',['id' => $user['id']])}}">Edit</a>
    </td>
    <td>
        <form action="{{route('users.delete', ['id' => $user['id']])}}" method="POST" id="logout">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
    </td>
    
</tr>