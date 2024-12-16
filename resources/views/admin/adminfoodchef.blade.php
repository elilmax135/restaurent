

@extends('admin.adminindex')

@section('content')


<link rel="stylesheet" href="csss/food-menu.css">

            <div class="form-foodmenu">
                <form action="{{ url('/foodchef') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="title">name</label>
                        <input type="text" id="name" name="name" placeholder="Write the name" required>
                    </div>

                    <div>
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" required>
                    </div>
                    <div>
                        <label for="description">speciality</label>
                        <input type="text" id="speciality" name="speciality" placeholder="Write the speciality" required>
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
                            <th>Name</th>

                            <th>Image</th>
                            <th>speciality</th>
                            <th>Action</th>
                            <th>Action 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)


                        <tr>
                            <td>{{ $data->name}}</td>

                            <td><img src="/chefimage/{{ $data->image }}" alt="Food Image" width="150" height="150"></td>
                            <td>{{$data->speciality }}</td>
                            <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>
                            <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


@endsection
