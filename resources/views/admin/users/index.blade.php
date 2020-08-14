@extends('layouts.admin')



@section('content')

<h1>Users</h1>



<table class="table">
    <thead>
        <tr>
            <th>id</th>
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
            <td>{{$user->name}}</td>
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