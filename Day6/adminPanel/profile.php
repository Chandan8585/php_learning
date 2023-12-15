<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Profile</title>
    <style>
    *{
        padding: 0;
        margin:0;
        box-sizing: border-box;
    }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        section {
            padding: 20px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info img {
            border-radius: 50%;
            max-width: 150px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Update Profile Details</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section>


        <h3>Update Profile</h3>
        <form action="update_profile.php" method="post">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="password">New Password:</label>
            <input type="password" name="password" id="password">


            <input type="submit" value="Update Profile">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Admin Panel</p>
    </footer>

</body>
</html>
