@extends('app')
 
@section('content')
    <h2>Edit Projects</h2>

    {!! Form::model(new App\Project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
    	@include('projects/partials/_form', ['submit_text' => 'Edit project'])
    {!! Form::close() !!}
@endsection
