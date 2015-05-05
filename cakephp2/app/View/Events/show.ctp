<!--Show Event-->
 
<?php echo $id = 1?>
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
           
            <div class="modal-body">
                        <b>Start Date:</b><p id = "startDate"></p>
                        <b>End Date:</b><p id = "endDate"></p>
                        <b>From:</b><p id = "startTime"></p>
                        <b>To:</b><p id = "endTime"><b>To:</b></p>
                        <p> <b>Description and Location:</b> venue </p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" id = "joinEvent">Join</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default" id = "editEvent"><?php echo $this->Html->link('Edit', array('action' => 'edit', $id));?></button>
        </div>
    </div>
  </div>
</div>