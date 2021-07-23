<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item-page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">OLX</a>
        </div>
    </nav>

    <div class="container mx-auto">
        <h1 style="text-align: center;">All data of Item table.</h1>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID:</th>
                            <th>Pro_title:</th>
                            <th>Price:</th>
                            <th>Seller_name:</th>
                            <th>Seller_Contact:</th>
                            <th>Image_link:</th>
                            <th>Description:</th>
                            <th>Category_id:</th>
                            <th>Address:</th>
                            <th>City:</th>
                        </tr>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->pro_title}}</td>
                            <td>{{$d->price}}</td>
                            <td>{{$d->seller_name}}</td>
                            <td>{{$d->seller_contact}}</td>
                            <td>IMG:<a href="{{$d->image}}">View</a></td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->category_id}}</td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->city}}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>
