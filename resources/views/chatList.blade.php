@extends('layouts.app')

@section('chats')

@foreach('$chatName as $name')
    <div>
        <h3>
            {{ $name }}
        </h3>
    </div>
@endforeach

@endsection