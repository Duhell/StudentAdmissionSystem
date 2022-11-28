$(document).ready(function(){
	$(".delete_btn").click(function(){
		var thisBtn = this;
		var deleteID = $(this).data('id');
		const confirmation = confirm("You are about to delete a record.\nContinuing will result to permanent delete of record.\nContinue?");
		if (confirmation) {
			$.ajax({
				url: "./backend/delete.php",
				method: "POST",
				data: {id: deleteID},
				success: function(response){
					if (response == 1) {
						$(thisBtn).closest('tr').css('background','#7D0216');
						$(thisBtn).closest('tr').fadeOut(400,function(){
							$(this).remove;
					});
					}else{
						alert("Record has not been deleted");
					}
					location.reload(true);
				}

			})
		}

		
	});
});