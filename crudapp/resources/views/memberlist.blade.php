<h1>Member list</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach($data as $el)

    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->name}}</td>
        <td>{{$el->email}}</td>
        <td>{{$el->address}}</td>
        <td><a href={{"delete/".$el->id}}>
            Delete
            </a></td>
            <td><a href={{'edit/'.$el->id}}>Update</a></td>
    </tr>
 @endforeach
</table>