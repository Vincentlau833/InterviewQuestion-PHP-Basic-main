<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once("info.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Form</title>
    <style>
        button {
            background-color: #04AA6D;
            border: none;
            color: white;
            margin-top: 10px;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 10%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form id="submissionform" method="post">
        <div id="form">
            <label for="username">User Name </label>
            <input type="text" id="username" name="username" required>
            <br/>
            <button type="button" onclick="verifyInput()">Submit</button>
        </div>
        <div id="alert message"></div>
    </form>

    <script src="verify_ajax.js"></script>

</body>
</html>
