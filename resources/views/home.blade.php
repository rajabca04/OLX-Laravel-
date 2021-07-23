<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">OLX</a>
            <div class="navbar-nav">
                <a href="/item" class="nav-link">Itam Table</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <h1 style="text-align: center;">All data of Category table.</h1>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID:</th>
                            <th>Title:</th>
                            <th>Parent_id:</th>
                        </tr>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->title}}</td>
                            <td>{{$d->parent_id}}</td>
                        </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
