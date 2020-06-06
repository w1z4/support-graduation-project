
          
                @extends('adminlte::page')
                @section('title','Агенство недвижимости "Курс"')
                @section('content_header')
                    <h1>Dashboard</h1>
                @stop

                <div class="links">
                    <a href="{{route('clients')}}">Клиенты</a>
                    <a href="{{route('realtors')}}">Сотрудники</a>
                    <a href="{{route('real_estate')}}">Недвижимость</a>
                    <a href="{{route('rent')}}">Аренда</a>
                    <a href="{{route('buy')}}">Покупка</a>
                    <a href="{{route('sale')}}">Продажа</a>
                </div>
