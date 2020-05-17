@extends('layouts.app')

@section('content')

@foreach($chatsName as $name)
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <ul>
                <li>
                 {{ $name->chatName }}
                 </li>
            </ul>
                <button class="btn btn-success">Open chat</button> 
            </div>
        </div>

    </div>
@endforeach

@endsection