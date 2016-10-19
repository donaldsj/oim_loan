<h1 class="cover-heading"><?php echo e(trans('front/errors.error-' . $number)); ?></h1>
<p class="lead"><?php echo e(trans('front/errors.error-' . $number . '-info')); ?></p>
<?php if($number != '503'): ?>
	<p class="lead">
		<a href="<?php echo url('/'); ?>" class="btn btn-lg btn-default"><?php echo e(trans('front/errors.button')); ?></a>
	</p>
<?php endif; ?>
