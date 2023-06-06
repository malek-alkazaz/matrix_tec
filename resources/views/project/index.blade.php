<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Show All Projects </h1>

    <table>
        <th>Name</th>
        <th>description</th>
        <th>Action</th>
        @foreach($projects as $project)
        <tr>
            <td><h3>{{$project->name}}</h3></td>
            <td><h3>{{$project->description}}</h3></td>
            <td>
                <a href="{{route('project.create')}}">Add Project</a><br>
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
</body>
</html>
