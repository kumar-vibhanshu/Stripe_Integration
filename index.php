<!-- /*
 * @Author Kumar Vibhanshu <vibhanshumonty@gmail.com>
 * @Package Stripe Payment Gateway Integration 
 * @Stripe Payment Gateway Integration Integration
 * visit: https://vibhanshumonty.github.io/Stripe_Integration/
*/ -->

<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="Kumar Vibhanshu"
		data-description="Kumar Vibhanshu Desc"
		data-image=""
		data-currency="inr"
		data-email="vibhanshumonty@gmail.com"
	>
	</script>

</form>