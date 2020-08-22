@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>login</h1>
</div>
<div class="row">
    <div class="col-8-sm offset-4-sm">
        {!! Form::open(['route'=>'login.post'])!!}
        <div class="form-group">
            {!! Form::label('email','Email')!!}
            {!! Form::email('email',old('email'),['class'=>'form-controll'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password','Password')!!}
            {!! Form::password('password',['class'=>'form-controll'])!!}
        </div>
        
        {!! Form::submit('login',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close()!!}
    </div>
</div>

@endsection