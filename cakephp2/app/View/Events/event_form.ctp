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

/*echo $this->Form->input('S_time', array(
    'type'=>'time',
    'label' => 'Start Time:   ',
     
     
));


echo $this->Form->input('E_time', array(
    'type'=>'time',
    'label' => 'End Time:   ',


));*/

echo $this->Form->input('event_creator_id', array(
  'type' => 'hidden',
  'value'=> 1
  ));

    ?>
    </fieldset>
<?php echo $this->Form->end('Finish'); ?>

