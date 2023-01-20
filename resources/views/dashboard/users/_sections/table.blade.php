<div class="table-responsive mt-3">
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Create Date</th>
                <th>Update Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                @include('dashboard.users._sections.row',['user'=>$user])
            @endforeach
        </tbody>
    </table>
    </div>