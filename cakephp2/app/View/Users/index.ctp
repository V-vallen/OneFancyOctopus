<!doctype html>
 <?php include'add.ctp'?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mixture + Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
            }
        </style>
         
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
				<a href="#" class="btn btn-lg btn-success" id="openModal" >Add Event</a>
        <a href="#" class="btn btn-lg btn-success" id="showEvent" >Show Event</a>
				<h2>Events:</h2>
				<li class="nav nav-sidebar">
          <?php for ($x=0; $x<count($user['Event']); $x++) : ?>
					<ul><a href="#" id="openModal"><?php echo $user['Event'][$x]['event_name'] ?></a> </ul>
					 <?php endfor ?>
				</li>
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