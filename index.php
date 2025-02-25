<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>About Me</title>
    <style>
        body {
            background-color: black;
            color: yellow;
            font-family: 'Jokerman', cursive;
            font-size: larger;
            text-align: center;
        }
        h1 {
            color: lime;
            text-shadow: 3px 3px red;
        }
        a {
            color: cyan;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            border: 2px dotted deeppink;
            padding: 20px;
            width: 40%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My About Me Page</h1>
        <p>Hey there! I'm <strong><?php echo 'Adam'; ?></strong>, a student who loves his course.</p>
        <p>Check out my <a href="https://github.com/Valv3h3ad" target="_blank">GitHub</a> for some <strong>cool</strong> projects!</p>
    </div>
</body>
</html>