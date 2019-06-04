<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard-Profile</div>
				
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
					 <table class="table"><thead><th>ID</th><th>Part1</th><th>Low</th><th>High</th><th>Route</th><th>From</th><th>To</th><th>Cus #</th><th>Charge</th></thead>
					
				  <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ussd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
						<td><?php echo e($ussd->Routing_Num); ?>

						</td>
						<td><?php echo e($ussd->Part1); ?>

						</td>
						<td>
						<?php echo e($ussd->Part2_Low); ?>

						</td>
						<td>
						<?php echo e($ussd->Part2_High); ?>

						</td>
						<td>
						<?php echo e($ussd->Route_To_App); ?>

						</td>
						<td>
						<?php echo e($ussd->Assign_From_Date); ?>

						</td>
						<td>
						<?php echo e($ussd->Assign_To_Date); ?>

						</td>
						<td>
						<?php echo e($ussd->Customer_Num); ?>

						</td>
						<td>
						<?php echo e($ussd->Charge_Code); ?>

						</td></tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larry\resources\views/profile.blade.php ENDPATH**/ ?>