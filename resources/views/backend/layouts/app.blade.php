@include('backend.layouts.includes.header')

	<div class="wrapper">
		@include('backend.layouts.includes.nav')

            @include('backend.layouts.includes.aside')

			<div class="main-panel">
                @yield('main-content')

@include('backend.layouts.includes.footer')
