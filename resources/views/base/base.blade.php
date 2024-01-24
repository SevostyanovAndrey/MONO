<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand btnCustom" href="{{route('main')}}"> <h3><b>Главная страница</b></h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                        <button class="btn nav-link active btnCustom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Статистика автомобилей
                        </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link active btnCustom" aria-current="page" href="{{route("create")}}">Создание клиента</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="loader">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>

@yield('content')

</body>
<style>
    .btnCustom {
        font-size: 18px;
        color: #000000;
        font-family: inherit;
        font-weight: 800;
        cursor: pointer;
        position: relative;
        border: none;
        background: none;
        text-transform: uppercase;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;
    }

    .btnCustom:focus,
    .btnCustom:hover {
        color: #000000;
    }

    .btnCustom:focus:after,
    .btnCustom:hover:after {
        width: 100%;
        left: 0%;
    }

    .btnCustom:after {
        content: "";
        pointer-events: none;
        bottom: -2px;
        left: 50%;
        position: absolute;
        width: 0%;
        height: 2px;
        background-color: #000000;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: width, left;
    }
    .txtCustom {
        color: #000000;
        font-family: inherit;
        font-weight: 800;
        position: relative;
        border: none;
        background: none;
        text-transform: uppercase;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;
    }
    .txtBorderSubmit {
        position: relative;
        padding: 5px 10px;
        border-radius: 7px;
        border: 1px solid rgba(249, 255, 61, 0.16);
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 2px;
        background: transparent;
        color: #fff;
        overflow: hidden;
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    .txtBorderSubmit:hover {
        background: rgba(74, 255, 61, 0.43);
        box-shadow: 0 0 30px 5px rgba(8, 236, 0, 0.81);
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    .txtBorderSubmit::before {
        content: '';
        display: block;
        width: 0px;
        height: 86%;
        position: absolute;
        top: 7%;
        left: 0%;
        opacity: 0;
        background: #fff;
        box-shadow: 0 0 50px 30px #fff;
        -webkit-transform: skewX(-20deg);
        -moz-transform: skewX(-20deg);
        -ms-transform: skewX(-20deg);
        -o-transform: skewX(-20deg);
        transform: skewX(-20deg);
    }

    .txtBorderDanger {
        position: relative;
        padding: 5px 10px;
        border-radius: 7px;
        border: 1px solid rgba(249, 255, 61, 0.16);
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 2px;
        background: transparent;
        color: #000000;
        overflow: hidden;
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    .txtBorderDanger:hover {
        background: rgba(255, 61, 61, 0.59);
        box-shadow: 0 0 30px 5px rgba(236, 28, 0, 0.81);
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    .txtBorderDanger::before {
        content: '';
        display: block;
        width: 0px;
        height: 86%;
        position: absolute;
        top: 7%;
        left: 0%;
        opacity: 0;
        background: #fff;
        box-shadow: 0 0 50px 30px #fff;
        -webkit-transform: skewX(-20deg);
        -moz-transform: skewX(-20deg);
        -ms-transform: skewX(-20deg);
        -o-transform: skewX(-20deg);
        transform: skewX(-20deg);
    }
    .inputGroup {
        font-family: 'Segoe UI', sans-serif;
        margin: 1em 0 1em 0;
        max-width: 400px;
        position: relative;
    }

    .inputGroup input {
        font-size: 100%;
        padding: 0.8em;
        outline: none;
        border: 2px solid rgb(200, 200, 200);
        background-color: transparent;
        border-radius: 5px;
        width: 100%;
    }

    .inputGroup label {
        font-size: 100%;
        position: absolute;
        left: 0;
        padding: 0.8em;
        margin-left: 0.5em;
        pointer-events: none;
        transition: all 0.3s ease;
        color: rgb(100, 100, 100);
    }

    .inputGroup :is(input:focus, input:valid)~label {
        transform: translateY(-50%) scale(.9);
        margin: 0em;
        margin-left: 1.3em;
        padding: 0.4em;
        background-color: #ffffff;
    }

    .inputGroup :is(input:focus, input:valid) {
        border-color: rgb(0, 0, 0);
    }
    .btnSubmitCustom {

        font-family: inherit;
        display: inline-block;
        width: 8em;
        height: 2.6em;
        line-height: 2.5em;
        position: relative;
        overflow: hidden;
        border: 2px solid black;
        transition: color .5s;
        z-index: 1;
        font-size: 17px;
        border-radius: 6px;
        font-weight: 500;
        color: black;
    }

    .btnSubmitCustom:before {
        content: "";
        position: absolute;
        z-index: -1;
        background: #4b9f45;
        height: 150px;
        width: 200px;
        border-radius: 50%;
    }

    .btnSubmitCustom:hover {
        color: #fff;
    }

    .btnSubmitCustom:before {
        top: 100%;
        left: 100%;
        transition: all .7s;
    }

    .btnSubmitCustom:hover:before {
        top: -30px;
        left: -30px;
    }

    .btnSubmitCustom:active:before {
        background: #013804;
        transition: background 0s;
    }
    .switch {
        --secondary-container: #3c8c36;
        --primary: #84da89;
        font-size: 17px;
        position: relative;
        display: inline-block;
        width: 3.7em;
        height: 1.8em;
    }

    .switch input {
        display: none;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #313033;
        transition: .2s;
        border-radius: 30px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 1.4em;
        width: 1.4em;
        border-radius: 20px;
        left: 0.2em;
        bottom: 0.2em;
        background-color: #aeaaae;
        transition: .4s;
    }

    input:checked + .slider::before {
        background-color: var(--primary);
    }

    input:checked + .slider {
        background-color: var(--secondary-container);
    }

    input:focus + .slider {
        box-shadow: 0 0 1px var(--secondary-container);
    }

    input:checked + .slider:before {
        transform: translateX(1.9em);
    }
    .btnSubmitDelete {

        font-family: inherit;
        display: inline-block;
        width: 8em;
        height: 2.6em;
        line-height: 2.5em;
        position: relative;
        overflow: hidden;
        border: 2px solid black;
        transition: color .5s;
        z-index: 1;
        font-size: 17px;
        border-radius: 6px;
        font-weight: 500;
        color: black;
    }

    .btnSubmitDelete:before {
        content: "";
        position: absolute;
        z-index: -1;
        background: #8d0808;
        height: 150px;
        width: 200px;
        border-radius: 50%;
    }

    .btnSubmitDelete:hover {
        color: #fff;
    }

    .btnSubmitDelete:before {
        top: 100%;
        left: 100%;
        transition: all .7s;
    }

    .btnSubmitDelete:hover:before {
        top: -30px;
        left: -30px;
    }

    .btnSubmitDelete:active:before {
        background: #380101;
        transition: background 0s;
    }
</style>
</html>
