<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of USSD</div>
				
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
					<?php endif; ?>

				<table class="table"><thead><th>Part1</th><th>Low</th><th>High</th><th>Route</th><th>From</th><th>To</th><th>Action</th></thead>
					 <?php
						#$page  = isset($_GET['page']) && $_GET['page'] > 0 ? $_GET['page'] : 1;
						$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

						$numrows =$ussds->count();
						$numrows=$numrows-1;
						$NUM_PER_PAGE = 4;

						$firstIndex = ($page-1) * $NUM_PER_PAGE;
						#var_dump($ussds);
						for($i=$firstIndex; $i<($firstIndex+$NUM_PER_PAGE); $i++)
						{
							if ($i <= $numrows ){
						
									echo '<tr>
									<td>'.$ussds->ShortCode[$i]->Part1
									.'</td>
									<td>
									'.$ussds->ShortCode[$i]->Part2_Low 
									.'</td>
									<td>
									'.$ussds->ShortCode[$i]->Part2_High 
									.'</td>
									<td>
									'.$ussds->ShortCode[$i]->Route_To_App 
									.'</td>
									<td>
									'.$ussds->ShortCode[$i]->Assign_From_Date 
									.'</td>
									<td>
									'.$ussds->ShortCode[$i]->Assign_To_Date 
									.'</td>';
									echo'<td><a  class="nav-link" href="/ussds/'.$ussds->ShortCode[$i]->Routing_Num.'">view</a></td></tr>';
							}
						
						}				
						
					?>
				 <!-- <?php $__currentLoopData = $ussds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ussd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
						<tr>
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
						<td><a  class="nav-link" href="<?php echo e(url('/ussds/'.$ussd->Routing_Num )); ?>">view</a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
					</table>
					<ul class="page-link"><b>Total [ <?php echo e($ussds->count()); ?>	]	</b>			
						<div style="text-align:center">
							<!---------------- Prev --------->
							<?php if($page == 1 ||$page == 0): ?>
           						<!-- <a class="pagination-previous" disabled>Previous</a>-->
								<?php else: ?>
									<a  class="previous round" href="<?php echo e(url('/ussds?page=1')); ?>" rel="prev">&#8249;&#8249;</a>
            						<a  class="previous round" href="<?php echo e(url('/ussds?page='.$page-=1)); ?>" rel="prev">&#8249; </a>
							<?php endif; ?>
							<!-------------- End Prev --------->
							<?php for($i = 1; $i <= ceil(count($ussds) /$NUM_PER_PAGE); $i++): ?> 
							<?php
								if(isset($_GET['page'])){
									$Pshow=$_GET['page'] -1;//if i=4 :3
									$Nshow=$_GET['page'] +1; //if i=4 :5
								}else{
									$_GET['page']=1;
									$Pshow=0;
									$Nshow=2;
								}
							?>
									
									<?php if($i == $_GET['page']): ?>	
									<a class="round"  href="<?php echo e(url('/ussds?page='.$i )); ?>">[<i><?php echo e($i); ?></i> ]</a>
									<?php else: ?>
									<?php if($i == $Pshow || $i == $Nshow): ?>
									<a  class="round" href="<?php echo e(url('/ussds?page='.$i )); ?>"><?php echo e($i); ?></a>
									<?php endif; ?>
									<?php endif; ?>	
											<!--echo"[<a href='/ussds?page=".$i."'> ".$i." </a>]";-->
							 <?php endfor; ?>
							 <!-------------- Next ------------>
							 <?php if ($_GET['page'] < ceil(count($ussds) /$NUM_PER_PAGE))
							 { $nxt = $_GET['page']+1;
								$lst = ceil(count($ussds) /$NUM_PER_PAGE);
							 ?>
								 <a class="next round" href="<?php echo e(url('/ussds?page='.$nxt)); ?>" rel="next">&#8250;</a>
								 <a class="next round" href="<?php echo e(url('/ussds?page='.$lst)); ?>" rel="next">&#8250;&#8250;</a>
								 <?php 
							 }/*else
								 { ?>
            						<a class="pagination-next" disabled>Next</a>
									<?php } */
									?>
							 <!------------ End Next ---------->

						</div>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larry\resources\views/ussds.blade.php ENDPATH**/ ?>