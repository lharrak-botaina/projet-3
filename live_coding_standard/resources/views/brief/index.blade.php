@foreach ($briefs as $value)
<table>
    <tbody>
        <tr>
            <td>  name: {{$value->name}}</td>
            <td> date livraison :{{$value->date_livraison}}</td>
            <td>date recuperation:{{$value->date_recuperation}}</td>
            <td>
                <button ><a href="{{route('assign.show',$value->id)}}">assign</a></button>
            </td>
        </tr>
    </tbody>
</table>
  
   
    

    
@endforeach