<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function get()
    {
        $chats = Chat::all();
        return response()->json($chats);
    }
    public function post(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);
        $chat = Chat::create($validatedData);
        return response()->json($chat, 201);
    }
    public function getById($id)
    {
        $chat = Chat::find($id);
        return response()->json($chat);
    }
}
