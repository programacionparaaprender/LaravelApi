@extends('layouts.app')

@section('content')
<div class="container">
<h1>Lista de posts</h1>
<h1><a href="{{route('post.create')}}" class="btn btn-primary">Crear un post</a></h1>
<table class="table table-bordered">
<thead>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Autor</th>
        <th>Operaciones</th>
        <th>Operaciones2</th>
    </tr>
</thead>
<tbody>
@foreach($post as $item)
<tr>
<td>{{ $item->id  }}</td>
<td>{{ $item->titulo  }}</td>
<td>{{ $item->contenido  }}</td>
<td>{{ $item->autor->name  }}</td>
<td>
    <a href="{{route('post.edit', ['id' => $item->id])}}" class="btn btn-warning btn-sm">Editar</a>
    <form action="{{route('post.destroy', ['id' => $item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger btn-sm">Eliminar</button>
    </form>
</td>
<td>
    <a href="/LaravelApi/public/post/{{$item->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
    <a href="/LaravelApi/public/post/eliminar/{{$item->id}}" class="btn btn-danger btn-sm">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

@endsection
