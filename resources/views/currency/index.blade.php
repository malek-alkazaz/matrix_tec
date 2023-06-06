
<h1> Show All Currency </h1>

<table>
    <th>Name</th>
    <th>description</th>
    <th>Action</th>
    @foreach($projects as $project)
    <tr>
        <td><h3>{{$project->name}}</h3></td>
        <td><h3>{{$project->description}}</h3></td>
        <td>
            <a href="{{route('project.show',$project->id)}}">Show</a><br>
            <a href="{{route('project.edit',$project)}}">Edite</a><br>
            <form action="{{route('project.destroy',$project)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>


