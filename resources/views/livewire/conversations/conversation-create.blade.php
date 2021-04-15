<form action="" class="bg-white">
    <div class="p-4 border-bottom">

        <div class="mb-2 text-muted">
            Send To Mahmoud, Zain, Ali
        </div>

        <div>
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" id="user" class="form-control" autocomplete="off" placeholder="Search here">
            </div>

            Mahmoud,
            Zain,
            Ali
        </div>

        <div class="p-4 border-bottom">

            <div class="form-group">
                <label for="user">Group Name</label>
                <input type="text" id="name" class="form-control" wire:model="name" placeholder="Group Name">
            </div>

            <div class="form-group">
                <label for="body">Message</label>
                <textarea id="body" rows="3" class="form-control" wire:model="body"></textarea>
            </div>

        </div>

        <button type="submit" class="btn btn-primary btn-block">Start conversation</button>

    </div>
</form>
