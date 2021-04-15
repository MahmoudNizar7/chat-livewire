<?php

    namespace App\Policies;

    use App\Models\Conversation;
    use App\Models\User;
    use Illuminate\Auth\Access\HandlesAuthorization;

    class ConversationPolicy
    {
        use HandlesAuthorization;

        /**
         * Create a new policy instance.
         *
         * @return void
         */
        public function show(User $user, Conversation $conversation)
        {
            return $user->inConversation($conversation->id);
        }
    }
