<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('base.base')
@section('content')
<div class="container">
    <h2 class="m-3">Все клиенты</h2>
            @foreach($data as $dt)
                @foreach(DB::table('autos')->where('client_id',$dt->id )->get() as $auto)
                    <div>
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>{{$dt->fullName}}</td>
                                <td>{{$auto->brand}}</td>
                                <td>{{$auto->numberAuto}}</td>
                                <td><button>Ред</button></td>
                                <td><button><b>X</b></button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @endforeach
        @endsection


</div>

</body>
</html>
