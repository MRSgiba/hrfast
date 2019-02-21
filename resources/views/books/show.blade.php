@extends('layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Список авторов</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('books.index') }}"> Назад</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Название:</strong>

                {{ $book->name }}

            </div>

            <div class="form-group">

                <strong>Цена:</strong>

                {{ $book->price }}

            </div>

            <div class="form-group">

                <strong>Автор:</strong>

                {{ $book->author->FIO }}

            </div>            

        </div>

    </div>

@endsection

