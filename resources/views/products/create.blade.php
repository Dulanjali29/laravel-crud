<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inventory Management System</title>
</head>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Item Add
                        <a href="{{ url('/products') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ 'products/create'}}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
                        </div>
                        <div class="mb-2">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="{{ old('description') }}"/>
                        </div>
                        <div class="mb-2">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ old('price') }}"/>
                        </div>
                        <div class="mb-2">
                            <label>QTY</label>
                            <input type="number" name="qty" class="form-control" value="{{ old('qty') }}"/>
                        </div>
                        <div class="mb-2">
                            <label>IsActive</label>
                            <input type="checkbox" name="is_active" {{ old('is_active')==true ? checked:''}}/>
                        </div>
                        <div class="mb-2">

                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
