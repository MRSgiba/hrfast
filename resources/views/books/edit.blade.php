@extends('layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Изменить данные о книге</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('books.index') }}"> Назад</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Извините!</strong> При вводе данных произошли ошибки.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('books.update',$book->id) }}" method="POST">

        @csrf

        @method('PUT')

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Название</strong>

                    <input type="text" name="name" class="form-control" placeholder="Название" value="{{$book->name}}">

                </div>

                <div class="form-group">

                    <strong>Цена</strong>

                    <input type="number" name="price" class="form-control" placeholder="Цена" value="{{$book->price}}">

                </div>

                <div class="form-group">

                    <strong>Автор</strong>

                    <select name="author_id" class="form-control" placeholder="автор">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" @if($book->author->id==$author->id) selected @endif>{{ $author->FIO }}</option>
                        @endforeach
                    </select>

                </div>            

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>

        </div>

   

    </form>

@endsection

