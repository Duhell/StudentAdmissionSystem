$(document).ready(function(){
	$('.yearSelect').yearselect({start: 2020,end:2022});
	$('.yearSelect').change(function(){
		const format = {year:'numeric'};
		const dateNow = new Date().toLocaleDateString('en-US',format);
		var yearV = $(this).val();
		if (yearV != dateNow) {
			$.ajax({
				url: "./backend/displayYearRecord.php",
				method: "POST",
				data: {years: yearV},
				success: function(data){
					$("#searchResult").html(data);
					$("#searchResult").css("display", "block");
					$("#main_section").css("display", "none");
				}
			});

			
		}else{
			$("#searchResult").css("display", "none");
			$("#main_section").css("display", "block");
		}
	})
})