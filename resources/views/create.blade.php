@extends('base.base')
@section('content')
        <div style="width: 30%">
            <h2>
                <b>Клиент</b>
            </h2>

            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">ФИО</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя" id="fullName" name="fullName"
                           aria-describedby="addon-wrapping" value="{{old('fullName')}}">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Пол</span>
                    <select class="form-select" id="gender" name="gender" >
                        <option selected>Откройте это меню выбора</option>
                        <option value="Мужской">Мужской</option>
                        <option value="Женский">Женский</option>

                    </select>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Номер телефона</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя"
                           aria-describedby="addon-wrapping" id="phone" name="phone">
                </div>


                <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
                    <span class="input-group-text" id="basic-addon1">Адрес</span>
                    <input type="text" class="form-control" placeholder="Имя пользователя"
                           style="border-bottom-right-radius: 7px; border-top-right-radius: 7px"  id="address"
                           name="address" >
                    <input type="submit" class="btn btn-success"
                           style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px "
                           value="Сохранить и продолжить">
                </div>
            </form>

@endsection

