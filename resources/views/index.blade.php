<html>
	<head>
		<title>TODO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/todo.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>TODO LIST</h1>
					<p>JS AJAXING demo using a <a href="https://templated.co">TEMPLATED</a> view</p>
				</div>
			</header>

			<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
				<section id="intro" class="main">

					<ul id="myUL">
						@if( count( $todos ) )
						@foreach ($todos as $request)
							<li>{{$request->name}}</li>
						@endforeach
						@endif
					</ul>


					<div id="myDIV" class="header">
						<h4>Add an item</h4>
						<input type="text" id="myInput" placeholder="Title...">
						<span onclick="newElement()" class="addBtn">Add</span>
					</div>
				</section>

				<section id="cta" class="main special">
					<ul class="actions">
						<a href="assets/js/todo.js" class="button big">View todo.js</a>
						<a href="assets/js/main.js" class="button big">View main.js</a>
					</ul>
				</section>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="assets/js/todo.js"></script>

	</body>
</html>
