<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            padding: 40px 0;
            display: none; /* Initially hide the container */
            opacity: 0; /* Initially set opacity to 0 */
        }

        /* You can add more styles for other elements as needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Webpage</h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.container').css('display', 'block').animate({ opacity: 1 }, 1000); // Show and fade in the container
        });
    </script>
</body>
</html>
