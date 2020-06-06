@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Пользователь - Антон Сергеев</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Данные пользователя
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2020-05-07" value="Антон Сергеев">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2020-05-07" value="	123anton@mail.loc">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Новый пароль</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"
                               placeholder="Новый пароль или оставить пустым" value="12345678">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Блоировка</label>
                        <input type="checkbox" checked id="exampleFormControlInput1"
                               placeholder="Новый пароль или оставить пустым">
                        <p class="alert-danger">Дата блокировки: 2020-06-05 04:05:24</p>
                    </div>


                    <div class="card-tools text-md-right">
                        <button type="button" class="btn btn-outline-success ">Сохранить пользователя</button>
                        {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Роли пользователя
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form>
                    <div class="flex flex-wrap justify-start mb-4">
                        <label class="inline-flex items-center mr-6 my-2 text-sm " style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="1">
                            <span class="ml-2 ">
                Администратор
              </span>
                        </label>
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="2">
                            <span class="ml-2 ">
                Сотрудник склада
              </span>
                        </label>
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="5">
                            <span class="ml-2 ">
                Сотрудник отдела QA
              </span>
                        </label>
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="4">
                            <span class="ml-2 ">
                Разработчик
              </span>
                        </label>
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="6">
                            <span class="ml-2 ">
                Проект-менеджер
              </span>
                        </label>
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input type="checkbox" class="form-checkbox h-4 w-4" name="roles[]" value="3">
                            <span class="ml-2 ">
                Сотрудник колл-центра
              </span>
                        </label>
                    </div>
                    <div class="card-tools text-md-right">
                        <button type="button" class="btn btn-outline-success ">Сохранить права пользователя</button>
                        {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
