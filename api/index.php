<?php
header('Content-Type: application/json');

// ইউজার যে UID পাঠাবে সেটা রিসিভ করা
$uid = isset($_GET['uid']) ? $_GET['uid'] : '';

if (empty($uid)) {
    echo json_encode([
        "status" => "error",
        "message" => "Please provide a valid UID"
    ]);
    exit;
}

// প্রেডিকশন লজিক (আপনি চাইলে পরে এটা পরিবর্তন করতে পারেন)
$results = ['Big', 'Small', 'Red', 'Green'];
$prediction = $results[array_rand($results)];

// রেজাল্ট পাঠানো
echo json_encode([
    "status" => "success",
    "uid" => $uid,
    "prediction" => $prediction,
    "time" => date("h:i:s A")
]);
?>
