<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('home') }}">CoelhoChocolate</a>
			<a class="nav-link active text-light" href="{{ route('produtos.index') }}">Produtos</a>
			<a class="nav-link active text-light" href="{{ route('fornecedores.index') }}">Fornecedores</a>
			<p class="text-light">Dando sabor a melhor data do ano!</p>
		</div>
	</nav>

	<main class="container">
		<div class="m-5">
			@yield('content')
		</div>
	</main>

	<div class="container">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<p>Empresárias:</p>
			<p>Agda Beatriz Jedliczka Domingues - 60000631</p>
			<p>Letícia Masquietto de Oliveira Silva - 60300765</p>
		</footer>
	</div>

</body>
</html>