@extends('layouts.master')


@section('content')

  <h2>Create task for Project "{{ $project-> name }}"</h2>

  {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Create task'])
  {!! Form::close() !!}  
@endsection
