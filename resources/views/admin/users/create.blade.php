@extends('layouts.admin')



@section('content')

<h1>Create Users</h1>


{!! Form::open(['method' =>'POST','action' => 'AdminUserController@store','files'=>true]) !!}

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
    {!! Form::file('file',null,['class'=>'form-control']) !!}
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

    {!! Form::submit('Create User',[ 'class'=>'btn btn-primary']) !!}

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

@endsection