@extends('home')

@section('title')
    Просмотр записи Todo
@endsection

@section('main_content')
@if($todo_search)
<h2 class="m-3">Название: {{ $todo_search->title }}</h2>
<h4 class="m-3">Описание: {{ $todo_search->description }}</h4>
<p class="m-3">Создана: {{ $todo_search->created_at }}</p>
<p class="m-3">Изменена: {{ $todo_search->updated_at }}</p>
@else
<h2>Задача не существует</h2>
@endif

@endsection
