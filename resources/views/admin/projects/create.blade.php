@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="my-2">
            <input class="w-25" type="text" placeholder="inserisci name" name="name">
        </div>
        <div class="my-2">
            <input class="w-25" type="text" placeholder="inserisci client name" name="client_name">
        </div>
        <div class="my-2">
            <input class="w-25" type="textarea" placeholder="inserisci summary" name="summary">
        </div>
        <button class="btn btn-primary" type="submit">salva</button>
    </form>
@endsection