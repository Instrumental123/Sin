@extends('welcome')

@section('content')
<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<textarea name="content" rows="3"></textarea
@stop