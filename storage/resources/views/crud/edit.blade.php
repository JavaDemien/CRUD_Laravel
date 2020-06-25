@extends('app')

@section('content')

<div class="container">
	<div class="row justify-content-md-left">
		<h1>Редактирование записи # - {{ $car->id }}</h1>
	</div>
	<div class="row">
		<div class="col-md-12">

			<form action="{{ route('crud.update', $car->id) }}" method="POST">

				@csrf

				<div class="form-group">
					<label for="name">Производитель</label>
					<input id="name" class="form-control"  type="text" name="manufacturer" value="{{ $car->manufacturer }}" placeholder="Производитель">
				</div>

				<div class="form-group">
					<label for="model">Модель</label>
					<input id="model" class="form-control"  type="text" name="model" value="{{ $car->model }}" placeholder="Модель">
				</div>

				<div class="form-group">
					<label for="year-of-issue">Год выпуска</label>
					<input id="year-of-issue" class="form-control"  type="year" name="year_of_issue" value="{{ $car->year_of_issue }}" placeholder="Год выпуска">
				</div>

				<div class="form-group">
					<label for="horsepower">Лошадиные силы</label>
					<input id="horsepower" class="form-control"  type="text" name="horsepower" value="{{ $car->horsepower }}" placeholder="Лошадиные силы">
				</div>

				<div class="form-group">
					<label for="transmission">Коробка передач</label>
					<input id="transmission" class="form-control"  type="text" name="transmission" value="{{ $car->transmission }}" placeholder="Коробка передач">
				</div>

				<div class="form-group">
					<label for="engine-power">Мощность двигателя</label>
					<input id="engine-power" class="form-control"  type="text" name="engine_power" value="{{ $car->engine_power }}" placeholder="Мощность двигателя">
				</div>


				<button class="btn btn-success" type="submit">Обновить</button>

			</form>

		</div>
	</div>
</div>

@endsection