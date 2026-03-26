<Table border="1">
    <a href="{{route('tasks.create')}}">Ajouter</a>
<thead>
    <tr>
        <th>Title</th>

        <th>Completed</th>
    <th>actions</th>
    </tr>

</thead>

<tbody>
    @foreach($tasks as $task)
    <tr>
        <td>{{$task->title}}</td>
        <td>{{$task->completed ? 'completed':'not complete'}}</td>
    <td>
        <a href="{{route('tasks.edit',$task->id)}}">Modfiier</a>
   <form action="{{route('tasks.destroy',$task->id)}}" method="post">
   @csrf
   @method('DELETE')
   <button type="submit"  >Delete</button>
   </form>

    </td>
    </tr>
    @endforeach
</tbody>
</Table>
