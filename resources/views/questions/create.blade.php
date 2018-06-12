@extends('questions/layout')

@section('content')

    <form action="{{ action('QuestionController@store')}}" method="post">

        {{ csrf_field() }}
        
        <div class="form-group">
            {!! Form::label('title', 'Title of the question', ['class' => 'control-label']) !!}
            {!! Form::text('title') !!}
        </div>

        <div class="form-group">
            {!! Form::label('text', 'Text of the question', ['class' => 'control-label']) !!}            
            {!! Form::textarea('text') !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save') !!}
        </div>

    </form>

@endsection