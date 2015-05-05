<!--<h1>Test</h1>
<?php 
//echo "<script> var info = '".json_encode($users)."'<script>";
print_r($events)
?> 

<?php foreach ($events as $event):?>
<p><?php print_r($event)?></p>
 
<p><?php echo $event['Event']['id'] ?><p>

 
<p><?php echo $event['Event']['title'] ?><p>
 
<p><?php echo $event['Event']['event_creator_id'] ?><p>
 
<p><?php echo $event['Event']['start'] ?><p>
 
<p><?php echo $event['Event']['end'] ?><p>

	<?php print_r($event['User'])?>
<?php endforeach ?> --> 
 

<?php 


if( $_POST ){
	
	$event = array();
	
  $event_name = $_POST['event_name'];
  $start_date = $_POST['datestart'];
  $end_date = $_POST['dateend'];
  $stime = $_POST['timestart'];
  $etime = $_POST['timeend'];
 //$venue = $_POST['venue'];

$event[] = [$event_name,$start_date,$end_date,$stime,$etime];
print_r($event);

  ?>
   