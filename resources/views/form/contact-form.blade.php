<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>

    <form action="/form" method="POST">
        <label>First Name:</label>
        <input type="text" name="firstname" required><br><br>

        <label>Last Name:</label>
        <input type="text" name="lastname" required><br><br>

        <label>Address:</label>
        <textarea name="address" required></textarea><br><br>

        <label>Name:</label>
        <input type="text" name="firstname" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>