@extends('base.base')
@section('content')
    <div style="width: 95%; margin-left: auto; margin-right: auto"">
    <div>
        <div style="width: 30%">
            <h2>
                <b>Клиент</b>
            </h2>
            <form action="{{route('updateClient', $data->id)}}" method="post">
                @csrf
                @method("PATCH")
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off" id="fullName" name="fullName"
                           value="{{$data->fullName}}">
                    <label for="name">ФИО</label>
                </div>
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off" id="phone" name="phone" value="{{$data->phone}}">
                    <label for="name">Номер телефона</label>
                </div>
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off" id="address"
                           name="address" value="{{$data->address}}">
                    <label for="name">Адрес</label>
                </div>
                <div class="inputGroup">
                    <select class="form-select " id="gender" name="gender" style="border: 2px solid black">
                        @if(($data->gender) == "Мужской" )
                            <option selected value="{{$data->gender}}">{{$data->gender}}</option>
                            <option value="Женский">Женский</option>
                        @else
                            <option selected value="{{$data->gender}}">{{$data->gender}}</option>
                            <option value="Мужской">Мужской</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btnSubmitCustom mb-5">
                    Обновить
                </button>
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
            <div class="inputGroup">
                <input type="text" required="" autocomplete="off" id="brand" name="brand">
                <label for="name">Марка</label>
            </div>
            <div class="inputGroup">
                <input type="text" required="" autocomplete="off" id="model" name="model">
                <label for="name">Модель</label>
            </div>
            <div class="inputGroup">
                <input type="text" required="" autocomplete="off" id="color" name="color">
                <label for="name">Цвет</label>
            </div>
            <div class="inputGroup">
                <input type="text" required="" autocomplete="off" id="numberAuto" name="numberAuto">
                <label for="name">Гос Номер РФ</label>
            </div>
            <div class="">
                <h6 class="m-2"> Автомобиль на стоянке ?</h6>
                <label class="switch">
                    <input class=" form-control form-check-input" type="checkbox" role="switch" name="enable">
                    <span class="slider"></span>
                </label>
            </div>
            <button type="submit" class="btnSubmitCustom mb-5">
                Добавить!
            </button>
            <input type="hidden" id="client_id" name="client_id" value="{{$data->id}}" style="display: none;">
        </form>
    </div>

    <h2>
        <b>Автомобили</b>
    </h2>
    @foreach($dataAuto as $auto)
        <div class="">
            <div style="width: 30%">
                <form action="{{route('updateAuto', $auto->client_id)}}" method="post">
                    @csrf
                    @method("PATCH")
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" id="brand" name="brand" value="{{$auto->brand}}">
                        <label for="name">Марка</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" id="model" name="model" value="{{$auto->model}}">
                        <label for="name">Модель</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" id="color" name="color" value="{{$auto->color}}">
                        <label for="name">Цвет</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" id="numberAuto" name="numberAuto" value="{{$auto->numberAuto}}">
                        <label for="name">Гос Номер РФ</label>
                    </div>

                    <input type="hidden" id="client_id" name="client_id" value="{{$auto->client_id}}"
                           style="display: none;">
                    <div >
                        <h6 class="m-2"> Автомобиль на стоянке ?</h6>
                        @if($auto->status == 1)
                        <label class="switch">
                            <input class=" form-control form-check-input" type="checkbox" role="switch" name="enable" checked>
                            <span class="slider"></span>
                        </label>
                        @else
                            <label class="switch">
                                <input class=" form-control form-check-input" type="checkbox" role="switch" name="enable">
                                <span class="slider"></span>
                            </label>
                        @endif
                    </div>
                    <button type="submit" class="btnSubmitCustom">
                        Обновить!
                    </button>

                </form>
                <br>
                <form class="" action="{{route("destroyAuto", $auto->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btnSubmitDelete">
                        Удалить!
                    </button>
                </form>

            </div>
            <hr class="mb-5 mt-5" style="width: 30%; border-bottom: 2px solid black">
        </div>
    @endforeach

@endsection
