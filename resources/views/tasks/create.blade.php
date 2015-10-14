@extends('app')
 
@section('content')
    <h2>Create Task for Project "{{ $project->name }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
    	@include('projects/partials/_form', ['submit_text' => 'Create task'])
    {!! Form::close() !!}
@endsection
