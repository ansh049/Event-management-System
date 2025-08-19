<!-- 
  <?php


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


?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us - IIIT Nagpur Events</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e0f7fa, #c2e9f2); 
            color: #2c3e50;
            line-height: 1.7;
        }

        nav {
            background: linear-gradient(135deg, #2980b9, #6dd5fa);
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 3px 0; 
            text-align: center; 
        }

        nav a {
            display: inline-block; 
            color: white;
            text-align: center;
            padding: 8px 20px; 
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 0 15px; 
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .about-content {
            width: 85%;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: justify;
        }

        .about-content h2 {
            text-align: center;
            color: #6a11cb;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: 800;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1em;
            color: #34495e;
            line-height: 1.8;
        }

        .about-content h1 {
            color:#2575fc;
            text-align: center;
        }

        .dark-mode {
            background: #2c3e50;
            color: #ecf0f1;
        }

        .dark-mode nav {
            background: #34495e;
        }

        .dark-mode nav a {
            color: #ecf0f1;
        }

        .dark-mode .about-content {
            background: #34495e;
            color: #ecf0f1;
        }

        .dark-mode .about-content p, .dark-mode .about-content h1, .dark-mode .about-content h2{
            color: #ecf0f1; 
        }

        .event-list {
            list-style-type: none;
            padding: 0;
        }

        .event-list li {
            margin-bottom: 15px;
        }

        .event-list a {
            text-decoration: none;
            color: #2575fc;
            font-weight: 700;
            font-size: 1.1em;
            transition: color 0.3s ease, text-shadow 0.2s ease;
        }

        .event-list a:hover {
            text-decoration: underline;
            color: #6a11cb;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        #modeToggle {
            background: linear-gradient(to right, #4CAF50, #2E7D32);
            color: white;
            border: none;
            padding: 8px 15px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; 
            margin: 5px; 
            cursor: pointer;
            border-radius: 6px;
            float: right;
            transition: background 0.3s ease, transform 0.2s ease;
            font-weight: 600;
        }

        #modeToggle:hover {
            background: linear-gradient(to right, #2E7D32, #4CAF50);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <nav>
        <a href="home.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <button id="modeToggle">Dark Mode</button>
    </nav>
    <div class="about-content">
        <p><h1> CONTACT AT </h1><p>
        <h1>TANTRAFIESTA</h1>
        <p> TANTRAFIESTA HEAD : 9867XXXXXX</p>
        <p> TECHINICAL TEAM :  9866XXXXXX</p>
        <p> ADMINSTRATIVE HEAD : 9866XXXXXX</p>
            <h1>KHISTIJ</h1>
        <p> KSHITIJ HEAD : 9867XXXXXX</p>
        <p> KHISTIJ COORDINATOR : 7698XXXXXX</p>

        <h1>ABHIYAKTI</h1>
        <p> TECHINICAL TEAM :  9966XXXXXX</p>
        <p> ADMINSTRATIVE HEAD : 7966XXXXXX</p>


        <!-- <?php
            $events = getEvents();
            if (!empty($events)) {
                echo "<ul class='event-list'>";
                foreach ($events as $event) {
                    echo "<li><a href='about_event.php?event_name=" . urlencode($event['event_name']) . "'>" . $event['event_name'] . "</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No events found.</p>";
            }
        ?> -->
    </div>
    <script>
        const modeToggleAbout = document.getElementById('modeToggle');
        const bodyAbout = document.body;

        modeToggleAbout.addEventListener('click', () => {
            bodyAbout.classList.toggle('dark-mode');
            if (bodyAbout.classList.contains('dark-mode')) {
                modeToggleAbout.textContent = 'Light Mode';
            } else {
                modeToggleAbout.textContent = 'Dark Mode';
            }
        });
    </script>
</body>
</html>