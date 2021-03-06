<!DOCTYPE html>
<html>
@include('partials.htmlheader')
<body>
	<div class="wrapper">

		@include('partials.mainheader')

		@include('partials.sidebar')

		<div class="content-wrapper">

            <section class="content-header">
                @include('partials.contentheader')
            </section>

			<section class="content">
				@yield('content')
			</section>

		</div>

	</div>

    @include('partials.scripts')

</body>
</html>