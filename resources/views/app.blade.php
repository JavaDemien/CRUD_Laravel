<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title-block')</title>
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
		@include('inc.header')

		{{-- @if(Request::is('/'))
			@include('inc.hero')
		@endif --}}

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