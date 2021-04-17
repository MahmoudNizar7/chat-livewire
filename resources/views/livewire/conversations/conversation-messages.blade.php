<div>

@foreach($messages as $message)

    @if($message->isOwn())

            <!-- Sender Message-->
            <livewire:conversations.conversation-message-own :message="$message"
                                                             :key="$message->id"/>

    @else

            <!-- Reciever Message-->
            <livewire:conversations.conversation-message :message="$message"
                                                         :key="$message->id"/>

     @endif

 @endforeach

</div>
