 
$(function(){

	var curDate = $( "#datepicker" ).datepicker( "getDate" );
	var m = moment(curDate);
	var n = m.format("YYYY-MM-DD");

	$("#datepicker").datepicker({

		  
	});

	
	 

	$myCalendar = $('#calendar').fullCalendar({
        // put your options and callbacks here
         header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
		 weekends : true,
		 firstDay: 1,
		 handleWindowResize: true,
		 selectable: true,
		 events: [
        {
            title  : 'event1',
            start  : '2015-05-01'
        },
        {
            title  : 'event2',
            start  : '2015-05-05',
            end    : '2015-05-07'
        },
        
    ],
		
		dayClick: function(date, jsEvent, view) {
			 
			$("#basicModal").modal("show");  
			alert(date.format());
        	$("#dateinput").val(date.format());
	    },


	     
	    dayRender: function(date, cell){ 

             if(date.format() == n){
                $(cell).addClass('fc-highlight');
            }
        }

    	
 

    });

    $( "#openModal" ).click(function() {
  			$("#basicModal").modal("show"); 
  			/*var curDate = $( "#datepicker" ).datepicker( "getDate" );
  			var m = moment(curDate).format('L');
  			 alert(m);
  			$("#dateinput").val(m);*/
});

    $( "#showEvent" ).click(function() {
  			$("#showModal").modal("show"); 
  			 });

    $( "#editEvent" ).click(function() {
    	$("#showModal").modal("hide");
  		$("#basicModal").modal("show"); 


  			 });





	$("#datepicker").change(function(){
		curDate = $( "#datepicker" ).datepicker( "getDate" );
		m = moment(curDate);
		n = m.format("YYYY-MM-DD");
		//console.log(m.format('DD.MM.YYYY'));

		$('#calendar').fullCalendar( 'gotoDate', m );
		$('#calendar').fullCalendar('render'); 

	}); 
	
	
	  

 
  

})

	

 