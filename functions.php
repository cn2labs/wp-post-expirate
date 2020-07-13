<?php
// Check if a post is expired
function post_is_expired($expirationDate) {
  // Set correct timezone
  date_default_timezone_set('Europe/Berlin');

  // Construct correct expiration date (UTC+2)
  $date = new DateTime($expirationDate);

  // Get current time
  $now = new DateTime();
  
  // Check if the post is expired
  if ($date < $now) {
    return true;
  }
}
?>