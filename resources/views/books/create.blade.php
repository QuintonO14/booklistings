@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <section class="panel panel-default">
                    <h1 class="text-center">Add New Book</h1>

                    <article class="panel-body form">
                            {!! Form::open(['method'=>'POST', 'id'=>'form', 'runat'=>'server', 'action'=>'BooksController@createBook', 'files'=>true]) !!}
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            {!! Form::label('author','Author:') !!}
                            {!! Form::text('author', null, ['class'=>'form-control']) !!}
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control','cols'=>50,'rows'=>3]) !!}
                            {!! Form::label('published', 'Published In:') !!}
                            {!! Form::date('published', null, ['class'=>'form-control']) !!}
                            {!! Form::label('cover', 'Book Cover:') !!}
                            {!! Form::file('cover', ['id'=>'imgChange','class'=>'imgInput']) !!}
                            <br>
                            {!! Form::submit('Add Book', ['class'=>'btn btn-primary form-control']) !!}
                            {!! Form::close() !!}
                    </article>
                    <aside>
                        <img src="http://via.placeholder.com/200x400" alt="Image" id="image">
                    </aside>
                </section>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
