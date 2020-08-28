<?php namespace ProcessWire; ?>



<pw-region id="page-content">	
	<?php
		$home = pages()->get('/');
		echo ukNav($home, [ 'depth' => 4 ])
	?>
</pw-region>	
<!-- bỏ form nhận mẫu và đăng ký nhận thư ở đay -->
<section id="order-sample"></section>
<section id="sign-up-newsletter"></section>
