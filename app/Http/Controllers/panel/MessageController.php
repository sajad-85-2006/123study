<?php

namespace App\Http\Controllers\panel;


use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function getMessage()
    {
        Validator::make(\request()->all(), [
//           'to_user'=>
        ]);
        $messages = Message::query()->Where('to_user', intval(\request('to_user')))->orWhere('from_user', intval(\request('to_user')))->get();
        return response()->json($messages);

    }

    public function store()
    {
        $message = Message::create([
            'message' => \request('message'),
            'to_user' => \request('to_user'),
            'from_user' => \request('from_user')
        ]);
        if (intval(\request('from_user'))) {
            $user = User::query()->where('id', \request('from_user'))->first();
        } else {
            $user = [];
        }
        broadcast(new NewMessage($message, $user));
        return response()->json($message);
    }

    public function getMessageUser()
    {
        return response()->json(Message::query()->where('to_user', \request('id'))->orWhere('from_user', \request('id'))->get() ?: []);
    }

    public function online()
    {
        if (\request('id')) {
            return response()->json(User::query()->where('id', \request('id'))->first()['last_seen']);

        }
    }

    public function status()
    {
        $messages = Message::query()->where('status', 'false')->wheres('from_user', \request('from_user'))->get();
        foreach ($messages as $message) {
            $update = Message::find($message['id']);
            $update->update([
                'status' => 'true'
            ]);
        }
    }

    public function seen()
    {
        return response()->json(count(Message::all()));
    }
}
