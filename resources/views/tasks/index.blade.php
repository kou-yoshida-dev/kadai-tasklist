@extends('layouts.app')

@section('content')





@if(Auth::check())

username:{{Auth::user()->name}}

@if(count($tasks) > 0)

<table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>task</th>
            
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach(Auth::user()->task as $task)
            <tr>
            <td>
            {!! link_to_route('tasks.show',$task->id,['task'=>$task->id],[])  !!}
           
        </td>
        <td>
             {{ $task->content  }}
        </td>
        
        <td>
            {{$task->status}}
        </td>
        
            </tr>
            @endforeach
            
        
        
        
    </tbody>
</table>


@endif
{!! link_to_route('tasks.create','追加',[],['class'=>'btn btn-primary'])!!}
{{$tasks->links()}}
@else





<div class="row ">
   
    
        {!! link_to_route('signup.get','signup',[],['class'=>'btn btn-primary btn-block mb-3'])  !!}
        {!! link_to_route('login.get','login',[],['class'=>'btn btn-primary btn-block'])  !!}
        
   
    @foreach($users as $user)
    <p>{{$user->name}}</p>
    @endforeach
        
    
</div>



@endif

@endsection
