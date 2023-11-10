<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\DatabaseNotification;
use App\Models\User;

class DashboardNotificationController extends Controller {
    public function notify() {
        if ( Auth()->user() ) {
            $user = User::first();
            Auth()->user()->notify( new DatabaseNotification( $user ) );
            return view( 'notifications' );
        } else {

        }
    }

    public function markasread( $id ) {
        if ( $id ) {
            // dd( $id );
            auth()->user()->notifications()->where( 'id', $id )->first()->markAsRead();
            return view( 'notifications' );
        }
    }
}
