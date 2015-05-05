 
 
<!--<h1><?php print_r($post) ?></h1>-->
<h1><?php echo h($post['Event']['title']); ?></h1>

<p><b>Start Date:</b><?php echo $post['Event']['start']?> <b>End Date:</b><?php echo $post['Event']['end'] ?></p>
<p><b>From:</b><?php echo $post['Event']['S_time'] ?> <b>To:</b> <?php echo $post['Event']['E_time'] ?></p>
<p> <b>Description and Location:</b> <?php echo $post['Venue']['description']?> </p>

<button type="button" class="btn btn-default" id = "joinEvent"><?php echo $this->Html->link('Join', array('action' => 'edit', $post['Event']['id']));?></button>

<button type="button" class="btn btn-default" id = "editEvent"><?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Event']['id']));?></button>
<button type="button" class="btn btn-default" ><?php   echo $this->Html->link('Close', array('action' => 'close') ); ?></button>

