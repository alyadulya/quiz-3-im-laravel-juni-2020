@include('layouts.header')

@include('layouts.sidebar')

@include('layouts.topbar')

@yield('content')

	{{--
		Heading Content Example 
		<h1 class="h3 mb-4 text-gray-800">Content Page</h1>
	--}}

@include('layouts.footer')