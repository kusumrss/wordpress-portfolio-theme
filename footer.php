<footer>
    <p>&copy; <?php echo date('Y'); ?> Kusum RS | All Rights Reserved</p>
</footer>

<?php wp_footer(); ?>

<!-- AOS Animation JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Animation speed in ms
        easing: 'ease-in-out',
        once: true // Animate only once while scrolling
    });
</script>
</body>
</html>
