<form action="{{route('task.update',$task->id)}}" method="POST">
    @csrf
    @method('PUT')
    nom <input value="{{$task->task_name}}" type="text" name="task_name">
    date de debut<input value="{{$task->start_date}}" type="dateTime-local" name="start_date">
     date de fin<input value="{{$task->end_date}}" type="dateTime-local" name="end_date">
     date de fin<input value="{{$task->description}}" type="dateTime-local" name="description">
     <input type="hidden"  value="{{$task->brief_id}}" name="brief_id" >
    <button type="submit">update</button>
</form>
