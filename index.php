<!-- index.php -->
<?php include 'includes/header.php'; ?>
<main>
    <section class="hero">
        <h2>Welcome to Healthy Living</h2>
        <p>Discover tips and advice on how to live a healthier life.</p>
        <a href="about.php" class="cta-button">Learn More</a>
    </section>
    <section class="content">
        <h3>Latest Articles</h3>
        <p>Stay tuned for our latest articles on various topics ranging from nutrition to fitness. We aim to keep you informed and engaged with high-quality content.</p>
        <img src="https://openoregon.pressbooks.pub/app/uploads/sites/98/2020/09/image1-2.jpg" alt="Latest Articles" style="width: 600px;% height:auto">
    </section>
    <section class="content">
        <h3>Join Our Community</h3>
        <p>Become a part of our growing community. Connect with others, share your thoughts, and participate in discussions. Together, we can create a vibrant and supportive environment.</p>
        <img src="https://www.safetynews.co.nz/wp-content/uploads/2017/06/people-exercising.jpg" alt="Community" style="width: 600px; height:auto;">
    </section>
    <section class="content">
        <h3>Healthy Recipes</h3>
        <p>Explore our collection of healthy recipes that are both delicious and nutritious. Whether you're looking for breakfast, lunch, or dinner ideas, we've got you covered.</p>
        <img src="https://th.bing.com/th/id/OIP.VCuPCVbXNldlAKghZPh_5wAAAA?rs=1&pid=ImgDetMain" alt="Healthy Recipes" style="width: 600px;; height:auto;">
    </section>
    <section class="testimonials">
        <h3>What Our Users Say</h3>
        <div class="testimonial">
            <p>"Healthy Living has transformed my life! The tips and advice are invaluable."</p>
            <p>- Jane Doe</p>
        </div>
        <div class="testimonial">
            <p>"I love the healthy recipes. They are easy to follow and delicious."</p>
            <p>- John Smith</p>
        </div>
    </section>
    <section class="newsletter">
        <h3>Subscribe to Our Newsletter</h3>
        <form action="subscribe.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <button type="submit">Subscribe</button>
            </div>
        </form>
    </section>
    <section class="featured-articles">
        <h3>Featured Articles</h3>
        <article>
            <h4><a href="article1.php">10 Tips for a Healthier Lifestyle</a></h4>
            <p>Discover simple and effective tips to improve your overall health and well-being.</p>
        </article>
        <article>
            <h4><a href="article2.php">The Benefits of Regular Exercise</a></h4>
            <p>Learn about the numerous benefits of incorporating regular exercise into your routine.</p>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>