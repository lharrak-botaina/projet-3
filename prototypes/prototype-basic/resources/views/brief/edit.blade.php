


<form action="{{route("brief.update",$brief->id)}}" method="post">
    @method("PUT")
    @csrf
    nom brief<input value="{{$brief->brief_name}}" name="name" type="text">
    date de livraison<input value="{{$brief->deliver_date}}" name="deliver_date" type="date">
    Date de recuperation<input value="{{$brief->recovery_date}}"name="recovery_date" type="date">
   <button>ajouter</button>
</form>


<form action="{{route('task.create')}}" method="get">
    <input name="briefId" value="{{$brief->id}}" type="hidden">

    <button>add task</button>
</form>

<table>
    <thead>
        <tr>

            <th>id</th>
            <th> Nom de la tâche</th>
            <th>Début de la tâche</th>
            <th>Fin de la tâche</th>
            <th>action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($task as $item )
        <tr>
            <td>{{$item->id}} </td>
            <td>{{$item->task_name}} </td>
            {{-- <td>{{$item->Début_de_la_tâche}}</td>
            <td>{{$item->Fin_de_la_tâche}}</td> --}}
            <td>

                <a href="{{route('task.edit',$item->id)}}"><button>Edit</button></a>

                <form action="{{route('task.destroy',$item->id)}}" method="POST">
                    @method("DELETE")
                    <input type="hidden" value="{{$id}}" name="brief_id">

                    @csrf
                    <button>delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>







<a href="{{route("brief.index")}}"><button>return</button></a>

