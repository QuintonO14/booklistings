@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="panel-heading text-center">Book Listings &mdash; Latest</h1>
                <form action="" class="form-inline">
                    <label for="books">Sort By:</label>
                    <select name="" id="sort" class="form-control short">
                        <option value="" selected disabled hidden>Select</option>
                        <option value="">Latest</option>
                        <option value="title">Title</option>
                        <option value="author">Author</option>
                        <option value="published">Published</option>
                    </select>
                    <a href="{{ url('/books/addbook')}}" class="btn btn-success">Add New Book</a>
                </form>
                @foreach($books as $book)
                    <div class="body">
                        <h2 class="truncated">{{$book->title}}</h2>
                        <h4><i>Written By: {{$book->author}}</i></h4>
                        <p class="main">{{$book->description}}</p>
                        <small>Published {{$book->published}}</small>
                        <a href="{{route('book.full', $book->id)}}" class="more">Read more...</a>
                        <a href="{{ route('book.delete', $book->id) }}" class="delete">Delete Book</a>
                        @if($book->cover)
                        <img src="/images/{{$book->cover}}" alt="" class="bookCover">
                        @else
                        <img src="/images/cover.jpg" alt="" class="bookCover">
                        @endif
                    </div>
                @endforeach
                <div class="text-center">{{$books->links()}}</div>
            </div>
        </div>
    </div>
@endsection

