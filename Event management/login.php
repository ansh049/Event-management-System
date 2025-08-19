<?php

// Data Storage (Using JSON files)
$eventsFile = 'events.json';
function getEvents() {
    global $eventsFile;
    if (file_exists($eventsFile)) {
        $data = file_get_contents($eventsFile);
        return json_decode($data, true) ?: [];
    }
    return [];
}
function saveEvents($events) {
    global $eventsFile;
    file_put_contents($eventsFile, json_encode($events, JSON_PRETTY_PRINT));
}
$registrationsFile = 'registrations.json';
function getRegistrations() {
    global $registrationsFile;
    if (file_exists($registrationsFile)) {
        $data = file_get_contents($registrationsFile);
        return json_decode($data, true) ?: [];
    }
    return [];
}
function saveRegistrations($registrations) {
    global $registrationsFile;
    file_put_contents($registrationsFile, json_encode($registrations, JSON_PRETTY_PRINT));
}

// Admin Panel (admin.php)
$adminUsername = "XXXXXXXXXXX"; // Set your admin username here
$adminPassword = "XXXXXXXXXX"; // Set your admin password here

if (isset($_GET['XXXXXXXXX']) && $_GET['XXXXXXXXX'] == 1) {
    session_start(); 

    
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === $adminUsername && $password === $adminPassword) {
                $_SESSION['admin_logged_in'] = true;
            } else {
                echo "<p class='error'>Invalid username or password.</p>";
                 ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Admin Login</title>
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <div class="admin-form">
                        <h2>Admin Login</h2>
                        <form method="post" action="?admin=1">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                            <input type="submit" name="admin_login" value="Login">
                        </form>
                    </div>
                </body>
                </html>
                <?php
                exit();
            }
        }

        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Admin Login</title>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <div class="admin-form">
                    <h2>Admin Login</h2>
                    <form method="post" action="?admin=1">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <input type="submit" name="admin_login" value="Login">
                        </form>
                </div>
            </body>
            </html>
            <?php
            exit; 
        }
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_event'])) {
        $eventName = $_POST['event_name'];
        $eventDate = $_POST['event_date'];
        $eventDescription = $_POST['event_description'];
        $events = getEvents();
        $eventId = empty($events) ? 1 : max(array_column($events, 'event_id')) + 1;
        $events[] = [
            'event_id' => $eventId,
            'event_name' => $eventName,
            'event_date' => $eventDate,
            'event_description' => $eventDescription,
        ];
        saveEvents($events);
        echo "<p class='success'>New event created successfully</p>";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Create Event</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <a href="home.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <button id="modeToggle">Dark Mode</button>
        </nav>
        <div class="admin-form">
            <h2>Admin Panel - Create Event</h2>
            <form method="post" action="?admin=1">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date" required>
                <label for="event_description">Event Description:</label>
                <textarea id="event_description" name="event_description" required></textarea>
                <input type="submit" name="create_event" value="Create Event">
            </form>
        </div>
    </body>
    </html>
    <?php
} else {
    
    $events = getEvents();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upcoming Events</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <nav>
            <a href="home.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <button id="modeToggle">Dark Mode</button>
        </nav>
        <div class="container">
            <?php
            if (!empty($events)) {
                echo "<h2>Upcoming Events</h2>";
                echo "<table class='event-table'>";
                echo "<tr><th>Event Name</th><th>Date</th><th>Description</th><th>Register</th></tr>";
                foreach ($events as $event) {
                    echo "<tr>";
                    echo "<td>" . $event["event_name"] . "</td>";
                    echo "<td>" . $event["event_date"] . "</td>";
                    echo "<td>" . $event["event_description"] . "</td>";
                    echo "<td><a href='Registration.php?event_id=" . $event["event_id"] . "' class='register-button'>Register</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='no-events'>No events found.</p>";
            }
            echo "<h2>Event Calendar</h2>";
            echo "<div class='calendar' id='eventCalendar'></div>";
            echo "<div class='admin-link-container'><a href='?admin=1' class='admin-link'>Admin Panel</a></div>";
            ?>
        </div>
        <script>
            function generateCalendar() {
                const calendarDiv = document.getElementById('eventCalendar');
                const currentDate = new Date();
                const currentMonth = currentDate.getMonth();
                const currentYear = currentDate.getFullYear();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
                const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
                let calendarHTML = '<table><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>';
                let dayCounter = 1;
                for (let i = 0; i < 42; i++) {
                    if (i < firstDayOfMonth || dayCounter > daysInMonth) {
                        calendarHTML += '<td></td>';
                    } else {
                        calendarHTML += '<td>' + dayCounter + '</td>';
                        dayCounter++;
                    }
                    if ((i + 1) % 7 === 0) {
                        calendarHTML += '</tr><tr>';
                    }
                }
                calendarHTML += '</tr></table>';
                calendarDiv.innerHTML = calendarHTML;
            }
            generateCalendar();
            
            const modeToggleReg = document.getElementById('modeToggle');
            const bodyReg = document.body;

            modeToggleReg.addEventListener('click', () => {
                bodyReg.classList.toggle('dark-mode');
                if (bodyReg.classList.contains('dark-mode')) {
                    modeToggleReg.textContent = 'Light Mode';
                } else {
                    modeToggleReg.textContent = 'Dark Mode';
                }
            });
            
        </script>
    </body>
    </html>
    <?php
}
?>
<?php
// registration_form.php
if (isset($_GET['event_id'])) {
    $eventId = $_GET['event_id'];
    $events = getEvents();
    $event = null;
    foreach ($events as $e) {
        if ($e['event_id'] == $eventId) {
            $event = $e;
            break;
        }
    }
    if ($event) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
            $studentName = $_POST['student_name'];
            $studentEmail = $_POST['student_email'];
            $registrations = getRegistrations();
            $registrations[] = [
                'event_id' => $eventId,
                'student_name' => $studentName,
                'student_email' => $studentEmail,
            ];
            saveRegistrations($registrations);
            echo "<p class='success'>Registration successful!</p>";
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register for <?php echo $event['event_name']; ?></title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style2.css">
        </head>
        <body>
            <nav>
                <a href="home.php">Home</a>
                <a href="gallery.php">Gallery</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
                <button id="modeToggle">Dark Mode</button>
            </nav>
            <div class="register-form">
                <h2>Register for <?php echo $event['event_name']; ?></h2>
                <form method="post" action="registration_form.php?event_id=<?php echo $eventId; ?>">
                    <label for="student_name">Student Name:</label>
                    <input type="text" id="student_name" name="student_name" required>
                    <label for="student_email">Student Email:</label>
                    <input type="email" id="student_email" name="student_email" required>
                    <input type="submit" name="register" value="Register">
                </form>
            </div>
            <script>
                const modeToggleReg = document.getElementById('modeToggle');
                const bodyReg = document.body;

                modeToggleReg.addEventListener('click', () => {
                    bodyReg.classList.toggle('dark-mode');
                    if (bodyReg.classList.contains('dark-mode')) {
                        modeToggleReg.textContent = 'Light Mode';
                    } else {
                        modeToggleReg.textContent = 'Dark Mode';
                    }
                });
            </script>
        </body>
        </html>
        <?php
    } else {
        echo "<p class='no-events'>Event not found.</p>";
    }
}
?>
