<form action="{{route('task.store')}}" method="POST">
    @csrf
     nom  task<input  name="taskName" type="text">
     date debut<input name="startDate" type="date">
      dat fin<input name="endDate" type="date">
     <input name="id_brief"  value="{{$id}} " type="text">
    <button type="submit">ajouter</button>
</form>


<a href="{{route("brief.edit",$id)}}"><button>return</button></a>

