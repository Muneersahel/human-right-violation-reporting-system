
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title col-md-12 col-sm-12"><?php echo e(_('STAFF MANAGEMENT')); ?>

                                    <span class="float-right">
                                        <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/create-staff')); ?>"><i class="fa fa-user-plus"></i> Create Staff</a>
                                    </span>
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>List of LHRC Staff</h4>
                                    </div>

                                    <div class="float-right">
                                        <div class="card-tools">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="justify-content-center col-md-12">
                                <?php if($message = Session::get('success')): ?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Large Modal</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>One fine body&hellip;</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                              
                              <div class="modal fade" id="modal-xl">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Extra Large Modal</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>One fine body&hellip;</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                        <table id="example" class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 2%">#</th>
                                                    <th style="width: 25%">Staff_Name</th>
                                                    <th style="width: 13%">Staff_Role</th>
                                                    <th style="width: 10%">LHRC_Center</th>
                                                    <th style="width: 20%">Email_Address</th>
                                                    <th style="width: 10%">Mobile #</th>
                                                    <th style="width: 20%" class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($users) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No staff records found<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(ucfirst($user->first_name)); ?>&nbsp;<?php echo e(ucfirst($user->middle_name)); ?>&nbsp;<?php echo e(ucfirst($user->last_name)); ?></td>
                                                            <td><?php echo e(ucfirst($user->role)); ?></td>
                                                            <td><?php echo e(ucfirst($user->center_code)); ?></td>
                                                            <td><?php echo e($user->email); ?></td>
                                                            <td>+<?php echo e($user->mobile_no); ?></td>
                                                            <td>
                                                                <form action="<?php echo e(route('destroy-staff', $user->id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this staff...?') ">

                                                                    
                                                                    
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-ellipsis-h"></i>&nbsp;<?php echo e(_('More')); ?></button>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-pencil"></i>&nbsp;<?php echo e(_('Edit')); ?></button>
                                                                    
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('delete'); ?>

                                                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="col-sm-12 col-md-12" role="status" aria-live="polite">
                                    <span> Showing <?php echo e($users->firstItem()); ?> to <?php echo e($users->lastItem()); ?> of <?php echo e($users->total()); ?> results</span>
                                    <span class="float-right" id="paginate"><?php echo $users->links(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/munir/Documents/HR/human/resources/views/admin/index.blade.php ENDPATH**/ ?>