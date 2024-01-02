

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            overflow: hidden;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(158, 158, 247);
            position: relative;
        }

        .logo img {
            max-width: 700px; /* Adjust the size as needed */
            max-height: 700px; /* Adjust the size as needed */
            animation: fadeOut 5s ease forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
          }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="download.jpeg" alt="Logo">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.container').fadeOut(5000, function() {
                window.location.href = 'content.php'; // Redirect after fading out
            });
        });
    </script>
</body>
</html>

