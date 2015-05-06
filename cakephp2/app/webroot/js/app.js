 
$(function(){
	var t = $.parseJSON(info);
	//alert(t[0].title);
	//alert(info);
	var events = [];
	for (i = 0; i < t.length; i++) { 
                    events.push({
                        title: "'"+t[i].title+"'",
                        start: "'"+t[i].start+"'",
                        end: "'"+t[i].end+"'",
                        id: "'"+t[i].id+"'",
                        color: '#D6A51E'
                        
               		});
    }
    
    //alert(events[1].start);

	$.ajax({
			type:'GET',
			url: '../events/events_list',
			success: function(data){

				  $( "#showList" ).html( data );
				  //alert( "Load was performed." );
				  //$('#showList').unbind();
				  
				   
			}



		});

 
	 
	 


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
		 selectHelper: true,
		 events: events,
		 //events: '../../View/Users/index.ctp',
		editable:true,
		

		  
		
		dayClick: function(date, jsEvent, view) {
			 
			$("#basicModal").modal("show");  
			$("#dateinput").val(date.format());
        	
	    },


	     
	    dayRender: function(date, cell){ 

             if(date.format() == n){
                $(cell).addClass('fc-highlight');
            }
        },

        eventClick: function(calEvent, jsEvent, view) {
        	console.log(calEvent)
       $("#showModal").modal("show"); 
       $('h4#myModalLabel').text(calEvent.title);
       // Date formating
       var startDate = moment(calEvent.start);
		var sd = startDate.format("YYYY-MM-DD");
		var endDate = moment(calEvent.end);
		var ed = endDate.format("YYYY-MM-DD");

       	var startTime = moment(calEvent.start);
		var s = startTime.format("h:mm a");

		var endTime = moment(calEvent.end);
		var e = endTime.format("h:mm a");
		var id = calEvent.id;
       $('#startDate').text(sd);
       $('#endDate').text(ed);
	   $('#startTime').text(s);
       $('#endTime').text(e);
        // change the border color just for fun
       // $(this).css('border-color', 'red');

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

	

 