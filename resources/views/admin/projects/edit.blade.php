@extends('layouts.admin')
@section('content')
        <form action="{{route('admin.projects.update', ['project' => $project->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="my-2">
                <input class="w-25" type="text" placeholder="inserisci name" name="name" value="{{$project->name}}">
            </div>
            <div class="my-2">
                <input class="w-25" type="text" placeholder="inserisci client name" name="client_name "value="{{$project->client_name}}">
            </div>
            <div class="my-2">
                <input class="w-25" type="textarea" placeholder="inserisci summary" name="summary" value="{{$project->summary}}">
            </div>
            <button class="btn btn-primary" type="submit">salva</button>
        </form>
    
@endsection