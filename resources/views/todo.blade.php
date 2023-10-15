@extends('home')

@section('title')
    Todo List
@endsection

@section('main_content')
@if($errors->any())
<div class="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <h1 class="d-flex justify-content-center align-items-center my-5">Список всех задач</h1>

    <table class="table table-stripped table-white">
        <tr>
            <th>Id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Создание</th>
            <th>Изменение</th>
            <th>Действия</th>
        </tr>

        @foreach ($todo as $el)

        <tr valign="middle">
            <td>{{$el->id}}</td>
            <td>{{$el->title}}</td>
            <td>{{$el->description}}</td>
            <td>{{$el->created_at}}</td>
            <td>{{$el->updated_at}}</td>

            <td>
                <a href="{{route("delete", $el->id)}}" class="btn btn-danger btn-sm">Удалить</a>
                <a href="{{route("show", $el->id)}}" class="btn btn-success btn-sm">Просмотреть</a>
            </td>
        </tr>

        @endforeach

    </table>

    <h2 class="m-3">Добавить задачу</h2>
    <form method="post" action="/todo/create">
        @csrf
        <input type="text" name="title" id="title" placeholder="Введите название задачи" class="form-control p-2 m-3">
        <input type="text" name="description" id="description" placeholder="Введите описание задачи" class="form-control p-4 m-3"></input>
        <button type="submit" class="btn btn-lg btn-primary gx-4 m-3">Добавить</button>
    </form>

</div>

@endsection
