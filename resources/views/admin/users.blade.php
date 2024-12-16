
<link rel="stylesheet" href="csss/user.css">
@extends('admin.adminindex')

@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <!-- main-panel ends -->
                 <div class="table-user-info">
                     <table>
                         <tr><th>Name</th><th>Email</th><th>Action</th></tr>
                              @foreach ($data as $data)
                               <tr><td>{{$data->name}}</td><td>{{$data->email}}</td>
                                      @if($data->usertype=="0")
                                              <td><a href="{{url('/userdelete',$data->id)}}">Delete</a></td>
                                                @else
                                           <td><a href="">NOT ALLOWED</a></td>
                                                     @endif
                                                          </tr>
                                                        @endforeach


                        </table>
                 </div>




        </div>
    </div>
@endsection
