<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <p class="btn btn-danger">{{ $notification->data['name'] }} Following you. <a
                            href="{{ route('markasread', $notification->id) }}">Mark as Read</a> </p>
                @endforeach
            </div>
            <div class="col-md-4">
                <p>Total Notifications</p>({{ auth()->user()->Notifications->count() }})
                <p>Total Read Notifications</p>({{ auth()->user()->readNotifications->count() }})
                <p>Total Unread Notifications</p>({{ auth()->user()->unreadNotifications->count() }})
            </div>

        </div>
    </div>
</body>

</html>
