@extends('layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Добавить нового автора</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('authors.index') }}"> Назад</a>

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

   

<form action="{{ route('authors.store') }}" method="POST">

    @csrf

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ФИО:</strong>

                <input type="text" name="FIO" class="form-control" placeholder="ФИО">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Сохранить</button>

        </div>

    </div>

</form>

@endsection

