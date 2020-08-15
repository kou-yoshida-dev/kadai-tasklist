@extends('layouts.app')

@section('content')

@if(count($tasks) > 0)



    
    


<table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>message</th>
            <th>title</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach($tasks as $task)
            <tr>
            <td>
            {!! link_to_route('tasks.show',$task->id,['task'=>$task->id],[])  !!}
           
        </td>
        <td>
             {{ $task->content  }}
        </td>
        <td>
            {{$task->title}}
        </td>
            </tr>
            @endforeach
            
        
        
        
    </tbody>
</table>



@endif







{!! link_to_route('tasks.create','追加',[],['class'=>'btn btn-primary'])   !!}

@endsection
