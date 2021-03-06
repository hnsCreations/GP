<!DOCTYPE html>
<html>
<head>	
	<title>SuperController Administrator Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css files -->
	<?php include "includes/css.php" ?>	

	<link rel="stylesheet" href="<?php echo base_url()?>designs/modal.css">
  	<script src="<?php echo base_url()?>designs/jquery.min.js"></script>  			
</head>

<body style="margin: 0px;border: 0px;padding:0px;">

	<!-- header -->
	<?php include "includes/s_header.php" ?>

	<!-- body -->
	<div style="height:600px;width:100%;background-color: black;">

		<!-- span 01 -->
		<?php include "includes/s_navbar.php" ?>

		<!-- span 02 -->
		<span style="width:55%;height:100%;background-color: #ffffff;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">
			
		</span>

		<!-- span 03 -->				
		<?php include "includes/s_table.php" ?>			

	</div>


<form method="post" action="<?php echo base_url()?>index.php/SuperController/deleteUser">

<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <table>
				

				<tr>
					<td>
						<label>Admin ID</label>
						<br>
						<br>
						
					</td>
					<td>
						<input class="form-control" type="text" id="IndexNum"  name="IndexN" readonly>
						<br>
						<br>
						
					</td>
				</tr>

				<tr>
					<td>
						<label>NIC</label>
						<br>
						<br>
						
					</td>
					<td>
						<input class="form-control" type="text" id="Fname" name="FnameOne">
						<br>
						<br>
						
					</td>
				</tr>
				<tr>
					<td>
						<label>Telephone</label>
						<br>
						<br>
						
					</td>
					<td>
						<input class="form-control" type="text" id="Lname" name="LnameOne">
						<br>
						<br>
						
					</td>
				</tr>
				
				
			</table>
 


  						<div class="modal-footer">

			        	 
			        	<button style="background-color: #A4F51E; width: 120px;height: 40px;" class="btn" name="buttonForm" type="submit" value="delete">Delete</button>

			        
			        	
			        	<button style="background-color: #79F51E; width: 120px;height: 40px;" class="btn" name="buttonForm"
			        	type="submit" value="update">Update</button>


			        	</form>
			        	
			          <button type="button" style="background-color: #1EF55F; width: 120px;height: 40px;"  class="btn" data-dismiss="modal">Close</button>
			        </div>



 </div>

</div>

	<!-- footer -->
	<?php include "includes/s_footer.php" ?>
		
</body>

<script>

// function onClick(element) {
//   //document.getElementById("img01").src = element.src;
//   document.getElementById("myModal").style.display = "block";


// }


// // Get the <span> element that closes the modal

var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}



$(document).ready(function() {

	$('table tbody tr').click(function(){


		document.getElementById("myModal").style.display = "block";

		var getIdFromRow = $(event.target).closest('tr').data('id');

		console.log(getIdFromRow);



		$.ajax({
	    type: "GET",
	    url: "http://localhost/Git/GP/admin/index.php/SuperController/searhUser" ,
	    data: {"strUser": getIdFromRow}, 
	    dataType:'JSON', 
	    success: function(response){
	        



		$('#IndexNum').val(response.data.UserDetailsone.superAdminId);
        $('#Fname').val(response.data.UserDetailsone.nic);
    	$('#Lname').val(response.data.UserDetailsone.telephone);
     	
    }
	});

	});
});



</script>

</html>