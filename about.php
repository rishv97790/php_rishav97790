<!-- about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h2>About Us</h2>
    <p>We are dedicated to providing you with the best tips and advice on healthy living.</p>
    <?php
    $team = [
        ['name' => 'Alice', 'role' => 'Nutritionist'],
        ['name' => 'Bob', 'role' => 'Fitness Trainer'],
        ['name' => 'Charlie', 'role' => 'Wellness Coach']
    ];
    ?>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?php echo $member['name'] . ' - ' . $member['role']; ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>