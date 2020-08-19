@extends('layouts.admin')



@section('content')



<h1>Posts</h1>



<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>user </th>
            <th>category </th>
            <th>photo </th>
            <th>title</th>
            <th>body</th>
            <th>created</th>
            <th>updated</th>

        </tr>
    </thead>
    <tbody>

        @if($posts)
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->id}}</td>
            <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
            <td>
                 <img src="{{$post->photo ? $post->photo->file : 'imagename.png' }}" height="45px" alt="">
            </td>          
              <td>
                <a href="{{  url('/admin/users/'.$user->id.'/edit') }}">{{$post->title}}</a></td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>

        </tr>
        @endforeach

        @endif

    </tbody>
</table>
</div>




@endsection