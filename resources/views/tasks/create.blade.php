@extends('layouts.app')
@section('content')

{!! Form::model($task,['route'=>'tasks.store'])   !!}
{!! Form::label('content','メッセージ')    !!}
{!! Form::text('content', null, ['class'=>'form-control'])    !!}

{!! Form::submit('投稿する',['class'=>'btn btn-primary mt-3'])!!}
{!! Form::close() !!}


@endsection