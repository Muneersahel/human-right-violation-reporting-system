
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7"><?php echo e(_('Incident Report')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/app/lhrc_logo.jpg')); ?>" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong><?php echo e(_('Human Right Violations Reporting System')); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > <?php echo e(_('LHRC RIGHT VIOLANCE VICTIM REPORTING FORM')); ?></h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="<?php echo e(route('store-incident')); ?>" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                <?php echo csrf_field(); ?>

                                <div class="card-body">
                                    <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Victim</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="incident_source" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Incident source')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('incident_source') ? ' is-invalid' : ''); ?>" name="incident_source" id="incident_source" required>
                                                        <option value=""><?php echo e(_ ('Choose incident source')); ?></option>
                                                        <option value="Citizen"><span class="active"><?php echo e(_ ('Citizen')); ?></span></option>
                                                        <option value="Journalist"><?php echo e(_ ('Journalist')); ?></option>
                                                        <option value="Politician"><?php echo e(_ ('Politician')); ?></option>
                                                        <option value="Activist"><?php echo e(_ ('Activist')); ?></option>
                                                        <option value="Others"><?php echo e(_('Others')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('incident_source')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('incident_source')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="issue_type" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Issue type')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('issue_type') ? ' is-invalid' : ''); ?>" name="issue_type" id="issue_type" required >
                                                        <option value=""> <?php echo e(_ ('Choose issue type')); ?> </option>
                                                        <option value="Property Ownership"> <?php echo e(_ ('Property Ownership')); ?> </option>
                                                        <option value="Divorce Conflict"> <?php echo e(_ ('Divorce Conflict')); ?>  </option>
                                                        <option value="Plot Delimiter"> <?php echo e(_ ('Plot Delimiter')); ?>  </option>
                                                        <option value="Others"> <?php echo e(_ ('Others')); ?>  </option>
                                                    </select>

                                                    <?php if($errors->has('issue_type')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('issue_type')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="right_violated" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Right violated')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('right_violated') ? ' is-invalid' : ''); ?>" name="right_violated" id="right_violated" required >
                                                        <option value=""><?php echo e(_ ('Choose right violated')); ?></option>
                                                        <option value="Political"><?php echo e(_ ('Political Right')); ?></option>
                                                        <option value="Social"><?php echo e(_ ('Social Right')); ?></option>
                                                        <option value="Financial"><?php echo e(_ ('Financial Right')); ?></option>
                                                        <option value="Freedom of Speech"><?php echo e(_ ('Freedom of Speech')); ?></option>
                                                        <option value="Property Ownership"><?php echo e(_ ('Property Ownership')); ?></option>
                                                        <option value="Others"><?php echo e(_ ('Others')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('right_violated')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('right_violated')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="special_group" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Special group')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('special_group') ? ' is-invalid' : ''); ?>" name="special_group" id="special_group" required >
                                                        <option value="" ><?php echo e(_ ('Choose disability')); ?></option>
                                                        <option value="Physical"><?php echo e(_ ('Physical')); ?></option>
                                                        <option value="Visual"><?php echo e(_ ('Visual')); ?></option>
                                                        <option value="Hearing"><?php echo e(_ ('Hearing')); ?></option>
                                                        <option value="Speech"><?php echo e(_ ('Speech')); ?></option>
                                                        <option value="Albinism"><?php echo e(_ ('Albinism')); ?></option>
                                                        <option value="Mental"><?php echo e(_ ('Mental')); ?></option>
                                                        <option value="Mixed"><?php echo e(_ ('Mixed')); ?></option>
                                                        <option value="None" ><?php echo e(_ ('None')); ?></option>
                                                    </select>
                                                    
                                                    <?php if($errors->has('special_group')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('special_group')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="date_time" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Incident date/time')); ?> <span style="color: red"><strong class="h4">*</strong></span></label>
                                                <div class="col-md-7">
                                                    <input type="datetime-local" class="form-control<?php echo e($errors->has('date_time') ? ' is-invalid' : ''); ?>" name="date_time" id="date_time" value="<?php echo e(old('date_time')); ?>" required >
            
                                                    <?php if($errors->has('date_time')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('date_time')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="region" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Region')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" id="region" required >
                                                        <option value=""><?php echo e(__('Choose region')); ?></option>
                                                        <option value="Dar es Salaaam" id="Dar es Salaaam"><span class="active"><?php echo e(__('Dar es Salaaam')); ?></span></option>
                                                    </select>
                                            
                                                    <?php if($errors->has('region')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('region')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="district" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('District')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" name="district" id="district" value="<?php echo e(old('district')); ?>" required >
                                                        <option value=""><?php echo e(__('Choose district')); ?></option>
                                                        <option value="Ilala" id="Ilala"><?php echo e(__('Ilala')); ?></option>
                                                        <option value="Kinondoni" id="Kinondoni"><?php echo e(__('Kinondoni')); ?></option>
                                                        <option value="Ubungo" id="Ubungo"><?php echo e(__('Ubungo')); ?></option>
                                                        <option value="Temeke" id="Temeke"><?php echo e(__('Temeke')); ?></option>
                                                        <option value="Kigamboni" id="Kigamboni"><?php echo e(__('Kigamboni')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('district')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('district')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nearest_center" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Nearest LHRC')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('nearest_center') ? ' is-invalid' : ''); ?>" name="nearest_center" id="nearest_center" value="<?php echo e(old('nearest_center')); ?>" required >
                                                        <option value=""><?php echo e(_('Choose nearby lhrc center')); ?></option>
                                                        

                                                    </select>
    
                                                    <?php if($errors->has('nearest_center')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('nearest_center')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>  
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="ward" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Ward')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" id="ward" value="<?php echo e(old('ward')); ?>" placeholder="Enter ward" required >
                                                    
                                                    <?php if($errors->has('ward')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('ward')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="street" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Street/Village')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" id="street" value="<?php echo e(old('street')); ?>" placeholder="Enter street" required>
                                    
                                                    <?php if($errors->has('street')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('street')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="incident_remarks" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Remarks')); ?></label>
                                                <div class="col-md-7">
                                                    <textarea rows="3" cols="5" class="form-control<?php echo e($errors->has('incident_remarks') ? ' is-invalid' : ''); ?>" name="incident_remarks" maxlength="250" placeholder="<?php echo e(_('Any further information about incident or incident\'s location')); ?>" required ><?php echo e(old('incident_remarks')); ?></textarea>
                                                    <small id="incident_remarks" class="form-text text-muted">Please do not exceed 250 characters.</small>

                                                    <?php if($errors->has('incident_remarks')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('incident_remarks')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Suspect</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Name')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>"placeholder="Enter name(s)" pattern="[a-zA-Z\s]*" title="Name should only contain letters" required >
                        
                                                    <?php if($errors->has('name')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="gender" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Sex')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>"  name="gender" id="gender" required >
                                                        <option value=""><?php echo e(_('Choose gender')); ?></option>
                                                        <option value="Male"><?php echo e(_('Male')); ?></option>
                                                        <option value="Female"><?php echo e(_('Female')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('gender')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('gender')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>  
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="age" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Age(yrs)')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('age') ? ' is-invalid' : ''); ?>" name="age" id="age" value="<?php echo e(old('age')); ?>" placeholder="Enter age" pattern="100|[1-9]\d|[1-9]" title="Age should be a positive number (10-100)" required>
                        
                                                    <?php if($errors->has('age')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('age')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="tribe" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Tribe')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('tribe') ? ' is-invalid' : ''); ?>"  name="tribe" id="tribe" required >
                                                        <option value=""><?php echo e(__('Choose tribe')); ?></option>
                                                        <option id="Haya" value="Haya"><?php echo e(__('Haya')); ?></option>
                                                        <option id="Sukuma" value="Sukuma"><?php echo e(__('Sukuma')); ?></option>
                                                        <option id="Chaga" value="Chaga"><?php echo e(__('Chaga')); ?></option>
                                                        <option id="Nyamwezi" value="Nyamwezi"><?php echo e(__('Nyamwezi')); ?></option>
                                                    </select>
                    
                                                    <?php if($errors->has('tribe')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('tribe')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="religion" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Religion')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('religion') ? ' is-invalid' : ''); ?>"  name="religion" id="religion" required >
                                                        <option value=""><?php echo e(__('Choose religion')); ?></option>
                                                        <option id="Christian" value="Christian"><?php echo e(__('Christian')); ?></option>
                                                        <option id="Muslim" value="Muslim"><?php echo e(__('Muslim')); ?></option>
                                                        <option id="Others" value="Others"><?php echo e(__('Others')); ?></option>
                                                    </select>
                  
                                                    <?php if($errors->has('religion')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('religion')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                  
                                            <div class="form-group row">
                                                <label for="merital_status" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Status')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2<?php echo e($errors->has('merital_status') ? ' is-invalid' : ''); ?>"  name="merital_status" id="merital_status" required >
                                                        <option value=""><?php echo e(__('Merital status')); ?></option>
                                                        <option value="Single"><?php echo e(_ ('Single')); ?></option>
                                                        <option value="Marriage"><?php echo e(_ ('Marriage')); ?></option>
                                                        <option value="Divorced"><?php echo e(_ ('Divorced')); ?></option>
                                                        <option value="Widowed"><?php echo e(_ ('Widowed')); ?></option>
                                                        <option value="Others"><?php echo e(_ ('Others')); ?></option>
                                                    </select>
                  
                                                    <?php if($errors->has('merital_status')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('merital_status')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label for="suspect_remarks" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Suspect remarks')); ?></label>
                                                <div class="col-md-7">
                                                    <textarea rows="3" cols="3" class="form-control<?php echo e($errors->has('suspect_remarks') ? ' is-invalid' : ''); ?>" name="suspect_remarks" placeholder="<?php echo e(_('Any further information about suspected person(s)')); ?>" required ><?php echo e(old('suspect_remarks')); ?></textarea>
                                                    <small id="suspect_remarks" class="form-text text-muted">Please do not exceed 250 characters.</small>
                    
                                                    <?php if($errors->has('suspect_remarks')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('suspect_remarks')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Uploads</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="photos" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Photo')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control<?php echo e($errors->has('photos') ? ' is-invalid' : ''); ?>" name="photos" id="photos" value="<?php echo e(old('photos')); ?>" style="width: 100%" class="btn btn-default" required >
                                                    <small id="photos" class="form-text text-muted">Upload photos.</small>
                    
                                                    <?php if($errors->has('photos')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('photos')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="photos" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Audio/Video')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="file" id="video" name="video" accept="audio/*,video/*,image/*" class="form-control<?php echo e($errors->has('video') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('video')); ?>" style="width: 100%" class="btn btn-default" required>
                                                    <small id="video" class="form-text text-muted">Upload audio or video.</small>
                                                    
                                                    <?php if($errors->has('video')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('video')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="<?php echo e(route('customer/home')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                    </div>
    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info" ><?php echo e(_('Submit')); ?> &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Javascript -->
        <script src="<?php echo e(asset('js/select/select2.full.min.js')); ?>"></script>
        <script type="text/javascript">

            $(function () {
              bsCustomFileInput.init();
            });

            //Initialize Select2 Elements
            $('.select2').select2()
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
    
            $('#district').change(function(){
            var district = $(this).val(); // selected district
            var distname = [];
                $.ajax({
                   type:"GET",
                   url:"<?php echo e(url('getdistrict')); ?>",
                   dataType:'JSON',
                   async: false,
                   success:function(data){
                        console.log(data);
                        distname = data;
                    },
                   error : function(req, err) {
                        console.log(err);
                    }
                });
    
                // window.alert(distname);
          
                if(distname.includes(district)){
                    $.ajax({
                        type:"GET",
                        url:"<?php echo e(url('getcenters')); ?>?district="+district,
                        success:function(data){
                            $("#nearest_center").empty();
                            $("#nearest_center").append('<option value="">Choose nearby lhrc center</option>');
                            $.each(data, function(key, values){
                                $("#nearest_center").append('<option value="'+key+'">'+values+'</option>');
                            });
                        }
                    });
                }
                else{
                    $("#nearest_center").empty();
                    $("#nearest_center").append('<option value="HQ">No lhrc center found</option>');
                    // $("#nearest_center").append('<option value="HQ">No lhrc center found in '+district+'</option>');
                }
            });
        </script>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/incident/create.blade.php ENDPATH**/ ?>