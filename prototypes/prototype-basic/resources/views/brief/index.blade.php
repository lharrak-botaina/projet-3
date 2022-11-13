

<a href="{{route("brief.create")}}"><button>add</button></a>

<table>
    <thead>
        <tr>
            <th>name</th>
            <th>livraison</th>
            <th>recuperation</th>
            <th>Tache</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brief as $item )
        <tr>

            <td>{{$item->brief_name}} </td>
            <td>{{$item->deliver_date}}</td>
            <td>{{$item->recovery_date}}</td>
            <td>
                <a href="{{route('brief.edit',$item->id)}}"><button>Edit</button></a>
                <a href="{{route('',$item->id)}}"><button>Edit</button></a>

                </td>
            <td>
                <form action="{{route('brief.destroy',$item->id)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button>delete</button>
                </form>
            </td>



        </tr>
        @endforeach
    </tbody>

</table>



