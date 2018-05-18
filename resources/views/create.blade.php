@extends('layouts.app')

@section('content')

{{Form::open( array('route' => ['users.index'], 'role' => 'form') ) }}
@include('_fields')
{{ Form::close()}}

@endsection