<?php
// contact.php
?>
<link rel="stylesheet" href="css/contact.css">
<section id="contact" class="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2 class="contact-title">Get in Touch</h2>
      <p class="contact-subtitle">Have questions about QuickPOS? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
      <div class="contact-details">
        <div class="contact-item">
          <div class="contact-icon">📧</div>
          <div>
            <h4>Email</h4>
            <p>support@quickpos.com</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📞</div>
          <div>
            <h4>Phone</h4>
            <p>+1 (555) 123-4567</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📍</div>
          <div>
            <h4>Address</h4>
            <p>123 Business Ave, Suite 100<br>San Francisco, CA 94102</p>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
      <form class="contact-form" method="POST" action="process-contact.php">
        <div class="form-group">
          <label for="contact-name">Full Name</label>
          <input type="text" id="contact-name" name="name" placeholder="John Doe" required>
        </div>
        <div class="form-group">
          <label for="contact-email">Email Address</label>
          <input type="email" id="contact-email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
          <label for="contact-subject">Subject</label>
          <select id="contact-subject" name="subject" required>
            <option value="">Select a subject</option>
            <option value="sales">Sales Inquiry</option>
            <option value="support">Technical Support</option>
            <option value="billing">Billing Question</option>
            <option value="partnership">Partnership Opportunity</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="contact-message">Message</label>
          <textarea id="contact-message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
        </div>
        <button type="submit" class="contact-btn">Send Message</button>
      </form>
    </div>
  </div>
</section>
