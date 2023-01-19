<table border="1">
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
        @foreach($types as $type)
            @include('dashboard.types._sections.rows', ['type' => $type])

        @endforeach
    </tbody>
</table>