
<?php 
require_once "connect.php";
$is_customer_logged_in = isset($_SESSION['auth_login']);

if ( isset($_SESSION['auth_login']) ) {
    $auth = $_SESSION['auth_login'];
    $auth_full_name = $auth['first_name'] . $auth['last_name'];
    $auth_id = $auth['id'];
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
$start = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM notification_client ORDER BY id DESC LIMIT $start, $limit");

if (!$result) {
    die("Error in query: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
date_default_timezone_set('Asia/Manila'); // Set the timezone to Philippines

function getTimeAgo($timestamp) {
    $current_time = time();
    $time_diff = $current_time - strtotime($timestamp);
    $minutes = round($time_diff / 60);
    $hours = round($minutes / 60);
    $days = round($hours / 24);
    $weeks = round($days / 7);
    $months = round($days / 30);
    $years = round($days / 365);

    if ($minutes <= 1) {
        return "Just now";
    } elseif ($minutes < 60) {
        return $minutes == 1 ? "1 min ago" : "$minutes mins ago";
    } elseif ($hours < 24) {
        return $hours == 1 ? "1 hour ago" : "$hours hours ago";
    } elseif ($days < 7) {
        return $days == 1 ? "1 day ago" : "$days days ago";
    } elseif ($weeks < 4.3) {
        return $weeks == 1 ? "1 week ago" : "$weeks weeks ago";
    } elseif ($months < 12) {
        return $months == 1 ? "1 month ago" : "$months months ago";
    } else {
        return $years == 1 ? "1 year ago" : "$years years ago";
    }
}
function getNotifData() {
    global $pdo, $auth_id; // Make sure $auth_id is accessible in the function
    $query = "SELECT *, DATE_FORMAT(date_added, '%d/%m/%Y') AS date_component, TIME_FORMAT(date_added, '%h:%i %p') AS time_component FROM notification_client WHERE customer_id = :auth_id ORDER BY date_added DESC";
    $inventory = [];
    $reference_id = uniqid();
    $statement = $pdo->prepare($query);
    $statement->bindParam(':auth_id', $auth_id, PDO::PARAM_INT); // Bind $auth_id parameter
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as &$result) {
        $result['time_component'] = getTimeAgo($result['date_added']);
    }

    return $results;
}

$inventory = getNotifData();

$service_links = array(
    'Wedding' => 'wedding.php',
    'Mass' => 'mass.php',
    'Baptismal' => 'baptismal.php',
    'Funeral' => 'funeral.php',
    'Sick Call' => 'sickcall.php',
    'Blessing' => 'blessing.php',
    'Baptismal Certificate' => 'certificate_baptismal.php'
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php include 'nav.php';?>

<body>
    <div class="notificationContainer">
        <header>
            <div class="notificationHeader">
                <h1>Notification</h1>
                <span id="num-of-notif"></span>
            </div>
            <p id="mark-as-read">Mark as All Read</p>
        </header>
        <hr>
        <div style="max-height: 650px; overflow-y: auto;">
            <main>
                <?php foreach ($inventory as $item) {?>
                    <div class="notificationCard <?php echo ($item['status'] == 'unread') ? 'unread' : 'read'; ?>" data-reference-id="<?php echo $item['reference_id']; ?>">
                    <img alt="photo"
                        src="image/<?php echo ($item['apply_status'] == 'Decline') ? 'decline.png' : 'approve.png'; ?>" />
                    <div class="description">
                        <strong><?php echo $item['apply_status']; ?> Application in <?php echo $item['services']; ?></strong>
                        <?php if ($item['apply_status'] == 'Decline'): ?>
                        <p><?php echo $item["customer_name"] ?>, your application for <?php echo $item['services']; ?>
                            with reference number of (<?php echo $item['reference_id']; ?>)
                            has been <?php echo $item['apply_status']; ?> because of <?php echo $item['reason']; ?>.
                            Remarks: <?php echo $item['remarks']; ?>.</p>
                        <?php else: ?>
                        <p><?php echo $item["customer_name"] ?>, your application for <?php echo $item['services']; ?>
                            with reference number of (<?php echo $item['reference_id']; ?>)
                            has been <?php echo $item['apply_status']; ?>.</p>
                        <?php endif; ?>
                        <p class="time"><?php echo $item['time_component']; ?></p>
                    </div>
                </div>
                <?php } ?>

            </main>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const unReadMessages = document.querySelectorAll('.unread');
    const unReadMessagesCount = document.getElementById('num-of-notif');
    const markAll = document.getElementById('mark-as-read');

    unReadMessagesCount.innerText = unReadMessages.length;

    unReadMessages.forEach((message) => {
        message.addEventListener('click', () => {
            message.classList.remove('unread');
            const newUnreadMessages = document.querySelectorAll('.unread');
            unReadMessagesCount.innerText = newUnreadMessages.length;
            
            // Send AJAX request to mark notification as read in the database
            const referenceId = message.dataset.referenceId;
            markNotificationAsRead(referenceId);
        });
    });

    markAll.addEventListener('click', () => {
        unReadMessages.forEach((message) => {
            message.classList.remove('unread');
            
            // Send AJAX request to mark all notifications as read in the database
            const referenceId = message.dataset.referenceId;
            markNotificationAsRead(referenceId);
        });
        unReadMessagesCount.innerText = 0;
    });

    function markNotificationAsRead(referenceId) {
        // Send AJAX request to mark notification as read in the database
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'notification_as_read.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            // Handle response
            if (xhr.status === 200) {
                // Notification marked as read successfully
            } else {
                // Error handling
            }
        };
        xhr.send('referenceId=' + encodeURIComponent(referenceId));
    }
});

    </script>

    <style>
    * {
        /* margin: 0; */
        padding: 0;
        /* box-sizing: border-box; */
        /* font-family: sans-serif; */
    }

    .container {
        display: flex;
        justify-content: center;
        background-color: #f1f1f1;
        width: 100%;
        height: 100vh;
    }

    .notificationContainer {
        background-color: #fff;
        width: 80%;
        /* height: 650px; */
        margin: 2rem;
        padding: 1rem 1rem;
        border-radius: 1rem;
        margin: 4% auto;
        padding: 20px;
        /* border: 1px solid #888; */
        box-shadow:0 0 50px 0 rgba(0, 0, 0, 0.2);

    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* margin-bottom: 2rem; */
        padding: 0;
    }

    .notificationHeader {
        display: flex;
        align-items: center;
    }

    .time {
        font-size: 16px;
        color: #3b3bc9;
    }

    #num-of-notif {
        background-color: green;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        width: 30px;
        height: 30px;
        border-radius: 0.5rem;
        margin-left: 10px;
    }

    #mark-as-read {
        color: gray;
        cursor: pointer;
        transition: 0.6s ease;
    }

    #mark-as-read:hover {
        color: black;
    }

    main {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .notificationCard {
        margin: 0;
        display: flex;
        align-items: center;
        padding: 1rem;
        border-radius: 1rem;
        background-color: #f5f5f5f5;
    }

    .notificationCard img {
        width: 50px;
    }

    .notificationCard .description {
        margin-left: 10px;
        font-size: 20px;
        line-height: 1.6;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .notificationCard .description p {
        margin: 0;
        padding: 0;
    }

    .unread {
        margin: 0;
        background-color: #a7e4a752;

    }

    img {
        border-radius: 30px;
    }

    .modal {
        /* display: none; */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #f5f5f5;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        border-radius: 30px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
</body>
<?php include 'footer.php';?>
</html>