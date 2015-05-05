<!doctype html>
 <?php include'add.ctp';
       
 ?>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo "<script> var info = '".json_encode($user['Event'])."'</script>";?>
         
    </head>
    <body>
        <div class="navbar-header navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index">CALENDAR</a>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">About</a></li>
                <!--<li ><a href="/add_event">Add Event</a></li>                
                <li ><a href="#" id="openModal">Test</a></li>-->
                <li ><a href="/model">Logout</a></li>
                 
            </ul>
        </div>
    </div>
</div>

        <div class="container">
            
	<div class="starter-template">
		<div class="row">
			<div class="col-md-3">
				<h1><?php echo $user['User']['firstname'] ?> <?php echo $user['User']['lastname'] ?></h1>
				<div id = "datepicker"></div>
				<br>
				<div id="addEvent"></div>
                <!--<a href="#" class="btn btn-lg btn-success" id="showEvent" >Show Event</a>-->
				
                <div id = "showList"></div>
			</div>
			<div class="col-md-9">
				<div id = "calendar"></div>
			</div>


        </div>
        
<div class="row">
	<div class="col-md-12">
		<p>Footer goes here</p>
	</div>
</div>
	<?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>