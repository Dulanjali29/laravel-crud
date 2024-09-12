<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inventory Management System</title>
</head>
<body>
<div class="container mt-5">
<div class="col-md-12">
 <div class="card">
    <div class="card-header">
        <h4> Item Manage
            <a href="{{ url('/products/create')}}" class="btn btn-primary float-end">Add Item</a>
        </h4>
    </div>
    <div class="card-body">
<table class="table table-borderd ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>QTY</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description}}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->qty }}</td>
            <td>
                @if($item->is_active)
                Available
                @else
                Not Available
                @endif
            </td>
            <td>
                <a href="{{ url('products/'.$item->id.'/edit') }} "class="btn btn-success mx-2">Edit</a>
                <a href=""class="btn btn-danger mx-2">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
    </div>
 </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

