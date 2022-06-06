
 <?php $__env->startSection('js'); ?>

    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('css'); ?>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="content-wrapper">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white" ><?php echo e(__('CUSTOMER IMAGE UPLOAD')); ?></div>

                  <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                      <div class="text-center">
                          <h3><strong><?php echo e(_('Dar es Salaam Water and Sanitation Authority')); ?></strong></h3>
                      </div>

                      <div class="mt-2 mb-2">
                          <img src="<?php echo e(asset('images/dawasa/logo-dawasa.jpg')); ?>" class="offset-md-5" alt="Dawasa-logo" title="Dawasa-logo" width="100px" height="70px"/>
                      </div>

                      <div>
                          <h3 class="text-center" ><strong><?php echo e(_('APPLICATION AND AGREEMENT FOR WATER SUPPLY')); ?></strong></h3>
                      </div>

                      <div class="lead">
                          <h3 class="text-center" > <?php echo e(_('MAGOMENI, KINONDONI SOUTH-DAR ES SALAAM AND COAST ZONE')); ?></h3>
                      </div>
                    </div>
                    <hr style="width: 80%; border: 1px solid lightslategray"/>
                  </div>


                <form  class="form-horizontal" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" >
                  <?php echo csrf_field(); ?>

                  <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                  <div class="card-body"> 
                    <div class="row">
                      <div class="col-md-12  well">
                          <h5>
                              PASSPORT SIZE UPLOAD
                              <hr width="100%">
                          </h5>
                  
                          <div class="alert alert-warning alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                              Passport should have white or blue background and image file must not exceed 2 MB
                          </div>

                          <div class="row mb-3">
                              <div class="col-md-4 text-center">
				                        <div id="upload-demo" style="width:350px"></div>
	  		                      </div>
  
                              <div class="col-md-4" style="padding-top:30px;">
                                <label for="picture"><strong>Upload New Picture </strong> </label>
                                  <br/>
                                  <input type="file" name="user_image" id="upload" style="width: 100%" class="btn btn-default">
                                  <br/><br/>
                                  <small style="margin-top: 1px" class="btn btn-warning btn-xs" onclick=" $('#picture').val('');"> Clear </small>
                                  <button class="btn btn-success upload-result">Crop Image</button>
                              </div>
  
                              <div class="col-md-4" style="width:350px">
                                <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
                              </div>
                          </div>
                      </div>
                    
                    </div>
                  </div>

                  <div class="card-footer">
                    
                    <div class="float-right mb-2">
                        <button type="submit" class="btn btn-success" ></i><?php echo e(_('Upload')); ?> &raquo;</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">


      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });


      $uploadCrop = $('#upload-demo').croppie({
          enableExif: true,
          viewport: {
              width: 200,
              height: 200,
              type: 'square'
          },
          boundary: {
              width: 300,
              height: 300
          }
      });


      $('#upload').on('change', function () { 
      var reader = new FileReader();
          reader.onload = function (e) {
          $uploadCrop.croppie('bind', {
          url: e.target.result
          }).then(function(){
          console.log('jQuery bind complete');
          });
          }
          reader.readAsDataURL(this.files[0]);
      });


      $('.upload-result').on('click', function (ev) {
      $uploadCrop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
      }).then(function (resp) {
      $.ajax({
      url: "/customer/imageUpload",
      type: "POST",
      data: {"user_image":resp},
      success: function (data) {
      html = '<img src="' + resp + '" />';
      $("#upload-demo-i").html(html);
      }
      });
      });
      });

    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/customer/imageUpload.blade.php ENDPATH**/ ?>