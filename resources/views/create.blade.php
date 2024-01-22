@extends('base.base')
@section('content')
    <div class="m-3">
        <div style="width: 30%">
            <h2>
               <b>Клиент</b>
            </h2>

            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">ФИО</span>
                <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя"
                       aria-describedby="addon-wrapping" >
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Пол</span>
                <select class="form-select">
                    <option selected>Откройте это меню выбора</option>
                    <option value="1">Мужской</option>
                    <option value="2">Женский</option>

                </select>
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Номер телефона</span>
                <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя"
                       aria-describedby="addon-wrapping" value="">
            </div>

        </div>
        <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
            <span class="input-group-text" id="basic-addon1">Адрес</span>
            <input type="text" class="form-control" placeholder="Имя пользователя"
                   style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" value="">
            <input type="submit" class="btn btn-success" style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px " value="Сохранить">
        </div>
    </div>
    <br>
    <h2 class="m-3">
        <b>Автомобили</b>
    </h2>

    <div class="m-3">
        <div style="width: 30%">

            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Марка</span>
                <input type="text" class="form-control" placeholder="Марка" aria-label="Марка"
                       aria-describedby="addon-wrapping" >
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Модель</span>
                <input type="text" class="form-control" placeholder="Модель" aria-label="Модель"
                       aria-describedby="addon-wrapping" >
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Цвет кузова</span>
                <input type="text" class="form-control" placeholder="Цвет кузова" aria-label="Цвет кузова"
                       aria-describedby="addon-wrapping" >
            </div>

        </div>
        <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
            <span class="input-group-text" id="basic-addon1">Гос номер РФ</span>
            <input type="text" class="form-control" placeholder="Гос номер РФ"
                   style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" >
            <button type="button" class="btn btn-success" style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px ">Сохранить</button>
        </div>
        <hr class="mb-5 mt-5" style="width: 30%; border-bottom: 2px solid black">
    </div>

@endsection
