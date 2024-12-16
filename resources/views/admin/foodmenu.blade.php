

@extends('admin.adminindex')

@section('content')


<link rel="stylesheet" href="csss/food-menu.css">

            <div class="form-foodmenu">
                <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Write the title" required>
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" placeholder="Price" required>
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" placeholder="Write the description" required>
                    </div>
                    <div>
                        <input type="submit" name="button" value="Submit">
                    </div>
                </form>
            </div>

            <div class="form-table">
                <table>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Action 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)


                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->price }}</td>
                            <td><img src="/foodimage/{{ $data->image }}" alt="Food Image" width="150" height="150"></td>
                            <td>{{$data->description }}</td>
                            <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                            <td><a href="{{ url('/showupdate', $data->id) }}">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


@endsection
