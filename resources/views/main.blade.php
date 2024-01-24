@extends('base.base')
@section('content')
    <div style="width: 95%; margin-left: auto; margin-right: auto">
        <div class="mb-3">
            <div class="collapse" id="collapseExample" style="width: 20%">
                <div class="card card-body ">
                    @foreach($uniqAuto as $uavto)
                        <table class="table">
                            <td style="width: 70%"><small>{{$uavto->brand}}</small></td>
                            <td><small>{{$uavto->count}}</small></td>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
        <h3 class="mb-4 txtCustom">Все клиенты</h3>
        @foreach($clients as $client)
            <table class="table table-hover">
                <tbody style="text-align: left">
                <tr>
                    <td style="width: 30%">{{$client->fullName}}</td>
                    <td style="width: 30%">{{$client->brand}}</td>
                    <td style="width: 30%">{{$client->numberAuto}}</td>
                    <td>
                        <a class="" href="{{route('view', $client->id)}}">
                            <button class="txtBorderSubmit">&#9998;</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('destroyUser', $client->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="txtBorderDanger" type="submit"><b>&#10008;</b></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        @endforeach
        {{$clients->links()}}
    </div>
@endsection
