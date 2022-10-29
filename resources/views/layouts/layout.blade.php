<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book Labrary</title>
    <style>
        .flex{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid w-50 text-light">
    <h4><a class="navbar text-light" href="/authors">Authors</a></h4>
    <h4><a class="navbar text-light" href="/authors/new">New Author</a></h4>
    <h4><a class="navbar text-light" href="/books">Books</a></h4>
    <h4><a class="navbar text-light" href="/books/new">New Book</a></h4>
</div>
</nav>


<div class="container">
    @yield('content')
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>