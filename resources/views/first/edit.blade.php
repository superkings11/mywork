@extends('layouts.app')
@section('content')
{!! Form::open() !!}

<div class="form-group">
    {!! Form::label('title', 'Your Question') !!}
    {!! Form::text('title', null , array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::textarea('body',null, array('class' => 'form-control')) !!}
</div>


{!! Form::submit('Submit',array('class' => 'btn btn-primary')) !!}


{!! Form::close() !!}
@endsection