<div class="table-responsive mt-3">
<table class="table" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Create Date</th>
            <th>Update Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
            @include('dashboard.roles._sections.row',['role'=>$role])
        @endforeach
    </tbody>
</table>
</div>