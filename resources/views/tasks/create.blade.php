@extends('layouts.app')
@section('content')


@include('common.error_message')


{!! Form::model($task,['route'=>'tasks.store'])   !!}
{!! Form::label('content','メッセージ')    !!}
{!! Form::text('content', null, ['class'=>'form-control'])    !!}

{!! Form::label('title','タイトル')!!}
{!! Form::text('title', null, ['class'=>'form-control'])    !!}

{!! Form::label('status','status')!!}
{!! Form::text('status', null, ['class'=>'form-control'])    !!}

{!! Form::submit('投稿する',['class'=>'btn btn-primary mt-3'])!!}
{!! Form::close() !!}


@endsection