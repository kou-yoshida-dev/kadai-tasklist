@extends('layouts.app')
@section('content')
<table class="table table-sm table-bordered table-striped">
    <thead>
        <tr>
            <td>id</td>
            <td>task</td>
            
            <td>status</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$task->id }}</td>
            <td>{{$task->content}}</td>
            
            <td>{{$task->status}}</td>
        </tr>
    </tbody>
</table>
{!! link_to_route('tasks.edit','編集',['task'=>$task->id],['class'=>'btn btn-primary'])!!}

{!! Form::model($task,['route'=>['tasks.destroy',$task->id], 'method'=>'delete','class'=>'mt-3'])!!}

{!! Form::submit('削除',['class'=>'btn btn-primary'])!!}

{!! Form::close()!!}
@endsection