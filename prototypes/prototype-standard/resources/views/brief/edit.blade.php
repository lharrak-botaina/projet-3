<form action="{{route('brief.update',$brief->id)}}" method="POST">
    @csrf
    @method('PUT')
    nom <input type="text" value="{{$brief->brief_name}}" name="brief_name">
    date de livraison<input value="{{$brief->delivery_date}}" type="dateTime-local" name="delivery_date">
     date de recuperation<input value="{{$brief->recuperation_date}}" type="dateTime-local" name="recuperation_date">
    <button type="submit">add</button>
</form>
<a href="{{route('task.create', $brief->id)}}">+add task</a>
<table>
    <thead>
        <tr>
            <th>nom de tache</th>
            <th>date de debut</th>
            <th>date de fin</th>

            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $value)
        <tr>
            <td>{{$value->task_name}}</td>
            <td>{{$value->start_date}}</td>
            <td>{{$value->end_date}}</td>
            <td>
                <a href="{{route('task.edit', $value->id)}}">edit</a>
                <form action="{{route('task.destroy', $value->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
