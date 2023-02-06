@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-block">
                <form action="{{route('card.store')}}" method="post">
                    @csrf
                    <label for="name">name</label>
                    <input id="name" type="text" name="name">
                    <br>
                    <label for="price">price</label>
                    <input id="price" type="text" name="price">
                    <br>
                    <label for="">type</label>
                    <select name="supplier_id">
                        @foreach($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="" >$types</label>
                    <select name="type_id">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit">
                </form>
            </div>

        </div>
    </div>
@endsection
