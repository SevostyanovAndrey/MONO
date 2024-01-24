@extends('base.base')
@section('content')
    <div class="m-3">
        <div style="width: 30%">
            <h2>
                <b>Клиент</b>
            </h2>
            <form action="{{route('updateClient', $data->id)}}" method="post">
                @csrf
                @method("PATCH")

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">ФИО</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя"
                           aria-describedby="addon-wrapping" id="fullName" name="fullName"  value="{{$data->fullName}}">
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Пол</span>
                    <select class="form-select" id="gender" name="gender">
                        @if(($data->gender) == "Мужской" )
                            <option selected value="{{$data->gender}}">{{$data->gender}}</option>
                            <option value="Женский">Женский</option>
                        @else
                            <option selected value="{{$data->gender}}">{{$data->gender}}</option>
                            <option value="Мужской">Мужской</option>
                        @endif
                    </select>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Номер телефона</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя"
                           aria-describedby="addon-wrapping" id="phone" name="phone" value="{{$data->phone}}">
                </div>
                <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
                    <span class="input-group-text" id="basic-addon1">Адрес</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя"
                           style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" id="address" name="address" value="{{$data->address}}">
                    <button type="submit" class="btn btn-success"
                            style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px ">Сохранить
                    </button>
                </div>
            </form>

        </div>

    </div>
    {{--     форма создания автомобиля начало --}}
    <div style="width: 30%">
        <h2>
            <b>Добавление Автомобиля</b>
        </h2>
        <form action="{{route('storeAutos')}}" method="post">
            @csrf
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Марка</span>
                <input type="text" class="form-control" placeholder="Марка" aria-label="Марка"
                       aria-describedby="addon-wrapping" id="brand" name="brand">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Модель</span>
                <input type="text" class="form-control" placeholder="Модель" aria-label="Модель"
                       aria-describedby="addon-wrapping" id="model" name="model">
            </div>
            <input type="hidden" id="client_id" name="client_id" value="{{$data->id}}" style="display: none;">
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Цвет кузова</span>
                <input type="text" class="form-control" placeholder="Цвет кузова" aria-label="Цвет кузова"
                       aria-describedby="addon-wrapping" id="color" name="color">
            </div>
            <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
                <span class="input-group-text" id="basic-addon1">Гос номер РФ</span>
                <input type="text" class="form-control" placeholder="Гос номер РФ"
                       style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" id="numberAuto"
                       name="numberAuto">
                <input type="submit" class="btn btn-success"
                       style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px ">
                </input>
            </div>
        </form>
    </div>
    {{--     форма создания автомобиля конец --}}
    <br>
    <h2 class="m-3">
        <b>Автомобили</b>
    </h2>
    @foreach($dataAuto as $auto)
        <div class="m-3">
            <div style="width: 30%">
                <form action="{{route('updateAuto', $auto->client_id)}}" method="post">
                    @csrf
                    @method("PATCH")
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="basic-addon1">Марка</span>
                        <input type="text" class="form-control" placeholder="Марка" aria-label="Марка"
                               aria-describedby="addon-wrapping" id="brand" name="brand" value="{{$auto->brand}}">
                    </div>
                    <input type="hidden" id="client_id" name="client_id" value="{{$auto->client_id}}" style="display: none;">
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="basic-addon1">Модель</span>
                        <input type="text" class="form-control" placeholder="Модель" aria-label="Модель"
                               aria-describedby="addon-wrapping" id="model" name="model" value="{{$auto->model}}">
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="basic-addon1">Цвет кузова</span>
                        <input type="text" class="form-control" placeholder="Цвет кузова" aria-label="Цвет кузова"
                               aria-describedby="addon-wrapping" id="color" name="color" value="{{$auto->color}}">
                    </div>


            <div class="input-group flex-nowrap " style="width: 37.2%">
                <span class="input-group-text" id="basic-addon1">Гос номер РФ</span>
                <input type="text" class="form-control" placeholder="Гос номер РФ"
                       style="border-bottom-right-radius: 7px; border-top-right-radius: 7px"
                       id="numberAuto" name="numberAuto" value="{{$auto->numberAuto}}">


            </div>
                    <input type="submit" class="btn btn-success"
                           style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px" value="сохранить">
                </form>
                <form class="" action="{{route("destroyAuto", $auto->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>

        </div>
            <hr class="mb-5 mt-5" style="width: 30%; border-bottom: 2px solid black">
    @endforeach

@endsection
