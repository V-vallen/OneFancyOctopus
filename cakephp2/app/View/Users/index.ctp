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


        
        
    <div class="container">
<div class="navbar-header navbar navbar-inverse navbar-fixed-top">
        <header class="codrops-header"> 
                    <nav class="cl-effect-1"> 
                    <ul id="navbar">
                    <li class="active"><a href="index">Calendar</a></li>
                    <li class="active"><a href="/">About</a></li>
                    <li ><a href="../events/add">Add Event</a></li>
                    <li><a href="front">Logout</a></li>
                    </ul>
                    </nav> 
        </header>


      <!--
        <a class="navbar-brand" href="index">CALENDAR</a>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">About</a></li>
                
                <li ><a href="front">Logout</a></li>
                 
            </ul>
        </div> -->
    </div>
</div>

        <div class="content">
            
	<div class="starter-template">
		<div class="row">
			<div class="col-md-3">
				<h1><?php echo $user['User']['firstname'] ?> <?php echo $user['User']['lastname'] ?></h1>
				<div id = "datepicker"></div>
				<br>
				 
                <!--<a href="#" class="btn btn-lg btn-success" id="showEvent" >Show Event</a>-->
                
                <nav class="cl-effect-12"> 
                <div id="navbar">
				<a href="../events/add" class="btn btn-lg btn-success" id="openModal" >Add Event</a>
                </div>
                </nav> 
                

                <div id = "showList"></div>
			</div>
			<div class="col-md-9">
				<div id = "calendar"></div>
			</div>


        </div>
        
<!--<div class="row">
	<div class="col-md-12">
		<p>Footer goes here</p>
	</div>
</div>-->
	<?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>