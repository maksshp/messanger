<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chats;

class chatCreate extends Controller
{
    public function createChat(Request $req){
        $chat = new Chats();
        $chat->chatName=$req->input('chatName');

        $chat->save();
        return redirect()->route('home')->with('status','Chat was created!');
    }

    public function showChats(){
     return view('create',['chatsName'=>Chats::all()]);
    }


}
