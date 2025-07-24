<?php get_header(); ?>

<!-- Homepage Content -->
<?php if (is_front_page()) : ?>

<!-- Hero Section -->
<div class="hero" data-aos="fade-down">
    <div class="hero-content">
        <h1>Hello, I'm <span class="highlight">Kusum RS</span></h1>
        <p>Aspiring Web Developer | PHP | WordPress | AI Enthusiast</p>
        <div class="hero-buttons" data-aos="zoom-in">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/Kusum_Resume.pdf" class="btn-primary" download>Download Resume</a>
            <a href="https://www.linkedin.com/in/kusumrs89" class="btn-secondary" target="_blank">View LinkedIn</a>
        </div>
    </div>
</div>

<!-- About Me Section -->
<section class="about-section container" data-aos="fade-up">
    <h2>About Me</h2>
    <p>
        I am Kusum RS, currently pursuing a Bachelor of Engineering in Information Science and Engineering at JSS Science and Technology University.
        Passionate about web development and software engineering, with hands-on experience in PHP, WordPress, and JavaScript.    </p>
</section>

<!-- Projects Section -->
<section class="projects-section container" data-aos="fade-up">
    <h2>My Projects</h2>
    <div class="projects-grid">
        <div class="project-card" data-aos="zoom-in">
            <h3>Smart Attendance System</h3>
            <p>AI-powered facial recognition system using AWS Rekognition and Flask to automate attendance marking.</p>
        </div>
        <div class="project-card" data-aos="zoom-in">
            <h3>Finance Tracker Web App</h3>
            <p>A full-stack finance management web application built using ASP.NET Core MVC with an analytics dashboard.</p>
        </div>
        <div class="project-card" data-aos="zoom-in">
            <h3>Delicious Delights</h3>
            <p>An interactive food recipe and ordering website built using HTML, CSS, and JavaScript, later adapted in C#.</p>
        </div>
        <div class="project-card" data-aos="zoom-in">
            <h3>Climate Change Awareness Chatbot</h3>
            <p>An AI-powered chatbot built with advanced language models to spread awareness on climate change issues.</p>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section container" data-aos="fade-up">
    <h2>Skills</h2>
    <ul class="skills-list">
        <li>C++, Java, PHP, WordPress</li>
        <li>JavaScript, HTML, CSS</li>
        <li>Unity (C#), AWS, MySQL</li>
    </ul>
</section>

<!-- Call-To-Action -->
<section class="cta-section container" data-aos="fade-up" style="text-align:center; margin-top:40px;">
    <h2>Interested in Working with Me?</h2>
    <a href="<?php echo site_url('/contact'); ?>" class="btn-primary">Contact Me</a>
</section>

<?php endif; ?>

<!-- Other Pages Content -->
<?php if (!is_front_page()) : ?>
<div class="container" data-aos="fade-up">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>


