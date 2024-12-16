<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    @section('content')


    <link rel="stylesheet" href="csss/food-menu.css">
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update Food Item</h1>

        <a href="{{url('/foodmenu') }}" class="btn btn-secondary">Back to Food Menu</a>

        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="name" class="form-label">Food Name</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $data->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $data->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $data->price }}">
            </div>

            <div class="mb-3">
                <label  for="new-image">Old Image</label>
                <img src="/foodimage/{{$data->image}}" alt="Old Image" width="150" height="150">
            </div>
            <div class="mb-3">
                <label for="new-image">New Image</label>
                <input type="file" name="image" id="new-image" >
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
