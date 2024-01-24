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
                @foreach(DB::table('autos')->where('client_id',$dt->id )->paginate(5) as $auto)
                    <div>
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                    <td>{{$dt->fullName}}</td>
                                    <td>{{$auto->brand}}</td>
                                    <td>
                                        {{$auto->numberAuto}}
                                    </td>
                                    <td> <a href="{{route('view', $dt->id)}}"><button>Ред</button></a></td>
                                <form action="{{route('destroyUser', $dt->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit"><b>X</b></button></td>
                                </form>

                            </tr>
                            </tbody>
                        </table>


                    </div>
                @endforeach
            @endforeach
    {{$dt->links()}}
        @endsection


</div>

</body>
</html>
