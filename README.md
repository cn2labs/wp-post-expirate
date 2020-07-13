# Arrr ye post is expired mate! 🦜

This is a small function to check if a WordPress post is expired. Copy the function to your themes functions.php and you're good to go.

Requires a custom 'expiration date' field for every post.

## How to check for expired posts

Inside your loop add the following code:

```php
// loop stuff
if (!post_is_expirate(get_field('name of your expiration date field'))):
  // display your post stuff
endif;
```
