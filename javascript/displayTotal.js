$(document).ready(function(){
	const format = {year:'numeric'};
	const dateNow = new Date().toLocaleDateString('en-US',format);

	$('.yearSelect').change(function(){
		var yearV = $(this).val();
		if (yearV != dateNow) {
			$.ajax({
				url: "./backend/displayTotal.php",
				method: "POST",
				data: {total: yearV},
				success: function(data){
					$("#totalNum").html(data);
				}
			});
		}else{
			$.ajax({
				url: "./backend/displayTotal.php",
				method: "POST",
				data: {total: yearV},
				success: function(data){
					$("#totalNum").html(data);
				}
				
			});
		}
	});
});