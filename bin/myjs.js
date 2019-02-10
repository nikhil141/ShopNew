$(function(){
   $("#addroom").click(function(){
	/*$("#addroom").hide();
	$("#message").html("<img src='img/load.gif' width='120'>");*/

	var roomtitle = $("#roomtitle").val();

	$.post("lib/processroom.php", {roomtitle: roomtitle})
	.done(function(data){
		alert('Data Inserted Successfully.');window.location="room.php";
	});
	$("#room :input").each( function() {
	   $(this).val('');
	});
  });
$("#room").submit( function() {
  return false;	
});
});

$(function(){
   $("#editaddroom").click(function(){
	
	var editroomtitle = $("#editroomtitle").val();
	var ank = $("#ank").val();

	$.post("lib/processroom.php", {editroomtitle: editroomtitle,ank: ank})
	.done(function(data){
		alert('Data Updated Successfully.'); window.location="room.php";
	});
	
  });
$("#editroom").submit( function() {
  return false;	
});
});

$(function(){
   $("#deleteroom").click(function(){
	
	var deleteroom = $("#deleteroom").val();
	
	$.post("lib/processroom.php", {deleteroom: deleteroom})
	.done(function(data){
		alert('Data Deleted Successfully.'); window.location="room.php";
	});
	
  });

});