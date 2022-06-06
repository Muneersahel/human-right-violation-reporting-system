 modals.each(function(idx, modal) {
         var $modal = $(modal);
         var $buttons = $modal.find('button.step');
         var total_num_steps = $buttons.length;
         var $bodies = $modal.find('div.modal-body');
         var total_num_steps = $bodies.length;
         var $progress = $modal.find('.m-progress');
         var $progress_bar = $modal.find('.m-progress-bar');
         var $progress_stats = $modal.find('.m-progress-stats');
@@ -106,7 +106,7 @@
             $progress_total.text(total_num_steps);
             bindEventsToModal($modal, total_num_steps);
             $modal.data({
                total_num_steps: $buttons.length,
                total_num_steps: $bodies.length,
             });
             if (reset_on_close){
                 //Bootstrap 2.3.2