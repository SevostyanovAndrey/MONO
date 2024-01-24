@extends('base.base')
@section('content')
        <div style="width: 95%; margin-left: auto; margin-right: auto"">
            <h2>
                <b>Клиент</b>
            </h2>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off" id="fullName" name="fullName" value="{{old('fullName')}}">
                    <label for="name">ФИО</label>
                </div>
                <div class="inputGroup">
                    <select class="form-select " id="gender" name="gender" style="border: 2px solid black">
                        <option selected>Откройте это меню выбора</option>
                        <option value="Мужской">Мужской</option>
                        <option value="Женский">Женский</option>
                    </select>
                </div>
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off" id="phone" name="phone" value="{{old('phone')}}">
                    <label for="name">Номер телефона</label>
                </div>
                <div class="inputGroup">
                    <input type="text" required="" autocomplete="off"  id="address" name="address" value="{{old('address')}}">
                    <label for="name">Адрес</label>
                </div>
                <button type="submit" class="btnSubmitCustom mb-5">
                    Сохранить и продолжить
                </button>
            </form>
@endsection

