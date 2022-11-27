$(document).ready(function(){
	$("#livesearch").keyup(function(){
		var inputSearch = $(this).val();
		if (inputSearch != "") {
			$.ajax({
				url: "./backend/livesearch.php",
				method: "POST",
				data: {inputSearch: inputSearch},
				success:function(data){
					$("#searchResult").html(data);
					$("#searchResult").css("display", "block");
					$("#main_section").css("display", "none");
				}
			});
		}else{
			$("#searchResult").css("display", "none");
			$("#main_section").css("display", "block");

		}
	});
});