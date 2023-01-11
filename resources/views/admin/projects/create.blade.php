@extends('layouts.app')
@section('content')

<h2>add project</h2>
<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="progetto 1">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

    </div>
    <div class="mb-3">
        <label for="difficulty" class="form-label">difficulty</label>
        <input type="text" class="form-control" name="difficulty" id="difficulty" aria-describedby="helpId" placeholder="project's difficulty ">
    </div>
    <div class="mb-3">
        <label for="language" class="form-label">language</label>
        <input type="text" class="form-control" name="language" id="language" aria-describedby="helpId" placeholder="project's language">
    </div>

    <button type="submit">add new project</button>
</form>
@endsection