<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title col-md-12 col-sm-12"><?php echo e(_('LHRC CENTER MANAGEMENT')); ?>

                                <span classs="mr-auto">
                                    <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Create center</button>
                                    
                                </span>
                            </h3>
                        </div>
                        

                        
                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>List of LHRC Center</h2>
                                </div>

                                <div class="float-right">
                                    
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

                        <div class="modal fade" id="modal-show">
                            <div class="modal-dialog modal-lg">           
                                <?php if ($__env->exists('center.show')) echo $__env->make('center.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>          
                            </div>
                        </div>

                        <div class="modal fade" id="modal-create">
                            <div class="modal-dialog modal-lg">           
                                <?php if ($__env->exists('center.create')) echo $__env->make('center.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        
                          
                          <div class="modal fade" id="modal-edit">
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
                                                <th style="width: 25%">Center Name</th>
                                                <th style="width: 20%">Center Director</th>
                                                <th style="width: 20%">Center E-Address</th>
                                                <th style="width: 13%">Center Phone#</th>
                                                <th style="width: 20%" class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(count($centers) < 1): ?>
                                                <tr>
                                                    <td class="btn-default" colspan="7"><h3 class="text-center">No center records found<h3></td>
                                                </tr>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($center->name)); ?></td>
                                                        <td><?php echo e(ucfirst($center->director)); ?></td>
                                                        <td><?php echo e($center->email); ?></td>
                                                        <td><?php echo e('+'.$center->mobile_no); ?></td>                                                        
                                                        <td>
                                                            <form action="<?php echo e(route('destroy-center', $center->id)); ?>" method="post" onsubmit="return window.confirm('Are you sure you want to delete this lhrc center...?') ">

                                                                
                                                                
                                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-show" data-id = "<?php echo e($center->id); ?>"><i class="fa fa-ellipsis-h"></i>&nbsp;<?php echo e(_('More')); ?></button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit" data-ids = "<?php echo e($center->id); ?>" ><i class="fa fa-pencil"></i>&nbsp;<?php echo e(_('Edit')); ?></button>

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
                            <span> Showing <?php echo e($centers->firstItem()); ?> to <?php echo e($centers->lastItem()); ?> of <?php echo e($centers->total()); ?> results</span>
                            <span class="float-right" id="paginate"><?php echo $centers->links(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Javascript -->
    <script type="text/javascript">
        $(document).on('click', 'button[data-id]', function (e) {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url:"<?php echo e(url('showcenter')); ?>",
                // url: '/showcenter',
                // data: JSON.stringify(data),
                data: {'id': id},
                // async: false,
                // dataType: 'JSON', 
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);
                    alert(data);
                    // data = JSON.parse();  
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\human\resources\views/center/index.blade.php ENDPATH**/ ?>