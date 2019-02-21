@extends('layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Список книг</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success btn-sm my-4" href="{{ route('books.create') }}"> Добавить новую книгу</a>

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
            
            <th>Название книги</th>
            
            <th>Цена</th>
            
            <th>Автор</th>            

            <th>Действия</th>

        </tr>

        @foreach ($books as $book)
        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $book->name }}</td>

            <td>{{ $book->price }}</td>            
            
            <td>{{ $book->author->FIO }}</td>

            <td>

                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('books.show',$book->id) }}">Просмотреть</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('books.edit',$book->id) }}">Редактировать</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

 
@endsection

