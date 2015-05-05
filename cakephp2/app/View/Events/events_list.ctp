<?php include'show.ctp' ?>
<?php $this->layout = false;?>
 <h2>Events:</h2>
<li class="nav nav-sidebar">        
        <?php for ($x=0; $x<count($events); $x++) : ?>       
        <ul>
            <div class="row">
            <div class="col-md-6">
            <a href="../events/view/<?php echo $events[$x]['Event']['id']?>" id="show"><?php echo $events[$x]['Event']['title'] ?></a>
            </div>

            <div class="col-md-6">
            <button type="button" class="btn btn-default" id = "editEvent"><?php
                echo $this->Form->postLink(
                    'X',
                    array('action' => 'delete', $events[$x]['Event']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?></button>

             <button type="button" class="btn btn-default" id = "editEvent"><?php
                echo $this->Form->postLink(
                    'Join',
                     array('action' => 'join', $events [$x]['Event']['id'])
                );
            ?></button>
        </div></div>
        </ul>
        <?php endfor ?>
</li>