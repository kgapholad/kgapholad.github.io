<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Ussd</div>
				
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                  <?php if(app('request')->input('message')=='failed'): ?>
                    <br><center>
                    <div class="alert alert-danger" role="alert">
                        Code is already allocated.
                    </div>
                    </center><br>
                    <?php elseif(app('request')->input('message')=='success'): ?>
                    <br><center>
                    <div class="alert alert-success" role="alert">
                         Your code has been created
                    </div>
                    </center><br>
                    <?php endif; ?>

  <form method="GET" action="/ussd-submit" accept-charset="UTF-8">
   <!-- <input name="_token" type="hidden" value="h7xNdTaJXwLz5v0lkBolVPelpxldoiDR5gcKWkku">  
   <!-- text input field -->
   <label for="low" id="" class="">Low String</label>
   <input id="" class="" name="low" type="text" placeholder="Enter Low Connection String">
     <?php if ($errors->has('low')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('low'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</br>
   <!-- text input field -->
   <label for="high" id="" class="">High String</label>
   <input id="" class="" name="high" type="text" placeholder="Enter high Connection String">
    <?php if ($errors->has('high')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('high'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></br>
      <!-- text input field -->
   <label for="route" id="" class="">Route</label>
   <input id="" class="" name="route" type="text" placeholder="Enter Low Route">
    <?php if ($errors->has('route')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('route'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></br>
   <!-- select box -->
   <label for="charge" id="" class="">Charge</label>
   <select id="charge" name="charge"></br>
    <option value="" selected="selected">Select</option>
    <option value="0">0</option>
    <option value="1">1</option>
   </select>
    <?php if ($errors->has('charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('charge'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
   <br><small id="charge" class="form-text text-muted">Must either be 0 or 1.</small>  </br>
   <!-- text input field -->
   <label for="enddate" id="" class="">End Date</label>
   <input id="enddate" class="" name="enddate" type="date" >
    <?php if ($errors->has('enddate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('enddate'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></br>
    <!-- text input field -->
    <label for="cusnum" id="" class="">Customer Number</label>
    <input id="cusnum" class="" name="cusnum" type="text" placeholder="Cus. Number">
    <?php if ($errors->has('cusnum')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cusnum'); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></br>
   <!-- submit buttons -->
   <input type="submit" value="Save">   
  </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larry\resources\views/create.blade.php ENDPATH**/ ?>