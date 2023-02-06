@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-block">
                <form action="{{route('supplier.store')}}" method="post">
                    @csrf
                    <label for="name">name</label>
                    <input id="name" type="text" name="name">
                    <br>
                    <label for="address">address</label>
                    <input id="address" type="text" name="address">
                    <label for="phone">phone</label>
                    <input id="phone" type="text" name="phone">
                    <br>
                    <input type="submit">
                </form>
            </div>

        </div>
    </div>
@endsection
