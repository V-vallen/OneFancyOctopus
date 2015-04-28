<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">Add New Event</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                 <form class = "form-horizontal">
      <fieldset>
      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Event</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Event Name" class="form-control input-md">
          </div>
        </div>
        <!-- S Date input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="dateinput">Start Date</label>  
          <div class="col-md-4">
          <input id="dateinput" name="dateinput" type="date"  class="form-control input-md">
          </div>
        </div>
          <!-- E Date input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="dateinput">End Date</label>  
          <div class="col-md-4">
          <input id="dateinput2" name="dateinput" type="date" class="form-control input-md">
          </div>
        </div>
           <!-- S time input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="timeinput">Start Time</label>  
          <div class="col-md-4">
          <input id="timeinput" name="timeinput" type="time" value = "08:00"class="form-control input-md">
          </div>
        </div>
            <!-- E time input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="timeinput">End Time</label>  
          <div class="col-md-4">
          <input id="timeinput" name="timeinput" type="time" value = "23:00"class="form-control input-md">
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textarea">Description/Venue</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="textarea" name="textarea" placeholder="Describe the your event and venue here.."></textarea>
          </div>
        </div>
      </fieldset>
      </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
  </div>
</div> 
    </div>
