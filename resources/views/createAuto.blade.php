@extends('base.base')
@section('content')


<h2 class="m-3">
    <b>Автомобили</b>
</h2>

<div class="m-3">
    <div style="width: 30%">
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
            <input id="client_id" name="client_id" value="1">
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="basic-addon1">Цвет кузова</span>
                <input type="text" class="form-control" placeholder="Цвет кузова" aria-label="Цвет кузова"
                       aria-describedby="addon-wrapping" id="color" name="color">
            </div>
            <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
                <span class="input-group-text" id="basic-addon1">Гос номер РФ</span>
                <input type="text" class="form-control" placeholder="Гос номер РФ"
                       style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" id="numberAuto" name="numberAuto">
                <input type="submit" class="btn btn-success"
                       style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px ">Сохранить
                </input>
            </div>
        </form>


    </div>



</div>





@endsection
