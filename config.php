<!-- /*
 * @Author Kumar Vibhanshu <vibhanshumonty@gmail.com>
 * @Package Stripe Payment Gateway Integration 
 * @Stripe Payment Gateway Integration Integration
 * visit: https://vibhanshumonty.github.io/Stripe_Integration/
*/ -->

<?php
require('stripe-php-master/init.php');

// your_publishable_key
$publishableKey="pk_test_51IDVCnKVXgnUuSPOyIA6LRO5dbVQXDQqFiarEY1VT9Pnr4CpkeOQjdjy6oQs5EFWb65n15MZ3Tnm4yN5PFPk8MDv00GqSZClkj";

// your_secret_key
$secretKey="sk_test_51IDVCnKVXgnUuSPOYVf8q78r3iASLcCYCbRLlOYUZ0Idy57AtFghDmr3nJoTHAnv2UWSA5edMwRqhUjmWLnXnoBJ00jcmaJ2O1";

\Stripe\Stripe::setApiKey($secretKey);
?>