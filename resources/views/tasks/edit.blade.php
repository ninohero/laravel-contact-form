@extends('app')
 
@section('content')
    <h2>Edit Task "{{ $task->name }}"</h2>

    {!! Form::model(new App\Task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
    	@include('projects/partials/_form', ['submit_text' => 'Edit task'])
    {!! Form::close() !!}
@endsection
