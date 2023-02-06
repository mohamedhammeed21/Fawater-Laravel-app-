@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-block">
                <a href="/type">types</a>
            </div>
            <div class="col-4 d-block">
                <a href="/supplier">suppliers</a>
            </div>
            <div class="col-4 d-block">
                <a href="/card">cards</a>
            </div>
            <br>
            <div class="row mt-5">
                <div id="zoekbalk">
                    Search : <input id='myInput' onkeyup='searchTable()' type='text'>
                    <button onclick="CeS()">Clear input field</button><br>
                </div>
                <br>
                <div id="tabel">
                    <table id='myTable1'>

                        <th>name</th>
                        <th>price</th>
                        <th>type</th>
                        <th>supplier</th>
                        @foreach($cards as $card)
                        <tr>
                            <td>{{$card->name}}</td>
                            <td>{{$card->price}}</td>
                            <td>{{$card->type->name}}</td>
                            <td>{{$card->supplier->name}}</td>
                            <td>Green</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function CeS(){document.getElementById('myInput').value = '';searchTable();}
        function searchTable() {
            let input, filter, found, table, tr, td, i, j, tname, k;
            for(k=1;k<3;k++){
                tname="myTable"+k;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById(tname);
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td");
                    for (j = 0; j < td.length; j++) {
                        if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                        }
                    }
                    if (found) {
                        tr[i].style.display = "";
                        found = false;
                    } else {
                        if (i>0) { //this skips the headers
                            tr[i].style.display = "none";
                        }
                    }
                }}
        }
    </script>
@endsection
