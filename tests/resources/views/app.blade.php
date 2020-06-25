<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title-block')</title>
		<link rel="stylesheet" href="http://dev.javademien.com/public/css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
		@include('inc.header')

		<div class="container col-12 mt-5">

			@include('inc.messages')

			<div class="row">
					@yield('content')
				</div>
			</div>
		</div>
			@include('inc.footer')
    </body>
</html>