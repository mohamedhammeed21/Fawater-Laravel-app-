@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-block">
                <form action="{{route('type.store')}}" method="post">
                    @csrf
                    <label for="name">name</label>
                    <input id="name" type="text" name="name">
                    <br>
                    <label for="description">description</label>
                    <input id="description" type="text" name="description">
                    <input type="submit">
                </form>
            </div>

        </div>
    </div>
@endsection
