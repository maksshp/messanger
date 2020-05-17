@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                 {{ session('status') }}
            </div>
        @endif
            <form action="{{ route('home') }}" method="post">
            @csrf
                  <div class="form-group">
                    <label for="chatTitle">Enter new chat title</label>
                    <input type="text" class="form-control" id="chatTitle" placeholder="Chat Name" name="chatName">
                 </div>
                 <div class="form-group">
                    <label for="addUserToChat">Example select</label>
                    <select class="form-control" id="addUserToChat">
                    @foreach($usersName as $users)
                    <option>{{$users->name}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create chat</button>
            </form>
        </div>
    </div>
</div>

@endsection
