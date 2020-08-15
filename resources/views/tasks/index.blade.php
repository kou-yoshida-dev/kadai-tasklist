@extends('layouts.app')

@section('content')

@if(count($tasks) > 0)



    
    


<table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>task</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach($tasks as $task)
            <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->content}}</td>
            @endforeach
            </tr>
        
        
        
    </tbody>
</table>



@endif
<table>
    <tr>
        @foreach($tasks as $task)
        <td>
            {!! link_to_route('tasks.show',$task->id,['task'=>$task->id],[])  !!}
           
        </td>
        <td>
             {!! $task->content  !!}
        </td>
        @endforeach
        
    </tr>
    
    
</table>






{!! link_to_route('tasks.create','追加',[],['class'=>'btn btn-primary'])   !!}

@endsection
