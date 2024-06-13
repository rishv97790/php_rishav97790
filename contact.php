<!-- contact.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h2>Contact Us</h2>
    <form action="contact.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // Here you can add code to send the email or save the message to a database
        echo "<p>Thank you, $name. Your message has been received.</p>";
    }
    ?>
</main>
<?php include 'includes/footer.php'; ?>