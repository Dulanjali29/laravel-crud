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
                    <h4> Item Details
                        <a href="{{ url('/products') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="mb-2">
                        <label>Name : {{ $products->name }} </label>
                        <p>

                        </p>
                    </div>
                    <div class="mb-3">
                        <label>Description : {{ $products->description }} </label>


                    </div>
                    <div class="mb-2">
                        <label>Price : {{ $products->price }}</label>

                    </div>
                    <div class="mb-2">
                        <label>QTY : {{ $products->qty }}</label>

                    </div>
                    <div class="mb-2">
                        <label>Available : {{ $products->is_active == true ? 'Available' : 'Not Available' }}</label>

                    </div>


                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
