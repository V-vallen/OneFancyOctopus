 



<?php echo $this->Form->create('Event'); ?>
    <fieldset>
        <legend>
            <?php echo __('Add New Event'); ?>
        </legend>
        <?php 
        echo $this->Form->input('title');
        echo $this->Form->input('start', array(
    'label' => 'Start Date:   ',
    'dateFormat' => 'DMY',

    'minYear' => date('Y'),
    'maxYear' => date('Y') + 10,
));   

echo $this->Form->input('end', array(
    'label' => 'End Date:   ',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 10,
));

/*echo $this->Form->dateTime('S_time', array(
     
    'timeFormat'=> '12',
     'label' => 'Start Time:   '
     
));


echo $this->Form->dateTime('E_time', array(
     'format' => '12',
    'label' => 'End Time:   ',


));*/

echo $this->Form->input('event_creator_id', array(
  'type' => 'hidden'
   
  ));

    ?>
    </fieldset>
<?php echo $this->Form->end('Finish'); ?>

