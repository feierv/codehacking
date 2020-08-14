@extends('layouts.admin')



@section('content')

<h1>Users</h1>



<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Photo</th>
            <th>name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>created</th>
            <th>updated</th>

        </tr>
    </thead>
    <tbody>

        @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>
                 <img src="{{$user->photo ? $user->photo->file : '/images/imagename.png' }}" height="45px" alt="">
            </td>
            <td><a href="{{  url('/admin/users/'.$user->id.'/edit') }}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id == NULL ? 'User has no role' : $user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>

        </tr>
        @endforeach

        @endif

    </tbody>
</table>
</div>




@endsection