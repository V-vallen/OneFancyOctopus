<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		 
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('fullcalendar.min');
		echo $this->Html->css('app');
		

		echo $this->Html->script('jquery.min');
		echo $this->Html->script('app');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery-ui.min');
		echo $this->Html->script('moment.min');
		echo $this->Html->script('fullcalendar.min');
		
		 
      
	?>
	 

        
        
</head>
<body>
	<div id="container">
		<div id="header">
			 
		</div>
		<div id="content">

			 <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">Event Name</h4>
            </div>
           
            <div class="modal-body">
            		<?php echo $this->Session->flash(); ?>
                     <?php echo $this->fetch('content'); ?>    

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id = "joinEvent">Join</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id = "editEvent">Edit</button>
        </div>
    </div>
  </div>
</div>        
		</div>
		 
	</div>
		 
	
	 
</body>
</html>