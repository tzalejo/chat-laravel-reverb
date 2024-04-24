<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('messages', function ($user) {
    return true;
    // return (int) $user->id === (int) $id;
});
