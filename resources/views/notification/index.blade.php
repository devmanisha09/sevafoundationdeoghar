@extends('layouts.master')

@section('content')

<div class="col-md-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Notifications</h5>
        </div>
        <div class="ibox-content">

            @php
                $Teacher=App\Teacher::all();
                use Carbon\Carbon;
            @endphp

            <div class="notification-list notification-list--unread">
                <?php

$date = date('Y-m-d');
$presentMonth = date('m');
$nextMonth = date("m", strtotime('+1 month', strtotime($date)));

$today = Carbon::now();
$date = today();
$nextDays = date('Y-m-d', strtotime('+30 days'));
$nMonth = date("m", strtotime($nextDays));
$nDate = date("d", strtotime($nextDays));

$users = App\Teacher::whereMonth('dob', '=', date('m'))->whereDay('dob', '=', date('d'))->with('user')->get();

// $usersNext = App\Teacher::whereMonth('dob', '=', $nMonth)->whereDay('dob', '=', $nDate)->with('user')->get();
$usersNext = App\Teacher::whereMonth('dob', '=', $presentMonth)->with('user')->get();
// dd($usersNext);
if (count($users) > 0) {
    echo "<div class='ToDay'>";
    foreach ($users as $list) {

        $name = $list->user['name'];
        $phone = $list['phone'];
        // echo $button = "<button onclick='window.open('https://web.whatsapp.com://send?text=This is whatsapp sharing example using button')'> Open WhatsApp </button>";

        echo $message = "Today Is  " . $name . " Birth Day ): " . "<br/>";

    }
    echo "</div>";

} else {

    echo $message = "<p class='NxtDayNoEvent' style='color: #b10000;'> No Event Found </p>";
}

// NextDay Birth
if (count($usersNext) > 0) {
    echo "<div class='nextDay'>";
    foreach ($usersNext as $list) {
        $name = $list->user['name'];
        $phone = $list['phone'];
        echo $message = "Towmmorow Is  " . $name . " Birth Day ):" . "<br/>";

        "</div>";
    }
} else {

    echo $message = "<p class='NxtDayNoEvent' style='color: #b10000;'>No Event Found</p>";
}

?>
</div>
        </div>
    </div>
</div>
@endsection()

