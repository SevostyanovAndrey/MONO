@extends('base.base')
@section('content')
    <div class="container">
        <div class="mb-5">
            <button class="btn btn-primary " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <b>Статистика автомобилей</b>
            </button>
            <div class="collapse" id="collapseExample" style="width: 20%">
                <div class="card card-body ">
                    @foreach($uniqAuto as $uavto)
                        <table class="table">
                            <td style="width: 70%"> <small>{{$uavto->brand}}</small></td>
                            <td> <small>{{$uavto->count}}</small></td>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
        <h2 class="mb-4">Все клиенты</h2>
        @foreach($clients as $client)

            <table class="table table-striped">
                <tbody style="text-align: left">
                <tr>
                    <td style="width: 30%">{{$client->fullName}}</td>
                    <td style="width: 30%" >{{$client->brand}}</td>
                    <td style="width: 30%">{{$client->numberAuto}}</td>
                    <td>
                        <a href="{{route('view', $client->id)}}">
                            <button>&#9998;</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('destroyUser', $client->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><b>&#10008;</b></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
                @endforeach
            {{$clients->links()}}
    </div>


@endsection
