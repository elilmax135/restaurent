
<link rel="stylesheet" href="csss/user.css">

<link rel="stylesheet" href="csss/food-menu.css">
@extends('admin.adminindex')

@section('content')
<div class="form-table">
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>phone</th>
                <th>guest</th>
                <th>email</th>
                <th>date</th>
                <th>time</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)


            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->guest }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->time }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

