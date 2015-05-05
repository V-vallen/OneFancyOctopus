<h1>Test</h1>
<?php 
//echo "<script> var info = '".json_encode($users)."'<script>";

?>   
<?php foreach ($users as $user):?>

<p><b>Get user id:</b></p>
<p><?php echo $user['User']['id'] ?><p>
<p><b>Get username</b></p>
<p><?php echo $user['User']['username'] ?><p>
<p><b>Get password</b></p>
<p><?php echo $user['User']['password'] ?><p>
<p><b>Get email</b></p>
<p><?php echo $user['User']['email'] ?><p>
<p><b>Get firstname</b></p>
<p><?php echo $user['User']['firstname'] ?><p>
<p><b>Get lastname</b></p>
<p><?php echo $user['User']['lastname'] ?><p>

	<!--<?php print_r($user['Event'])?>

	<p><b><?php echo count($user['Event']) ?></b></p>-->
	<?php for ($x=0; $x<count($user['Event']); $x++) : ?>
	<p><b>Get event id:</b></p>
	<p><?php echo $user['Event'][$x]['id'] ?><p>

	<p><b>Get event creator:</b></p>
	<p><?php echo $user['Event'][$x]['event_creator_id'] ?><p>

	<p><b>Get event event name:</b></p>
	<p><?php echo $user['Event'][$x]['title'] ?><p>

	<p><b>Get event start date:</b></p>
	<p><?php echo $user['Event'][$x]['start'] ?><p>
 	
 	<p><b>Get event end date:</b></p>
	<p><?php echo $user['Event'][$x]['end'] ?><p>

	<p><b>Get event start time:</b></p>
	<p><?php echo $user['Event'][$x]['S_time'] ?><p>

	<p><b>Get event end time:</b></p>
	<p><?php echo $user['Event'][$x]['E_time'] ?><p>
 	<hr>
	<?php endfor ?>
 
<?php endforeach ?>
 