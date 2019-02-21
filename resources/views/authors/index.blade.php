@extends('layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Список авторов</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success btn-sm my-4" href="{{ route('authors.create') }}"> Добавить нового автора</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <th>#</th>
            
            <th>ФИО</th>
            
            <th>Кол-во книг</th>

            <th>Действия</th>

        </tr>

        @foreach ($authors as $author)
        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $author->FIO }}</td>
            
            <td>{{ $author->bookscount() }}</td>

            <td>

                <form action="{{ route('authors.destroy',$author->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('authors.show',$author->id) }}">Просмотреть</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('authors.edit',$author->id) }}">Редактировать</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

 
@endsection

