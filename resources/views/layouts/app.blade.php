<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="{{asset('new/css/style.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script language="JavaScript">
    Webcam.set({
        width: 936,
        height: 550,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    // Check if the element with ID 'my_camera' exists in the DOM
    var myCameraElement = document.getElementById('my_camera');
    if (myCameraElement) {
        // If 'my_camera' exists, attach the webcam
        Webcam.attach('#my_camera');
    } else {
        // If 'my_camera' doesn't exist, handle it (e.g., show an error message)
        console.error('Element with ID "my_camera" not found in the DOM.');
    }

    function take_snapshot() {
        // Show the loader
        $("#loader").show();
        startLoadingAnimation();
        Webcam.snap(function (data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '';
                // Hide the loader once the image is captured
               
        });
    }
    function startLoadingAnimation() {
    // Your loading animation code goes here
    var circle = document.getElementById('pink-halo');
    var myTimer = document.getElementById('myTimer');
    var t = 5;
    var interval = 30;
    var angle = 0;
    var angle_increment = 360/t;
    var intervalCounter = 0;

    window.timer = window.setInterval(function () {
        intervalCounter ++;    
        circle.setAttribute("stroke-dasharray", angle + ", 361");
        // Change stroke color (e.g., to red)
        circle.setAttribute("stroke", "blue");

        myTimer.innerHTML = t - parseInt((angle/360)*t);

        if (angle >= 360) {
            window.clearInterval(window.timer);
        }

        angle += angle_increment/(1000/interval);
    }.bind(this), interval);
}

    function captureAndSubmit() {
        take_snapshot();

        document.getElementById('submitButton').click(); // Trigger form submission
    }
</script>
<script>


function stopLoadingAnimation() {
    // Your code to stop the loading animation goes here
    window.clearInterval(window.timer);
}
</sctipt>

    </body>
</html>
