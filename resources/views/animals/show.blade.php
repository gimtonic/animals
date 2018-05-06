@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('user.index')}}" class="btn btn-primary">Назад</a>
        <hr>
        <ul>
            <li>Animal: {{$animal->name_animal or ''}}</li>
            <li>User name: {{$animal->user->name or ''}}</li>
            <li>User email: {{$animal->user->email or ''}}</li>
        </ul>
    </div>
@endsection