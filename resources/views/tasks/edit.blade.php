<form action="{{route('tasks.update',$task->id)}}" method="post">
@csrf
@method('PUT')
<label for="title">Title</label>
<input type="text" name="title" value="{{$task->title}}">

<label for="completed">Status</label>
<input type="checkbox" name="completed"{{$task->completed ? 'checked': ''}} >
<button type="submit">modify</button>
</form>
