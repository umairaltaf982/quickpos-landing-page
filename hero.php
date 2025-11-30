<?php
// hero.php
?>
<section class="hero">
  <div class="hero-content">
    <h1 class="hero-headline">The Last POS System You'll Ever Need</h1>
    <p class="hero-subheadline">Streamline your business with powerful inventory management, real-time analytics, and seamless integrations—all in one intuitive platform.</p>
    <a href="/signup.php" class="cta-btn">Get Started for Free</a>
  </div>
</section>

<style>
.hero { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 4rem 2rem; text-align: center; }
.hero-content { max-width: 800px; margin: 0 auto; }
.hero-headline { font-size: 3rem; font-weight: bold; margin-bottom: 1rem; line-height: 1.2; }
.hero-subheadline { font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9; line-height: 1.5; }
.cta-btn { background: #28a745; color: white; padding: 1rem 2rem; border-radius: 0.5rem; text-decoration: none; font-size: 1.1rem; font-weight: 600; display: inline-block; transition: all 0.2s; }
.cta-btn:hover { background: #218838; transform: translateY(-2px); }
@media (max-width: 768px) {
  .hero-headline { font-size: 2rem; }
  .hero-subheadline { font-size: 1.1rem; }
  .cta-btn { padding: 0.8rem 1.5rem; }
}
</style>