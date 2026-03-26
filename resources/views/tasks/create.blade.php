<form action="{{route('tasks.store')}}" method="post">
@csrf

<label for="title">Title</label>
<input type="text" name="title">

<label for="completed">Status</label>
<input type="checkbox" name="completed" checked >
<button type="submit">Ajouter Tache</button>
</form>
