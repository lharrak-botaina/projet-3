<form action="{{route('task.store')}}" method="POST">
    @csrf
    nom <input type="text" name="task_name">
    date de debut<input type="dateTime-local" name="start_date">
     date de fin<input type="dateTime-local" name="end_date">
     date de fin<input type="dateTime-local" name="description">
     <input type="hidden"  value="{{$brief->id}}" name="brief_id" >
    <button type="submit">add</button>
</form>