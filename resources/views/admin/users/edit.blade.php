@extends('layouts.admin')



@section('content')

<h1>Update User</h1>


<div class="col-sm-3">

    <img src="{{$user->photo ? $user->photo->file : '/images/imagename.png' }}" class="img-responsive img-rounded" alt="">

</div>

<div class="col-sm-9">


    {!! Form::model($user,['method' =>'PATCH','action' => ['AdminUserController@update',$user->id],'files'=>true]) !!}

    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',$roles ,null,['class'=>'form-control','placeholder'=>'Choose options']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[1=>'Active',0=>'Inactive'],null,['class'=>'form-control','placeholder'=>'Select Status']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('file','Status:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>


    <!-- {!! Form::label('password','Password:') !!}
    {!! Form::password('password',null,['class'=>'form-control']) !!}

    {!! Form::label('password-confirm','Confirm:') !!}
    {!! Form::password('password-confirm',null,['class'=>'form-control']) !!}
 -->


    <div class="form-group">

        {!! Form::submit('Update User',[ 'class'=>'btn btn-primary']) !!}

    </div>

    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>

            @foreach($errors->all() as $error)

            <li> <strong>{{ $error }}</strong></li>

            @endforeach
        </ul>

    </div>

    @endif

    {!! Form::close() !!}

</div>


@endsection