<?php
// header.php 
?>
<!doctype html>
<style>
.container { display: flex; justify-content: space-between; align-items: center; padding: 0 1rem; }
.main-nav { display: flex; align-items: center; gap: 2rem; }
.main-nav a { text-decoration: none; color: #333; font-weight: 500; }
.signup-btn { background: #007bff; color: white !important; padding: 0.5rem 1.5rem; border-radius: 0.375rem; transition: all 0.2s; min-height: 44px; min-width: 44px; display: inline-flex; align-items: center; justify-content: center; }
.signup-btn:hover, .signup-btn:focus { background: #0056b3; transform: translateY(-1px); outline: 2px solid #007bff; outline-offset: 2px; }
.signup-btn:active { transform: translateY(0); }
@media (max-width: 768px) {
  .main-nav { gap: 1rem; }
  .main-nav a { font-size: 0.9rem; }
  .signup-btn { padding: 0.4rem 1rem; font-size: 0.9rem; }
}
@media (max-width: 480px) {
  .container { flex-direction: column; gap: 1rem; padding: 1rem; }
  .main-nav { gap: 0.5rem; }
  .main-nav a { font-size: 0.8rem; }
  .signup-btn { padding: 0.4rem 0.8rem; }
}
</style>
<header class="site-header">
  <div class="container">
    <a href="/" class="brand">
      <img src="/QUIC-7-logo.png" alt="QuickPOS" style="height:48px;max-width:100%;display:block;" />
    </a>
    <nav class="main-nav" role="navigation" aria-label="Main navigation">
      <a href="#features" aria-label="View features section">Features</a>
      <a href="#pricing" aria-label="View pricing section">Pricing</a>
      <a href="#contact" aria-label="View contact section">Contact</a>
      <a href="/signup.php" class="signup-btn" aria-label="Sign up for QuickPOS" role="button" tabindex="0" data-testid="signup-button">Sign Up</a>
    </nav>
  </div>
</header>
