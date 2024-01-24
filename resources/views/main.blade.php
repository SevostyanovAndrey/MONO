@extends('base.base')
@section('content')
    <div class="container">
        <div>
            @foreach($uniqAuto as $uavto)
                {{$uavto->brand . ' - ' . $uavto->count}}
            @endforeach
        </div>


        <h2 class="m-3">Все клиенты</h2>

        @foreach($clients as $client)

            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>{{$client->fullName}}</td>
                </tr>

                <tr>
                    <td>{{$client->brand}}</td>
                    <td>{{$client->numberAuto}}</td>
                    <td>
                        <a href="{{route('view', $client->id)}}">
                            <button>Ред</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('destroyUser', $client->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><b>X</b></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

                    </tbody>
                </table>


            {{$clients->links()}}
    </div>


@endsection
