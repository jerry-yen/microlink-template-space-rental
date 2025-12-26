<?php
// api/space_events.php
// 回傳 FullCalendar 可用的 events JSON
header('Content-Type: application/json');

$space_id = isset($_GET['space_id']) ? (string)$_GET['space_id'] : null;
$start = isset($_GET['start']) ? $_GET['start'] : null; // 可選，ISO-8601
$end = isset($_GET['end']) ? $_GET['end'] : null;

$candidates = [];

// 嘗試幾個可能的 bookings.json 路徑（容錯）
$paths = [
    __DIR__ . '/../docs/tables/bookings.json',
    __DIR__ . '/../../space_rental/docs/tables/bookings.json',
    __DIR__ . '/../tables/bookings.json',
    __DIR__ . '/bookings.json'
];

foreach ($paths as $p) {
    if (file_exists($p)) {
        $candidates[] = $p;
    }
}

$bookings = [];
foreach ($candidates as $p) {
    $content = @file_get_contents($p);
    if ($content !== false) {
        $data = json_decode($content, true);
        if (is_array($data)) {
            $bookings = array_merge($bookings, $data);
        }
    }
}

// 如果沒有找到任何 JSON，回傳空陣列
if (empty($bookings)) {
    echo json_encode([]);
    exit;
}

$events = [];
foreach ($bookings as $b) {
    // 支援多種欄位命名：space_id / start_datetime / start / end_datetime / end
    if ($space_id && isset($b['space_id']) && (string)$b['space_id'] !== (string)$space_id) continue;

    $startVal = $b['start_datetime'] ?? $b['start'] ?? null;
    $endVal = $b['end_datetime'] ?? $b['end'] ?? null;
    if (!$startVal) continue; // 無開始時間就跳過

    $events[] = [
        'id' => $b['id'] ?? uniqid('bk_'),
        'title' => $b['title'] ?? ($b['summary'] ?? '預約'),
        'start' => $startVal,
        'end' => $endVal,
        'extendedProps' => $b
    ];
}

echo json_encode($events);

?>
