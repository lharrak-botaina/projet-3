{{-- @foreach ($apprenantsAssinger as $valuee)

 <table class="table">
    <tbody>
    <tr>
        <td>
            <h4>{{$valuee->nom}} {{$valuee->prenom}}</h4>
        </td>
        <td>
            <form action="{{route('assigner.destroy',$valuee->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$valuee->id}}" name="apprenant_id">
               <input type="hidden" value="{{$id}}" name="brief_id">

                <button class="btn btn-danger btn-lg">-</button>
        </form>
        </td>
    </tr>
    </table>






 @endforeach --}}


@foreach ($apprenants as $value)

  <table class="table">
<tbody>
<tr>
    <td>
        <h4>{{$value->nom}} </h4>
    </td>
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$value->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="brief_id">

       <button class="btn btn-primary btn-lg">+</button>
</form>
    </td>
</tr>
</table>



 @endforeach
