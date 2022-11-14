@foreach ($student as $value)
<table>
    <tbody>
        <tr>
        <td>  name: {{$value->name}}</td>
          <form action="{{route('assign.store')}}" method="POST">
           @csrf
           <input type="hidden" name='brief_id' value="{{$brief->id}}">
           <input type="hidden" name='student_id' value="{{$value->id}}">
           <button type="submit">+</button>
          
          </form>
            {{-- <td>
                <button ><a href="{{route('assign.show',$value->id)}}">assign</a></button>
            </td> --}}
        </tr>
    </tbody>
</table>
  
    
@endforeach