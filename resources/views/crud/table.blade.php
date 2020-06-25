@extends('app')

@section('title-block')CRUD System @endsection

@section('content')

<div class="container">
    <div class="col-12">
        <div class="row justify-content-md-left">
            <h1>Автомобили</h1>
            <a href="{{ route('crud.create') }}"><button class="btn btn-success ml-5 mt-1">Создать</button></a>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Производитель</th>
                            <th scope="col">Модель</th>
                            <th scope="col">Год выпуска</th>
                            <th scope="col">Лошадиные силы</th>
                            <th scope="col">Коробка передач</th>
                            <th scope="col">Мощность двигателя</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <th scope="row">{{ $car->manufacturer }}</th>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year_of_issue }}</td>
                            <td>{{ $car->horsepower }}</td>
                            <td>{{ $car->transmission }}</td>
                            <td>{{ $car->engine_power }}</td>
                            <td style="width:30%;">
                                <a href="{{ route('crud.edit', $car->id) }}">
                                    <button class="btn btn-primary">Редактировать</button>
                                </a>
                                <form action="{{ route('crud.delete', $car->id) }}" method="POST" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Вы действительно хотите удалить запись?')" class="btn btn-danger ml-1">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection
