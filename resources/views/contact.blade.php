@extends('layouts.app')
@section('titleSeo')Контакты@endsection
@section('content')
    <main style="height: 100vh">
        <form style="max-width: 700px; margin: 0 auto" action="{{ route('contact-form') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Введите имя</label>
                <input class="form-control" type="text" name="name" placeholder="Введите имя" id="name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input class="form-control" type="email" name="email" placeholder="email" id="email">
            </div>
            <div class="form-group">
                <label for="subject">Коментарий</label>
                <input class="form-control" type="subject" name="subject" placeholder="Коментарий" id="subject">
            </div>
            <div class="form-group">
                <label for="subject">Сообщение</label>
                <textarea name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </main>
@endsection
