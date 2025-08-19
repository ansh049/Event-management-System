<!-- <?php

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


?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IIIT Nagpur Events</title>
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
            padding: 8px 15px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 0 20px; 
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
        <h2>About Our Events</h2>
        <p>Welcome to our events page. We organize a variety of events for our community. Below is a list of our upcoming and past events:</p>
        <p><h1>TANTRAFIESTA </h1></p>
        <p>TantraFiesta'24, the much-anticipated annual technical festival of the Indian Institute of Information Technology, Nagpur (IIITN). The event witnessed a staggering 10,000+ registrations and brought together participants from across India, including prominent institutions like VNIT Nagpur, SPIT Mumbai, MDI Gurgaon, IIIT Surat, AIT Pune, MAIT Delhi, IIIT Pune, IIIT Naya Raipur, NMIMS Mumbai, and Symbiosis Pune, among many others. Over 200 teams competed in the offline rounds hosted at the IIIT Nagpur campus, showcasing exceptional talent and ingenuity. What set TantraFiesta'24 apart was the remarkable engagement from industry leaders. Representatives from Google India, Salesforce, Atlassian, InMobi, and Sprinklr graced the event, either as speakers or active participants. Their presence added immense value, bridging the gap between academia and industry. The festival featured: Panel Discussions, Workshops, Speaker Sessions with luminaries from the tech, finance, and management domains. 30+ Events (Online and Offline) catering to diverse interests, ranging from hackathons and coding challenges to workshops and case competitions. The digital footprint of the event was unprecedented, with an estimated 2.5 million+ impressions across platforms. On the sponsorship front, TantraFiesta'24 secured a record-breaking ₹6,27,000+ in cash sponsorships from 43+ sponsors reflecting the immense trust and excitement among corporate partners. TantraFiesta'24 truly redefined the benchmarks for technical festivals, celebrating innovation, collaboration, and excellence at its finest.</p>

        <p><h1>Abhivyakti 2025</h1></p>
        <p>the much-anticipated annual cultural festival of IIIT Nagpur, was hosted on 26th, 27th and 28th February 2025. With the theme “The Underground Art Movement,” it embraced raw creativity, breaking conventional boundaries and providing a platform for students to showcase talent, challenge norms, and celebrate individuality. Festival Highlights: ● Under25 for Under25 Summit (Empowering youth through creative expression, skill development, and networking platforms) ● Nagpur Anime Club for COSPLAY (dressing up as and embodying a character from anime, movies, games, or pop culture). ● International brand MIA by Tanishq for Mr. & Mrs. Abhivyakti 2025. ● Talk Show by actor, writer, and director, Abhinav Anand (Hostel Daze), offering insights into arts and entertainment. ● 18+ thrilling offline and online events in dance, drama, music, photography, videography, fashion show, rap battle, short-film making, and more. ● 3rd Edition of IIITN MUN with 100+ participants across India and six exciting committees like AIPPM, DISEC, and Mahabharata. ● 4.3 lakh+ digital impressions across platforms.</p>

        <p><h1> KSHITIJ </h1></p>
        <p> Sports fest of IIIT NAGPUR. t is a vibrant and energetic event that brings together individuals and teams to compete in various athletic and recreational activities. It is a celebration of sportsmanship, teamwork, and physical fitness, fostering camaraderie among participants</p>
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