<?php
// Tanvir Boss: User Verification API
header("Content-Type: application/json");

// এখানে আপনার ২০ জন মেম্বারের UID বসাবেন। 
// শুধু উদ্ধৃতি চিহ্নের (" ") মাঝখানের লেখাগুলো পরিবর্তন করবেন।
$allowed_uids = [
    "149220", 
    "188124", 
    "188851", 
    "188899", 
    "184365", 
    "186383", 
    "205064", 
    "194273", 
    "151649", 
    "177121", 
    "170493", 
    "190257", 
    "183784", 
    "228851", 
    "194552", 
    "BOSS", 
    "BOSS", 
    "BOSS", 
    "BOSS", 
    "BOSS"
];

// ইনপুট থেকে UID নেওয়া
$user_uid = isset($_GET['uid']) ? $_GET['uid'] : '';

// চেকিং লজিক
if (empty($user_uid)) {
    echo json_encode([
        "status" => "error",
        "message" => "UID is required"
    ]);
} elseif (in_array($user_uid, $allowed_uids)) {
    echo json_encode([
        "status" => "success",
        "message" => "Access Granted"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid UID! Register via our link first."
    ]);
}
?>
