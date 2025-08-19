<!-- [
         'path' => 'Screenshot 2024-11-30 at 7.59.23ΓÇ»PM.png',
         'caption' => '!',
         'link' => 'image_details.php?image=event1.jpg'
     ], -->

<?php
$TF = [
    [
        'path' => 'TF1.JPG',
        'caption' => 'Event Kickoff: Begining the festivities.',
        'link' => 'image_details.php?image=event2.jpg'
    ],
    [
        'path' => 'TF2.JPG',
        'caption' => 'Competitions: The ultimate test of skill.',
        'link' => 'image_details.php?image=event3.jpg'
    ],
    [
        'path' => 'TF3.JPG',
        'caption' => 'Workshop Session: Hands-on learning.',
        'link' => 'image_details.php?image=event4.jpg'
    ],
    [
        'path' => 'TF4.JPG',
        'caption' => 'Networking events: Connecting with peers!',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'TF5.JPG',
        'caption' => 'Team events: Cooperation and coordination',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'TF6.JPG',
        'caption' => 'Project display: Showing of the latest invention',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'TF7.JPG',
        'caption' => 'Presentation Showcase: Innovative ideas',
        'link' => 'image_details.php?image=event9.jpg'
    ],    
    [
        'path' => 'TF8.JPG',
        'caption' => 'Closing Remarks: A successful event\'s conclusion !',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    
];

$AB = [
    [
        'path' => 'AB1.jpg',
        'caption' => 'Event Kickoff: Begining the festivities.',
        'link' => 'image_details.php?image=event5.jpg'
    ],
    [
        'path' => 'AB2.JPG',
        'caption' => 'Instrumental performances: the symphony of talent',
        'link' => 'image_details.php?image=event6.jpg'
    ],
    [
        'path' => 'AB3.JPG',
        'caption' => 'Dance: Honouring our traditions',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'AB4.JPG',
        'caption' => 'Solo acting: Expressing oneself through theatre!',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'AB5.JPG',
        'caption' => 'Setting the stage: For many performances to come!',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'AB6.JPG',
        'caption' => 'MUN: Debating the pressing issues of our times',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'AB7.JPG',
        'caption' => 'Speakers panel: sharing expertise',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    [
        'path' => 'AB8.JPG',
        'caption' => 'Closing Remarks: A successful event\'s conclusion !',
        'link' => 'image_details.php?image=event9.jpg'
    ],
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Gallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f2f7;
            color: #333;
        }
        body.dark-mode {
            background-color: #333;
            color: #f0f0f0;
        }
        nav {
            width: 100%;
            background: linear-gradient(135deg, #2980b9, #6dd5fa);
            padding: 7px 0;
            color:white;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav.dark-mode {
            background: rgba(50, 50, 50, 0.8);
        }
        nav a, nav button {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.2s ease;
            border: none;
            background: none;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
        }
        nav.dark-mode a, nav.dark-mode button {
            color: #f0f0f0;
        }
        nav a:hover, nav button:hover {
            background: rgba(200, 200, 200, 0.5);
        }
        nav.dark-mode a:hover, nav.dark-mode button:hover {
            background: rgba(100, 100, 100, 0.5);
        }
        .gallery-container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            animation: fadeIn 1s ease-in-out;
        }
        .gallery-item {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            max-height: 300px;
        }
        .gallery-item.dark-mode {
            background: #444;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .gallery-item a {
            display: block;
            width : 100%;
            height : 100%;
            text-decoration: none;
        }
        .gallery-item img {
            width: 100%;
            display: block;
            height: 100%;
        }
        .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            padding : 5px
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 0.9em;
        }
        .caption.dark-mode{
          color: #f0f0f0;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2
        {
            margin-left : 50px;
            font-size: 32px;
            color:#3f9ec0;
            font-family: 'Montserrat', sans-serif;
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

    <h2>TantraFiesta</h2>

    <div class="gallery-container">
        <?php foreach ($TF as $image): ?>
            <div class="gallery-item">
                <a href="<?php echo $image['link']; ?>">
                    <img src="<?php echo $image['path']; ?>" alt="Event Photo">
                    <div class="caption"><?php echo $image['caption']; ?></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Abhivyakti</h2>

    <div class="gallery-container">
        <?php foreach ($AB as $image): ?>
            <div class="gallery-item">
                <a href="<?php echo $image['link']; ?>">
                    <img src="<?php echo $image['path']; ?>" alt="Event Photo">
                    <div class="caption"><?php echo $image['caption']; ?></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        const modeToggle = document.getElementById('modeToggle');
        const body = document.body;
        const nav = document.querySelector('nav');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const captions = document.querySelectorAll('.caption');

        modeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            nav.classList.toggle('dark-mode');
            galleryItems.forEach(item => item.classList.toggle('dark-mode'));
            captions.forEach(caption => caption.classList.toggle('dark-mode'));

            if (body.classList.contains('dark-mode')) {
                modeToggle.textContent = 'Light Mode';
            } else {
                modeToggle.textContent = 'Dark Mode';
            }
        });
    </script>
</body>
</html>