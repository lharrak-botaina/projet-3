<a href="{{route('brief.create')}}">+add brief</a>
<table>
    <thead>
        <tr>
            <th>nom de brief</th>
            <th>date de livraison</th>
            <th>date de recuperation</th>
            
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($briefs as $value)
        <tr>
            <td>{{$value->brief_name}}</td>
            <td>
                <a href="{{route('brief.edit', $value->id)}}">edit</a>
                <form action="{{route('brief.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>