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

            @if (session('status'))
                <div class ="alert alert-success">{{ session('status') }}</div>
                @endsession


                <div class="card">
                    <div class="card-header">
                        <h4> Update Item
                            <a href="{{ url('/products') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ '/products/' . $products->id . '/edit' }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $products->name }}" />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="{{ $products->description }}" />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control"
                                    value="{{ $products->price }}" />
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>QTY</label>
                                <input type="number" name="qty" class="form-control"
                                    value="{{ $products->qty }}" />
                                @error('qty')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>Available</label>
                                <input type="checkbox" name="is_active"
                                    {{ $products->is_active == true ? 'checked' : '' }} />
                                @error('is_active')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">

                                <button type="submit" class="btn btn-primary">Update</button>
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
