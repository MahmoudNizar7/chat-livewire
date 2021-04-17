<?php

    namespace App\Http\Controllers\Conversations;

    use App\Http\Controllers\Controller;
    use App\Models\Conversation;
    use App\Models\User;
    use Illuminate\Http\Request;


    class ConversationsController extends Controller
    {
        public function index()
        {
            return view('conversations.index');
        }

        public function show(Conversation $conversation, Request $request)
        {
            $this->authorize('show', $conversation);

            $request->user()->conversations()->updateExistingPivot($conversation, [
                'read_at' => now()
            ]);

            return view('conversations.show', compact('conversation'));
        }

        public function create()
        {
            return view('conversations.create');
        }
    }
