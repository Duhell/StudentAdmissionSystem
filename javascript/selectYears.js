$(document).ready(function(){
	$('.yearSelect').yearselect({start: 2021,end:2022});
	$('.yearSelect').on("click",function(){
		const format = {year:'numeric'};
		const dateNow = new Date().toLocaleDateString('en-US',format);
		var yearV = $(this).val();
		if (yearV === dateNow) {
			$.ajax({
				url: "./backend/displayYearRecord.php",
				method: "POST",
				data: {years: yearV},
				success: function(data){
					$(".sortYear").html(data);
					$(".sortYear").css("display", "block");
					$("#main_section").css("display", "none");

				}
			});
		}else{
			$(".sortYear").css("display", "none");
			$("#main_section").css("display", "block");
		}
	})
})