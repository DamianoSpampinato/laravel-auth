@extends('layouts.admin')

@section('content')
<h1>{{$project['name']}}</h1>
<p><strong>Summary</strong>: {{$project['summary']}}</p>
<div><strong>Slug</strong>: {{$project['slug']}}</div>
<div><strong>Client Name</strong>: {{$project['client_name']}}</div>
<div><strong>Id project</strong>: {{$project['id']}}</div>

@endsection