
<?php $__env->startSection('title', 'Checkout'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white"><?php echo e(__('frontstaticword.Checkout')); ?></h1>
    </div>
</section> 
<!-- about-home end -->
<section id="checkout-block" class="checkout-main-block">
	<div class="container">
		<div class="cart-items btm-30">
	        <div class="row">
	        	<div class="col-lg-4 col-sm-4">
	        		<h4 class="cart-heading"><?php echo e(__('frontstaticword.YourItems')); ?>

            		(<?php
                        if(auth::check())
	        			{
	        				$item = App\Cart::where('user_id', Auth::User()->id)->get();
	        			}
	                	else
	                	{
	                		$item = session()->get('cart.add_to_cart');
	                		$item = array_unique($item);
	                	}
                        if(count($item)>0){

                            echo count($item);
                        }
                        else{

                            echo "0";
                        }
                    ?>)
	            	</h4>
	            	<hr>
	            	<div class="checkout-items">
	            		<?php if(isset($one_course) && $one_course == 1): ?>

	            			<div class="row btm-10">
			            		<div class="col-lg-3 col-4">
			            			<div class="checkout-course-img">
			            				<?php if($cart->id != NULL): ?>
				            				<?php if($cart['preview_image'] !== NULL && $cart['preview_image'] !== ''): ?>
				            					<a href="<?php echo e(route('user.course.show',['id' => $cart->id, 'slug' => $cart->slug ])); ?>"><img src="<?php echo e(asset('images/course/'. $cart->preview_image)); ?>" class="img-fluid" alt="course"></a>
				            				<?php else: ?>
												<a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->slug ])); ?>"><img src="<?php echo e(Avatar::create($cart->title)->toBase64()); ?>" class="img-fluid" alt="course"></a>
				            				<?php endif; ?>
			            				<?php else: ?>
			            					<?php if($cart->bundle['preview_image'] !== NULL && $cart->bundle['preview_image'] !== ''): ?>
			                                	<img src="<?php echo e(asset('images/bundle/'. $cart->bundle->preview_image)); ?>" class="img-fluid" alt="blog">
			                                <?php else: ?>
			                                	<img src="<?php echo e(Avatar::create($cart->bundle->title)->toBase64()); ?>" class="img-fluid" alt="blog">
			                                <?php endif; ?>
		                                <?php endif; ?>
			            			</div>
			            		</div>
			            		<div class="col-lg-9 col-8">
			            			<ul>
			            				<?php if($cart->id != NULL): ?>
			            					<li class="checkout-course-title"><a href="<?php echo e(route('user.course.show',['id' => $cart->id, 'slug' => $cart->slug ])); ?>"><?php echo e(str_limit($cart->title, $limit =35 , $end = '...')); ?></a></li>
			            				<?php else: ?>
			            					<li class="checkout-course-title"><a href="<?php echo e(route('user.course.show',['id' => $cart->bundle->id, 'slug' => $cart->bundle->slug ])); ?>"><?php echo e(str_limit($cart->bundle->title, $limit =35 , $end = '...')); ?></a></li>
			            				<?php endif; ?>
			            				<li class="checkout-course-user">By <?php echo e($cart->user->fname); ?></li>
			            				
		                                <?php if($cart->discount_price == !NULL): ?>
		                                	
			            					<li class="checkout-course-price"><b><?php echo e(currency($cart->discount_price, $from = $currency->code, $to = $currency->code, $format = true)); ?></b>  
			            						<s><?php echo e(currency($cart->price, $from = $currency->code, $to = $currency->code, $format = true)); ?> </s></li>
			            					
			            				<?php else: ?>
			            					
			            					<li class="checkout-course-price"><b><?php echo e(currency($cart->price, $from = $currency->code, $to = $currency->code, $format = true)); ?></b></li>
			            					
			            				<?php endif; ?>
			            			</ul>
			            		</div>
			            	</div>
	            		<?php else: ?>
	            		
	            		<?php if(auth()->guard()->check()): ?>
	            		<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            	<div class="row btm-10">
			            		<div class="col-lg-3 col-4">
			            			<div class="checkout-course-img">
			            				<?php if($cart->course_id != NULL): ?>
				            				<?php if($cart->courses['preview_image'] !== NULL && $cart->courses['preview_image'] !== ''): ?>
				            					<a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><img src="<?php echo e(asset('images/course/'. $cart->courses->preview_image)); ?>" class="img-fluid" alt="course"></a>
				            				<?php else: ?>
												<a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><img src="<?php echo e(Avatar::create($cart->courses->title)->toBase64()); ?>" class="img-fluid" alt="course"></a>
				            				<?php endif; ?>
			            				<?php else: ?>
			            					<?php if($cart->bundle['preview_image'] !== NULL && $cart->bundle['preview_image'] !== ''): ?>
			                                	<img src="<?php echo e(asset('images/bundle/'. $cart->bundle->preview_image)); ?>" class="img-fluid" alt="blog">
			                                <?php else: ?>
			                                	<img src="<?php echo e(Avatar::create($cart->bundle->title)->toBase64()); ?>" class="img-fluid" alt="blog">
			                                <?php endif; ?>
		                                <?php endif; ?>
			            			</div>
			            		</div>
			            		<div class="col-lg-9 col-8">
			            			<ul>
			            				<?php if($cart->course_id != NULL): ?>
			            					<li class="checkout-course-title"><a href="<?php echo e(route('user.course.show',['id' => $cart->courses->id, 'slug' => $cart->courses->slug ])); ?>"><?php echo e(str_limit($cart->courses->title, $limit =35 , $end = '...')); ?></a></li>
			            				<?php else: ?>
			            					<li class="checkout-course-title"><a href="<?php echo e(route('user.course.show',['id' => $cart->bundle->id, 'slug' => $cart->bundle->slug ])); ?>"><?php echo e(str_limit($cart->bundle->title, $limit =35 , $end = '...')); ?></a></li>
			            				<?php endif; ?>
			            				<li class="checkout-course-user">By <?php echo e($cart->user->fname); ?></li>
		                                <?php if(isset($cart->courses)): ?>
			            					<li class="checkout-course-price"><b><?php echo e(currency($cart->courses->discount_price, $from = $currency->code, $to = $currency->code, $format = true)); ?></b>  <s><?php echo e(currency($cart->courses->price, $from = $currency->code, $to = $currency->code, $format = true)); ?></s></li>
			            					
			            				<?php else: ?>
			            					<li class="checkout-course-price"><b><?php echo e(currency($cart->courses->price, $from = $currency->code, $to = $currency->code, $format = true)); ?></b></li>
			            					
			            				<?php endif; ?>
			            			</ul>
			            		</div>
			            	</div>
	            		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	            		<?php endif; ?>

	            		<?php endif; ?>

	            	</div>
					<?php if(count($item)>0): ?>
						<div class="cart-total">
							<?php
								if(auth::check())
                                {
                                    $cartitems = App\Cart::where('user_id', Auth::User()->id)->first();
                                }
                                else
                                {
                                    $cartitems = session()->get('cart.add_to_cart');
                                }
							?>
							<?php if($cartitems == NULL): ?>
								<?php echo e(__('frontstaticword.empty')); ?>

							<?php else: ?>

								<div class="cart-price-detail">
									<h4 class="cart-heading"><?php echo e(__('frontstaticword.Total')); ?>:</h4>
									<ul>

										<li><?php echo e(__('frontstaticword.TotalPrice')); ?><span class="categories-count"><?php echo e(currency($price_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></span></li>

										<li><?php echo e(__('frontstaticword.OfferDiscount')); ?><span class="categories-count">-&nbsp;<?php echo e(currency($price_total - $offer_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></span></li>


										<li><?php echo e(__('frontstaticword.DiscountPercent')); ?><span class="categories-count"><?php echo e(round($offer_percent, 0)); ?>% <?php echo e(__('frontstaticword.off')); ?></span></li>
										<hr>

										<li class="cart-total-two"><b><?php echo e(__('frontstaticword.Total')); ?>:<span class="categories-count"><?php echo e(currency($cart_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></span></li>

									</ul>
								</div>


								<div class="course-rate">


									<div class="checkout-btn">

										<?php if(round($cart_total) == 0): ?>

											<a href="<?php echo e(url('free/enroll',$cart_total)); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>

										<?php endif; ?>



									</div>
								</div>
							<?php endif; ?>
						</div>
						<hr>
						<?php if(auth()->guard()->check()): ?>
							<div class="coupon-apply">
								<form id="cart-form" method="post" action="<?php echo e(url('apply/coupon')); ?>"
									  data-parsley-validate class="form-horizontal form-label-left">
									<?php echo e(csrf_field()); ?>


									<div class="row no-gutters">
										<div class="col-lg-9 col-9">
											<input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
											<input type="text" name="coupon" value="" placeholder="Enter Coupon" />
										</div>
										<div class="col-lg-3 col-3">
											<button data-purpose="coupon-submit" type="submit" class="btn btn-primary"><span><?php echo e(__('frontstaticword.Apply')); ?></span></button>
										</div>
									</div>
								</form>
							</div>
						<?php endif; ?>

						<?php if(Session::has('fail')): ?>
							<div class="alert alert-danger alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<?php echo e(Session::get('fail')); ?>

							</div>
						<?php endif; ?>
						<?php if(Session::has('coupanapplied')): ?>
							<form id="demo-form2" method="post" action="<?php echo e(route('remove.coupon', Session::get('coupanapplied')['cpnid'])); ?>">
								<?php echo e(csrf_field()); ?>


								<div class="remove-coupon">
									<button type="submit" class="btn btn-primary" title="Remove Coupon"><i class="fa fa-times icon-4x" aria-hidden="true"></i></button>
								</div>
							</form>
							<div class="coupon-code">
								<?php echo e(Session::get('coupanapplied')['msg']); ?>

							</div>
						<?php endif; ?>
					<?php endif; ?>

				</div>
	            <div class="col-lg-8 col-sm-8">
	            	<div class="checkout-pricelist">
		            	<ul>
		            		<?php
		            		$currency = App\Currency::where('default', '=', '1')->first();
		            		?>
		            		
		            		<li><h1 class="checkout-total"><?php echo e(__('frontstaticword.Total')); ?>: <?php echo e(currency($cart_total, $from = $currency->code, $to = $currency->code, $format = true)); ?></h1></li>

		            		<li><div class="checkout-price"><s><?php echo e(currency($price_total, $from = $currency->code, $to = $currency->code, $format = true)); ?></s></div></li>
		            		
		            		<li><div class="checkout-percent"><?php echo e(round($offer_percent, 0)); ?>% Off</div></li>

		            		<?php
		            			if($cart_total != '' || $cart_total != 0){
		            				$mainpay = round($cart_total,2);
		            			}else{
		            				$mainpay = round($cart_total,2);
		            			}
		            		?>
		            		
		            	</ul>
	            	</div>
	            	<div class="checkout-pricelist">
	            		(Equivalent to your currency <?php echo e(currency($cart_total, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?>)
	            		<br>
	            	</div>
	            	<?php  			
        				$secureamount = Crypt::encrypt($mainpay);
        			?>

        			<div class="payment-gateways">
	            		<div id="accordion" class="second-accordion">
	            		 	
	            		 
	            			<?php if(isset($cart->bundle->is_subscription_enabled) && $cart->bundle->is_subscription_enabled == '1'): ?>

	            			<?php if($gsetting->stripe_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingThree">
							        <div class="panel-title">
							            <label for='r13'>
							              <input type='radio' id='r13' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"></a>
							              <img src="<?php echo e(url('images/payment/stripe.png')); ?>" class="img-fluid" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseThree" class="panel-collapse collapse in">
							        <div class="card-body">
								      
									    <div class="creditCardForm">
										  
										    <div class="payment">
										        <form accept-charset="UTF-8" action="<?php echo e(route('stripe.pay')); ?>" method="POST"autocomplete="off">
										    		<?php echo e(csrf_field()); ?>

										            <div class="form-group owner">
										                <label for="owner">Owner</label>
										                <input type="text" class="form-control" id="owner" required>
										            </div>
										            <div class="form-group CVV">
										                <label for="cvv">CVV</label>
										                <input type="text" class="form-control" id="cvv" name="ccv" required>
										            </div>
										            <div class="form-group" id="card-number-field">
										                <label for="cardNumber">Card Number</label>
										                <input type="text" class="form-control" id="cardNumber" name="card_no" required>
										            </div>
										            <div class="form-group" id="expiration-date">
										                <label>Expiration Date</label>
										                <select name="expiry_month" required> 
										                    <option value="01">January</option>
										                    <option value="02">February </option>
										                    <option value="03">March</option>
										                    <option value="04">April</option>
										                    <option value="05">May</option>
										                    <option value="06">June</option>
										                    <option value="07">July</option>
										                    <option value="08">August</option>
										                    <option value="09">September</option>
										                    <option value="10">October</option>
										                    <option value="11">November</option>
										                    <option value="12">December</option>
										                </select>
										                <select name="expiry_year" required>
										                    <option value="19">2019</option>
										                    <option value="20">2020</option>
										                    <option value="21">2021</option>
										                    <option value="22">2022</option>
										                    <option value="23">2023</option>
										                    <option value="24">2024</option>
										                    <option value="25">2025</option>
										                    <option value="26">2026</option>
										                    <option value="27">2027</option>
										                    <option value="28">2028</option>
										                    <option value="29">2029</option>
										                    <option value="30">2030</option>
										                    <option value="31">2031</option>
										                    <option value="32">2032</option>
										                </select>
										            </div>
										            <div class="form-group" id="credit_cards">
										                <img src="<?php echo e(url('images/payment/visa.jpg')); ?>" id="visa">
										                <img src="<?php echo e(url('images/payment/mastercard.jpg')); ?>" id="mastercard">
										                <img src="<?php echo e(url('images/payment/amex.jpg')); ?>" id="amex">
										            </div>

										            <input type="hidden" name="amount"  value="<?php echo e($mainpay); ?>" />

										            <button class='form-control btn btn-default' type='submit'><?php echo e(__('frontstaticword.Proceed')); ?></button>
										        </form>
										    </div>
										</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>
						

							<?php else: ?>


							<?php if($gsetting->stripe_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingThree">
							        <div class="panel-title">
							            <label for='r13'>
							              <input type='radio' id='r13' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"></a>
							              <img src="<?php echo e(url('images/payment/stripe.png')); ?>" class="img-fluid" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseThree" class="panel-collapse collapse in">
							        <div class="card-body">
								      
									    <div class="creditCardForm">
										  
										    <div class="payment">
										        <form accept-charset="UTF-8" action="<?php echo e(route('stripe.pay')); ?>" method="POST"autocomplete="off">
										    		<?php echo e(csrf_field()); ?>

										            <div class="form-group owner">
										                <label for="owner">Owner</label>
										                <input type="text" class="form-control" id="owner" required>
										            </div>
										            <div class="form-group CVV">
										                <label for="cvv">CVV</label>
										                <input type="text" class="form-control" id="cvv" name="ccv" required>
										            </div>
										            <div class="form-group" id="card-number-field">
										                <label for="cardNumber">Card Number</label>
										                <input type="text" class="form-control" id="cardNumber" name="card_no" required>
										            </div>
										            <div class="form-group" id="expiration-date">
										                <label>Expiration Date</label>
										                <select name="expiry_month" required> 
										                    <option value="01">January</option>
										                    <option value="02">February </option>
										                    <option value="03">March</option>
										                    <option value="04">April</option>
										                    <option value="05">May</option>
										                    <option value="06">June</option>
										                    <option value="07">July</option>
										                    <option value="08">August</option>
										                    <option value="09">September</option>
										                    <option value="10">October</option>
										                    <option value="11">November</option>
										                    <option value="12">December</option>
										                </select>
										                <select name="expiry_year" required>
										                    <option value="19">2019</option>
										                    <option value="20">2020</option>
										                    <option value="21">2021</option>
										                    <option value="22">2022</option>
										                    <option value="23">2023</option>
										                    <option value="24">2024</option>
										                    <option value="25">2025</option>
										                    <option value="26">2026</option>
										                    <option value="27">2027</option>
										                    <option value="28">2028</option>
										                    <option value="29">2029</option>
										                    <option value="30">2030</option>
										                    <option value="31">2031</option>
										                    <option value="32">2032</option>
										                </select>
										            </div>
										            <div class="form-group" id="credit_cards">
										                <img src="<?php echo e(url('images/payment/visa.jpg')); ?>" id="visa">
										                <img src="<?php echo e(url('images/payment/mastercard.jpg')); ?>" id="mastercard">
										                <img src="<?php echo e(url('images/payment/amex.jpg')); ?>" id="amex">
										            </div>

										            <input type="hidden" name="amount"  value="<?php echo e($mainpay); ?>" />

										            <button class='form-control btn btn-default' type='submit'><?php echo e(__('frontstaticword.Proceed')); ?></button>
										        </form>
										    </div>
										</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>


	            			<?php if($gsetting->paypal_enable == 1): ?>
						    <div class="card">
	                            <div class="card-header" id="headingOne">
							        <div class="panel-title">
							            <label for='r11'>
								            <input type='radio' id='r11' name='occupation' value='Working' required />
								            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
								              
								            <img src="<?php echo e(url('images/payment/paypal2.png')); ?>" class="img-fluid" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseOne" class="panel-collapse collapse in">
							        <div class="card-body">
		                            
		                            	<div class="payment-proceed-btn">
		                            		<form action="<?php echo e(route('payWithpaypal')); ?>" method="POST" autocomplete="off">
		                            			<?php echo csrf_field(); ?>
		                            			
		                         				<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>"/>
		                            			<button class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
		                            		</form>
		                            		
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>


							<?php if($gsetting->instamojo_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingTwo">
							        <div class="panel-title">
							            <label for='r12'>
								            <input type='radio' id='r12' name='occupation' value='Working' required />
								            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>

							            	<img src="<?php echo e(url('images/payment/instamojo.png')); ?>" class="img-fluid-img" alt="course">
							            </label>
							        </div>
						    	</div>
							    <div id="collapseTwo" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">

		                            		<form action="<?php echo e(url('pay')); ?>" method="POST" name="laravel_instamojo" autocomplete="off">
											    <?php echo e(csrf_field()); ?>

											    
											     <div class="row">
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Name</strong>
											                <input type="text" name="name" class="form-control" value="<?php echo e(Auth::user()->fname); ?>" placeholder="Enter Name" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Mobile Number</strong>
											                <input type="text" name="mobile_number" class="form-control" value="<?php echo e(Auth::user()->mobile); ?>" placeholder="Enter Mobile Number" required autocomplete="off">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Email Id</strong>
											                <input type="email" name="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" placeholder="Enter Email id" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <input type="hidden" name="amount" class="form-control" placeholder="" value="<?php echo e($mainpay); ?>" readonly="">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <button class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											        </div>
											    </div>
											     
											</form>
		                            		
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>

							

							<?php if($gsetting->enable_omise == 1 && $currency->code == 'THB'): ?>

							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='omise'>
											<input type='radio' id='omise' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#omise_panel"></a>

											<img src="<?php echo e(url('images/payment/omise.svg')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="omise_panel" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<form id="checkoutForm" method="POST" action="<?php echo e(route('pay.via.omise')); ?>">
												<?php echo csrf_field(); ?>
												<input type="hidden" name="amount" value="<?php echo e($mainpay); ?>" />
												<script type="text/javascript" src="https://cdn.omise.co/omise.js"
													data-key="<?php echo e(env('OMISE_PUBLIC_KEY')); ?>"
													data-amount="<?php echo e($mainpay*100); ?>"
													data-frame-label="<?php echo e(config('app.name')); ?>"
													data-image="<?php echo e(url('images/logo/'.$gsetting->logo)); ?>"
													data-currency="<?php echo e($currency->code); ?>"
													data-default-payment-method="credit_card">
												</script>
											</form>


										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>


							<?php if($gsetting->razorpay_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingSix">
							        <div class="panel-title">
							            <label for='r16'>
							              <input type='radio' id='r16' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"></a>
							              <img src="<?php echo e(url('images/payment/razorpay.png')); ?>"  class="img-fluid" alt="course"> 
							            </label>
							            
							        </div>
						    	</div>
							    <div id="collapseSix" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">
		                            		<form action="<?php echo e(route('dopayment')); ?>" method="POST">
		                            			<?php echo csrf_field(); ?>
		                            			
		                         				<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>"/>
		                         				


		                         				<script
												    src="https://checkout.razorpay.com/v1/checkout.js"
												    data-key="<?php echo e(env('RAZORPAY_KEY')); ?>"
												    data-amount= "<?php echo e($mainpay*100); ?>"
												    data-currency="<?php echo e($currency->code); ?>"
												    data-order_id=""
												    data-buttontext="Proceed"
												    data-name="<?php echo e($gsetting->project_title); ?>"
												    data-description=""
												    data-image="<?php echo e(asset('images/logo/'.$gsetting->logo)); ?>"
												    data-prefill.name="XYZ"
												    data-prefill.email="info@example.com"
												    data-theme.color="#F44A4A"
												></script>
		                            		</form>
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>


							<?php if($gsetting->paystack_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingSeven">
							        <div class="panel-title">
							            <label for='r14'>
							              <input type='radio' id='r14' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"></a>
							              <img src="<?php echo e(url('images/payment/paystack.png')); ?>"  class="img-fluid" alt="course"> 
							            </label>
							        </div>
						    	</div>
							    <div id="collapseSeven" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">
		                            		<form method="POST" action="<?php echo e(route('paywithpaystack')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
										        <div class="row">
										          <div class="col-md-8 col-md-offset-2">

										          	<input type="hidden" name="quantity" value="1">
										            
										            <input type="hidden" name="email" value="<?php echo e(Auth::User()->email); ?>"> 
										            <input type="hidden" name="amount" value="<?php echo e($mainpay*100); ?>">
										            <input type="hidden" name="currency" value="<?php echo e($currency->code); ?>">
										            <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
										            <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
										            <input type="hidden" name="key" value="<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"> 
										            <?php echo e(csrf_field()); ?> 

										             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 

										            <p>
										              <button class="btn btn-primary " type="submit" value="Pay Now"><?php echo e(__('frontstaticword.Proceed')); ?></button>
										            </p>
										          </div>
										        </div>
											</form>
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>


							<?php if($gsetting->paytm_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingFour">
							        <div class="panel-title">
							            <label for='r17'>
							              <input type='radio' id='r17' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"></a>
							              <img src="<?php echo e(url('images/payment/paytm.png')); ?>"  class="img-fluid" alt="course"> 
							            </label>
							        </div>
						    	</div>
							    <div id="collapseFour" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">
		                            		<form method="post" action="<?php echo e(url('/paywithpayment')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
		                            			<?php echo csrf_field(); ?>

										            <input type="hidden" name="user_id" value="<?php echo e(Auth::User()->id); ?>"/>

										          
												    <div class="row">
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Name</strong>
											                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo e(Auth::User()->fname); ?>" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Mobile Number</strong>
											                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo e(Auth::User()->mobile); ?>" required autocomplete="off">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Email Id</strong>
											                <input type="email" name="email" class="form-control" value="<?php echo e(Auth::User()->email); ?>" placeholder="Enter Email id" required>
											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <input type="hidden" name="amount" class="form-control" placeholder="" value="<?php echo e($mainpay); ?>" readonly="">
											            </div>
											        </div>
											        <div class="col-md-12">
											            <button class="btn btn-primary" title="checkout" type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											        </div>
											    </div>
										          
											</form>
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>

							<?php
								$banktransfer = App\BankTransfer::first();
							?>
							<?php if(isset($banktransfer)): ?>
							<?php if($banktransfer->bank_enable == '1'): ?>
							<div class="card">
	                            <div class="card-header" id="headingEight">
							        <div class="panel-title">
							            <label for='r18'>
							              <input type='radio' id='r18' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight"></a>
							              &emsp;<b><?php echo e(__('frontstaticword.banktransfer')); ?></b>
							            </label>
							        </div>
						    	</div>
							    <div id="collapseEight" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">
		                            		<form method="POST" action="<?php echo e(url('process/banktransfer')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form" enctype="multipart/form-data">
		                            			<?php echo csrf_field(); ?>
										        <div class="row">
										          <div class="col-md-8 col-md-offset-2">

										          	<input type="file" name="proof" required />
										          	<br>
										            <small>(<?php echo e(__('frontstaticword.PleaseDocument')); ?>)</small>
										            
									            	<input type="hidden" name="amount" value="<?php echo e($mainpay); ?>"/>

										            <input type="hidden" name="user_id" value="<?php echo e(Auth::User()->id); ?>"/>

										            <input type="hidden" name="fname" value="<?php echo e(Auth::User()->fname); ?>"/>

										             <input type="hidden" name="mobile" value="<?php echo e(Auth::User()->mobile); ?>"/>

										            <input type="hidden" name="email" value="<?php echo e(Auth::User()->email); ?>"/>


										            <p>
										              <button class="btn btn-primary " type="submit" value="Pay Now"><?php echo e(__('frontstaticword.Proceed')); ?></button>
										            </p>
										          </div>
										        </div>
											</form>

											<div class="card">
											  <div class="card-header">
											    <h5 class="card-title"><?php echo e(__('frontstaticword.banktransferdetail')); ?></h5>
											  </div>
											  <?php
											  	$bankdetail = App\BankTransfer::first();
											  ?>
											  <ul class="list-group list-group-flush">
											    <li class="list-group-item"><b><?php echo e(__('frontstaticword.Accountholdername')); ?>:</b>&nbsp;<?php echo e($bankdetail['account_holder_name']); ?></li>
											    <li class="list-group-item"><b><?php echo e(__('frontstaticword.BankName')); ?>:</b>&nbsp;<?php echo e($bankdetail['bank_name']); ?></li>
											    <li class="list-group-item"><b><?php echo e(__('frontstaticword.BankAcccountNumber')); ?>:</b>&nbsp;<?php echo e($bankdetail['account_number']); ?></li>
											    <?php if(isset($bankdetail['ifcs_code'])): ?>
											    <li class="list-group-item"><b><?php echo e(__('frontstaticword.IFCSCode')); ?></b>:&nbsp;<?php echo e($bankdetail['ifcs_code']); ?></li>
											    <?php endif; ?>
											    <?php if(isset($bankdetail['swift_code'])): ?>
											    <li class="list-group-item"><b><?php echo e(__('frontstaticword.SwiftCode')); ?></b>:&nbsp;<?php echo e($bankdetail['swift_code']); ?></li>
											    <?php endif; ?>
											  </ul>
											</div>
		                            	</div>
							        </div>
							    </div>
							</div>
							<?php endif; ?>
							<?php endif; ?>

							<?php if($gsetting->enable_payu == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='ppay'>
											<input type='radio' id='ppay' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#payupay"></a>

											<img src="<?php echo e(url('images/payment/payumoney.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="payupay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">
											<form action="<?php echo e(route('paywithpayu')); ?>" method="POST" autocomplete="off">
												<?php echo csrf_field(); ?>

												<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>" />

												<div class="form-group">
													<label>Email : <span class="text-red">*</span></label>
													<input required="" name="email" type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" placeholder="enter email">
												</div>

												<div class="form-group">
													<label>Phone : <span class="text-red">*</span></label>
													<input required="" name="phone" type="text" class="form-control" value="<?php echo e(Auth::user()->mobile); ?>" placeholder="enter valid phone no">
												</div>

												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php if($gsetting->enable_cashfree == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='cpay'>
											<input type='radio' id='cpay' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#cashfree_pay"></a>

											<img src="<?php echo e(url('images/payment/cashfree.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="cashfree_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">
											<form action="<?php echo e(route('cashfree.pay')); ?>" method="POST" autocomplete="off">
												<?php echo csrf_field(); ?>

												<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>" />

												<div class="form-group">
													<label>Email : <span class="text-red">*</span></label>
													<input required="" name="email" type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" placeholder="enter email">
												</div>

												<div class="form-group">
													<label>Phone : <span class="text-red">*</span></label>
													<input required="" name="phone" type="text" class="form-control" value="<?php echo e(Auth::user()->mobile); ?>" placeholder="enter valid phone no">
												</div>

												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php if($gsetting->enable_moli == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='mpay'>
											<input type='radio' id='mpay' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#moli_pay"></a>

											<img src="<?php echo e(url('images/payment/moli.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="moli_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">
											<form action="<?php echo e(route('moli.pay')); ?>" method="POST" autocomplete="off">
												<?php echo csrf_field(); ?>

												<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>" />

												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php if($gsetting->enable_skrill == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='skpay'>
											<input type='radio' id='skpay' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#sk_pay"></a>

											<img src="<?php echo e(url('images/payment/skrill.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="sk_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">
											<form action="<?php echo e(route('skrill.pay')); ?>" method="POST" autocomplete="off">
												<?php echo csrf_field(); ?>

												<input name="pay_to_email" type="hidden" value="<?php echo e(env('SKRILL_MERCHANT_EMAIL')); ?>">

												<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>" />

												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php if($gsetting->enable_rave == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='rpay'>
											<input type='radio' id='rpay' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#rave_pay"></a>

											<img src="<?php echo e(url('images/payment/rave.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="rave_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<?php
											$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
											array('metaname' => 'size', 'metavalue' => 'small'));

											?>

											<form method="POST" action="<?php echo e(route('flutterrave.pay')); ?>" id="paymentForm">
												<?php echo e(csrf_field()); ?>

												<input type="hidden" name="amount"
													value="<?php echo e(Crypt::decrypt($secureamount)); ?>" />
												
												<input required="" class="form-control" type="hidden" name="email"
													value="<?php echo e(Auth::user()->email); ?>" />
												<input type="hidden" name="name"
													value="<?php echo e(Auth::user()->fname); ?>" />
												
												<input type="hidden" name="phone"
													value="<?php echo e(Auth::user()->mobile); ?>" />
												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>

							<?php
	                            $order_id = uniqid();
	                        ?>

							<?php if($gsetting->enable_payhere == 1): ?>
							<div class="card">
								<div class="card-header" id="headingten">
									<div class="panel-title">
										<label for='payhere'>
											<input type='radio' id='payhere' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#payhere_pay"></a>


											<img src="<?php echo e(url('images/payment/payhere.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="payhere_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<?php if(env('PAYHERE_MODE') == 'sandbox'): ?>
												<?php
												$action = 'https://sandbox.payhere.lk/pay/checkout';
												?>
											<?php else: ?>
												<?php
												$action = 'https://www.payhere.lk/pay/checkout';
												?>

											<?php endif; ?>

											<form method="post" action="<?php echo e($action); ?>" >  

									            <input type="hidden" name="merchant_id" value="<?php echo e(env('PAYHERE_MERCHANT_ID')); ?>">    <!-- Replace your Merchant ID -->
									            <input type="hidden" name="return_url" value="<?php echo e(route ( 'payhere.returnUrl' )); ?>">
									            <input type="hidden" name="cancel_url" value="<?php echo e(route ( 'payhere.cancelUrl' )); ?>">
									            <input type="hidden" name="notify_url" value="<?php echo e(route ( 'payhere.notifyUrl' )); ?>">  

									            <input hidden type="text" name="order_id" value="<?php echo e($order_id); ?>">
									            <input hidden type="text" name="items" value="<?php echo e($order_id); ?>">
									            <input hidden type="text" name="currency" value="LKR">
									            <input hidden type="text" name="amount" value="<?php echo e(Crypt::decrypt($secureamount)); ?>"> 

									            
									            <input hidden type="text" name="first_name" value="<?php echo e(Auth::user()->fname); ?>">
									            <input hidden type="text" name="last_name" value="<?php echo e(Auth::user()->lname); ?>">
									            <input hidden type="text" name="email" value="<?php echo e(Auth::user()->email); ?>">
									            <input hidden type="text" name="phone" value="<?php echo e(isset(Auth::user()['mobile'])); ?>">
									            <input hidden type="text" name="address" value=" <?php echo e(isset(Auth::user()['address'])); ?>">
									            <input type="hidden" name="city" value="<?php echo e(isset(Auth::user()->state['name'])); ?>">
									            <input type="hidden" name="country" value="<?php echo e(isset(Auth::user()->country['name'])); ?>">

									        

                            					<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?>

												</button>
									        </form> 

											

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>



							<?php
	                            $conversation_id = uniqid();
	                        ?>

	                        <?php if($gsetting->iyzico_enable == 1): ?>

							<div class="card">
								<div class="card-header" id="headinggodvf">
									<div class="panel-title">
										<label for='izyy'>
											<input type='radio' id='izyy' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#izyy_pay"></a>


											<img src="<?php echo e(url('images/payment/iyzico.png')); ?>" class="img-fluid" alt="iyzipay">
										</label>
									</div>
								</div>
								<div id="izyy_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<form action="<?php echo e(route('izy.pay')); ?>" method="POST" autocomplete="off">
												<?php echo csrf_field(); ?>



												<div class="row">
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Email</strong>
											                <input type="text" name="email" class="form-control" value="email@email.com"  placeholder="email@email.com" required autocomplete="off">

											            </div>
											        </div>
											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Mobile Number</strong>
											                <input type="text" name="mobile" class="form-control" value="+905350000000" placeholder="+905350000000" required autocomplete="off">
											            </div>
											        </div>

											        <div class="col-md-12">
											            <div class="form-group">
											                <strong>Identity number</strong>
											                <input type="text" name="identity_number" class="form-control" value="74300864791" placeholder="74300864791" required autocomplete="off">

											                <small class="text-muted"><i class="fa fa-question-circle"></i>TCKN for Turkish merchants, passport number for foreign merchants</small>
											            </div>
											        </div>
											    </div>

												<input type="hidden" name="conversation_id" value="<?php echo e($conversation_id); ?>" />
												<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>" />
												<input type="hidden" name="language" value="<?php echo e($secureamount); ?>" />
												<input type="hidden" name="currency" value="<?php echo e($currency->code); ?>" />
												<input type="hidden" name="fname" value="<?php echo e(Auth::user()->fname); ?>" />
												<input type="hidden" name="lname" value="<?php echo e(Auth::user()->lname); ?>" />
												<input type="hidden" name="mobile" value="<?php echo e(Auth::user()->mobile); ?>" />

												<input type="hidden" name="address" value="<?php echo e(Auth::user()->address); ?>" />
												<input type="hidden" name="city" value="<?php echo e(isset(Auth::user()->city['name'])); ?>" />
												<input type="hidden" name="state" value="<?php echo e(isset(Auth::user()->state['name'])); ?>" />
												<input type="hidden" name="country" value="<?php echo e(isset(Auth::user()->country['name'])); ?>" />
												<input type="hidden" name="pincode" value="<?php echo e(Auth::user()->pin_code); ?>" />

												<input type="hidden" name="language" value="<?php echo e(Session::get('changed_language')); ?>" />
												

												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>
											

										</div>
									</div>
								</div>
							</div>

							<?php endif; ?>


							<?php if($gsetting->ssl_enable == 1): ?>
							<div class="card">
								<div class="card-header" id="headingssl">
									<div class="panel-title">
										<label for='ssl'>
											<input type='radio' id='ssl' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#ssl_pay"></a>


											<img src="<?php echo e(url('images/payment/ssl.png')); ?>" class="img-fluid" alt="sslpay">
										</label>
									</div>
								</div>
								<div id="ssl_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<form action="<?php echo e(route('payvia.sslcommerze')); ?>" method="POST">
					                          <?php echo csrf_field(); ?>
					                          <input type="hidden" name="amount" value="<?php echo e($secureamount); ?>">
					                          <button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?>

												</button>
					                        </form>
											

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>



							<?php
							$manualpay = App\ManualPayment::where('status', '1')->get();
							?>


							<?php $__currentLoopData = $manualpay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="card">
							    <div class="card-header" id="headingManual<?php echo e($manual->id); ?>">
							      <h2 class="mb-0">
							        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseManual<?php echo e($manual->id); ?>" aria-expanded="false" aria-controls="collapseOne">
							          <b><?php echo e($manual->name); ?></b>
							        </button>
							      </h2>
							    </div>

							    <div id="collapseManual<?php echo e($manual->id); ?>" class="collapse" aria-labelledby="headingManual" data-parent="#accordionExample">
							      <div class="card-body">


							        <div class="payment-proceed-btn">
								        <form action="<?php echo e(route('manualpay.checkout')); ?>" method="POST" enctype="multipart/form-data">
			                              	<?php echo csrf_field(); ?>
			                              	<input type="hidden" name="payment_name" value="<?php echo e($manual->name); ?>">
			                              	<input type="hidden" name="amount" value="<?php echo e($secureamount); ?>">

				                            <div class="form-group">
				                                <input type="file" name="proof" required />
									          	<br>
									            <small>(<?php echo e(__('frontstaticword.PleaseDocument')); ?>)</small>

				                            </div>

			                               	<button class="btn btn-primary " type="submit" value="Pay Now"><?php echo e(__('frontstaticword.Proceed')); ?></button>
			                            </form>
			                        </div>
			                        <br>
			                        <br>


			                        <div class="row">
                                
		                                <div class="col-md-12">
		                                  <?php echo $manual->detail; ?>

		                                </div>

		                            </div>
		                             
		                            <?php if($manual->image != '' && file_exists(public_path().'/images/manualpayment/'.$manual->image) ): ?>

		                                <div class="card card-1">
		                                  <div class="text-center card-body">
		                                   
		                                  <img width="300px" height="300px" class="img-fluid" src="<?php echo e(url('images/manualpayment/'.$manual->image)); ?>" alt="<?php echo e($manual->image); ?>">
		                                  </div>
		                                </div>

		                            <?php endif; ?>

			                        

							      </div>
							    </div>
							</div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							

							<?php if($gsetting->aamarpay_enable == 1): ?>
							<div class="card">
								<div class="card-header" id="headingaamar">
									<div class="panel-title">
										<label for='aamar'>
											<input type='radio' id='aamar' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#aamar_pay"></a>


											<img src="<?php echo e(url('images/payment/aamarpay.png')); ?>" class="img-fluid" alt="aamarpay">
										</label>
									</div>
								</div>
								<div id="aamar_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">


											<?php
											$user_name = Auth::user()->fname;
											$user_email = Auth::user()->email;
											$user_mobile = Auth::user()->email;
											?>

											<div class="aamar-pay-btn">
												<?php echo aamarpay_post_button([
												    'cus_name'  => $user_name, // Customer name
												    'cus_email' => $user_email, // Customer email
												    'cus_phone' => $user_mobile // Customer Phone
												], $mainpay, 'Proceed', 'btn btn-sm btn-primary'); ?>

											</div>

											
											

										</div>
									</div>
								</div>
							</div>

							<?php endif; ?>


							


							<?php if($gsetting->braintree_enable == 1): ?>
							<div class="card">
	                            <div class="card-header" id="headingFive">
							        <div class="panel-title">
							            <label for='r15'>
							              <input type='radio' id='r15' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"></a>
							              <img src="<?php echo e(url('images/payment/braintree.png')); ?>" style="margin-left: 15px;" height="30px" width="90px" class="img-fluid-img" alt="course"> 
							            </label>
							            
							        </div>
						    	</div>
							    <div id="collapseFive" class="panel-collapse collapse in">
							        <div class="card-body">
		                            	<div class="payment-proceed-btn">

	                            		<h3 class="plan-dtl-heading">Checkout With Braintree</h3>
               
		                            		

		                            	<form method="post" id="payment-form" action="<?php echo e(url('/checkout')); ?>">
						                    <?php echo csrf_field(); ?>
						                    <section>
						                        <label for="amount">
						                           
						                            <div class="input-wrapper amount-wrapper">
						                                <input type='hidden' id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="<?php echo e($mainpay); ?>">
						                            </div>
						                        </label>

						                        <div class="bt-drop-in-wrapper">
						                            <div id="bt-dropin"></div>
						                        </div>
						                    </section>

						                    <input id="nonce" name="payment_method_nonce" type="hidden" />
						                    <button class="btn btn-primary" type="submit"><span><?php echo e(__('frontstaticword.Proceed')); ?></span></button>
						                </form>

	                            		</div>
							        </div>
							    </div>
							</div>

							<?php endif; ?>


						
					        <?php
							  $wallet_settings = App\WalletSettings::first();
							?>

							<?php if(isset($wallet_settings) && $wallet_settings->status == 1): ?>
							<div class="card">
							    <div class="card-header" id="headingWallet">
							        <div class="panel-title">
							            <label for='wallet'>
							              <input type='radio' id='wallet' name='occupation' value='Working' required />
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseWallet"></a>&emsp;
							               <i class="fas fa-wallet"></i> <b><?php echo e(__('Wallet Checkout')); ?></b>
							            </label>
							            
							        </div>
								  </div>
							    <div id="collapseWallet" class="panel-collapse collapse in">
							        <div class="card-body">
							        	<div class="payment-proceed-btn">

							    		<h3 class="plan-dtl-heading"><?php echo e(__('Checkout With Wallet')); ?></h3>

							        	<?php if(isset(auth()->user()->wallet)): ?>
							            <?php if(auth()->user()->wallet->status == 1): ?>
							                <?php if(round(auth()->user()->wallet->balance) >= sprintf("%.2f",Crypt::decrypt(strip_tags($secureamount)))): ?>	

							                	<form method="post" id="payment-form" action="<?php echo e(url('/checkout/wallet/payment')); ?>">
							                        <?php echo csrf_field(); ?>

							                        <input id="nonce" name="amount" type="hidden" value="<?php echo e(strip_tags($secureamount)); ?>" />
							                       

							                        <button class="btn btn-primary" type="submit"><span><?php echo e(__('frontstaticword.Proceed')); ?></span></button>
							                    </form>
							                <?php else: ?>

							                <h3 class="plan-dtl-heading"><?php echo e(__('Insufficient Wallet Balance')); ?></h3>

							            	 <?php endif; ?>

							             	<?php endif; ?>
							          	<?php endif; ?>

							    		</div>
							        </div>
							    </div>
							</div>

							<?php endif; ?>


					        <?php if(Module::has('MPesa') && Module::find('MPesa')->isEnabled()): ?>
					            <?php echo $__env->make('mpesa::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if($gsetting->payflexi_enable == 1): ?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<div class="panel-title">
										<label for='payflexi'>
											<input type='radio' id='payflexi' name='occupation' value='Working' required />
											<a data-toggle="collapse" data-parent="#accordion" href="#payflexi_pay"></a>

											<img src="<?php echo e(url('images/payment/payflexi.png')); ?>" class="img-fluid"
												alt="course">
										</label>
									</div>
								</div>
								<div id="payflexi_pay" class="panel-collapse collapse in">
									<div class="card-body">

										<div class="payment-proceed-btn">

											<?php
											$array = array('title' => 'Online Course');
											?>

											<form method="POST" action="<?php echo e(route('payflexi.pay')); ?>" id="paymentForm">
												<?php echo e(csrf_field()); ?>

												<input type="hidden" name="key" value="<?php echo e(env('PAYFLEXI_SECRET_KEY')); ?>"> 
												<input type="hidden" name="amount" value="<?php echo e(Crypt::decrypt($secureamount)); ?>" />
												<input type="hidden" name="gateway" value="<?php echo e(env('PAYFLEXI_PAYMENT_GATEWAY')); ?>" />
												<input type="hidden" name="currency" value="<?php echo e($currency->code); ?>" />
												<input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>" />
												<input type="hidden" name="name" value="<?php echo e(Auth::user()->fname . ' ' . Auth::user()->lname); ?>" />
												<input type="hidden" name="meta" value="<?php echo e(json_encode($array)); ?>">
												<input type="hidden" name="phone" value="<?php echo e(Auth::user()->mobile); ?>" />
												<button class="btn btn-primary" title="checkout"
													type="submit"><?php echo e(__('frontstaticword.Proceed')); ?></button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>


							<?php if(Module::has('Esewa') && Module::find('Esewa')->isEnabled()): ?>
					            <?php echo $__env->make('esewa::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>


					        <?php if(Module::has('Smanager') && Module::find('Smanager')->isEnabled()): ?>
					            <?php echo $__env->make('smanager::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>


					        <?php if(Module::has('Paytab') && Module::find('Paytab')->isEnabled()): ?>
					            <?php echo $__env->make('paytab::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>


					        <?php if(Module::has('DPOPayment') && Module::find('DPOPayment')->isEnabled()): ?>
					            <?php echo $__env->make('dpopayment::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if(Module::has('AuthorizeNet') && Module::find('AuthorizeNet')->isEnabled()): ?>
					            <?php echo $__env->make('authorizenet::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if(Module::has('Bkash') && Module::find('Bkash')->isEnabled()): ?>
					            <?php echo $__env->make('bkash::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if(Module::has('Midtrains') && Module::find('Midtrains')->isEnabled()): ?>
					            <?php echo $__env->make('midtrains::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if(Module::has('SquarePay') && Module::find('SquarePay')->isEnabled()): ?>
					            <?php echo $__env->make('squarepay::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>

					        <?php if(Module::has('Worldpay') && Module::find('Worldpay')->isEnabled()): ?>
					            <?php echo $__env->make('worldpay::front.checkout_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					        <?php endif; ?>
					    

							
							<?php endif; ?>







							<p>يمكنك الدفع عن طريق فودافون كاش تواصل معنا عن طريق الواتس اب:
							<a class="d-block btn btn-dark" href="https://api.WhatsApp.com/send?phone=+201013540708">+201013540708</a>
							</p>
                        </div>
	            	</div>
	            	
	            </div>
	        </div>
	    </div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>

<script src="<?php echo e(url('js/jquery.payform.min.js')); ?>" charset="utf-8"></script>
<script src="<?php echo e(url('js/script.js')); ?>"></script>





<?php if($gsetting->braintree_enable == 1): ?> 

	<?php
		$gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);

        $token = $gateway->ClientToken()->generate();

	?>

	<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
	 
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo e($token); ?>";

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          paypal: {
            flow: 'vault'
          }
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          else{
	          $('.bt-btn').hide();
	          $('.braintree').show();
	        }
          form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
              if (err) {
                console.log('Request Payment Method Error', err);
                return;
              }

              // Add the nonce to the form and submit
              document.querySelector('#nonce').value = payload.nonce;
              form.submit();
            });
          });
        });
    </script>

<?php endif; ?>

<?php if(config('bkash.ENABLE') == 1 && Module::has('Bkash') && Module::find('Bkash')->isEnabled()): ?>
  
    <?php echo $__env->make("bkash::front.bkashscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php endif; ?>

<?php if(env('MID_TRANS_ENABLE') == 1 && Module::has('Midtrains') && Module::find('Midtrains')->isEnabled()): ?>
  
    <?php echo $__env->make("midtrains::front.midtrans_script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/checkout.blade.php ENDPATH**/ ?>