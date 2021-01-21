<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        $notifications->markAsRead();

        return view('mentor.notifications.index', [
            'notifications' => $notifications
        ]);
    }
}
