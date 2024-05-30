@extends('layouts.admin')
@section('content')
<div class="row">
<div class="col-1"><strong>id</strong></div>
    <div class="col-4"><strong>name</strong></div>
    <div class="col-3"><strong>created</strong></div>
    <div class="col"><strong>slug</strong></div>
</div>
    @foreach ($projects as $project)
    <div class="row border my-2">
        <div class="col-1">{{$project->id}}</div>
        <div class="col-4">{{$project->name}}</div>
        <div class="col-3">{{ $project->created_at }}</div>
        <div class="col">{{ $project->slug }}</div>
        <div class="col"><a href="{{route('admin.projects.show', ['project'=> $project->id])}}">view</a></div>
    </div>
    @endforeach 
    

@endsection