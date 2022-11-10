<form action="{{route("task.store")}}" method="post">
    @csrf
     nom  task<input  name="taskName" type="text">
     date debut<input name="startDate" type="date">
      dat fin<input name="endDate" type="date">
     <input name="briefsId"  value="{{$id}} " type="text">
    <button>ajouter</button>
</form>


<a href="{{route("brief.edit",$id)}}"><button>return</button></a>

