@extends('layouts.app')
@section('content')

@include('common.error_message')

<h1>{{$task->id}}の詳細ページ</h1>


{!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put'])   !!}
{!! Form::label('content','タスク') !!}
{!! Form::text('content',null,['class'=>'form-control'])!!}

{!! Form::label('status','status') !!}
{!! Form::text('status',null,['class'=>'form-control'])!!}

{!! Form::submit('更新',['class'=>'btn btn-primary mt-3'])!!}

{!! Form::close()!!}

@endsection