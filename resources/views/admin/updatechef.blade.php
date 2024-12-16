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

        <a href="{{url('/viewfoodchef') }}" class="btn btn-secondary">Back to Chef Menu</a>

        <form action="{{url('/updatecf',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="name" class="form-label">Chef Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Speciality</label>
                <textarea name="speciality" id="speciality" class="form-control" rows="4">{{ $data->speciality }}</textarea>
            </div>
            <div class="mb-3">
                <label  for="new-image">Old Image</label>
                <img src="/chefimage/{{$data->image}}" alt="Old Image" width="150" height="150">
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
