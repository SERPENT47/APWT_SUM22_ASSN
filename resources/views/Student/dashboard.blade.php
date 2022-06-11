User: Student

<table border="1">
    <tr>
        <th>Name</th>
        <th>email</th>
        
    </tr>
    @foreach($students as $st)
        <tr>
            <td>{{$st->name}}</td>
            <td>{{$st->email}}</td>
        </tr>
    @endforeach
</table>
