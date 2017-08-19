@extends('layouts.app')
@section('content')
    <section class="cover">
        <h1 class="text-center none"><strong>{{$book->title}}</strong><small> By {{$book->author}}</small></h1>
        <h2 class="description">Description:</h2>
        <article class="full">{{$book->description}}</article>
    </section>
    <aside>
        @if($book->cover)
            <p class="published">Published on {{$book->published}}</p>
            <img src="/images/{{$book->cover}}" class="fullCover" alt="">
        @else
            <p class="published">Published on {{$book->published}}</p>
            <img src="/images/cover.jpg" alt="" class="fullCover">
        @endif
    </aside>
@endsection