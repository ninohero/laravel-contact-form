@extends('app')
 
@section('content')
    <h2>Create Projects</h2>

    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
    	@include('projects/partials/_form', ['submit_text' => 'Create project'])
    {!! Form::close() !!}
@endsection
