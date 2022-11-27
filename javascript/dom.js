const admin_login_form = document.querySelector('.admin-login')
const stud_login_form = document.querySelector('.student-login')

window.addEventListener('load',()=>{
	document.querySelector('#stud-btn').style.backgroundColor="#7D0216"
	document.querySelector('#stud-btn').style.color="#fff"
	stud_login_form.style.display="block"
	admin_login_form.style.display="none"
})

document.addEventListener('click', e =>{
	if (e.target.classList.contains('stud-btn')) {
		document.querySelector('#stud-btn').style.backgroundColor="#7D0216"
		document.querySelector('#stud-btn').style.color="#fff"
		document.querySelector('#admin-btn').style.backgroundColor="#fff"
		document.querySelector('#admin-btn').style.color="#7D0216"
		stud_login_form.style.display="block"
		admin_login_form.style.display="none"
		

	}
	if (e.target.classList.contains('admin-btn')) {
		document.querySelector('#stud-btn').style.backgroundColor="#fff"
		document.querySelector('#stud-btn').style.color="#7D0216"
		document.querySelector('#admin-btn').style.backgroundColor="#7D0216"
		document.querySelector('#admin-btn').style.color="#fff"
		stud_login_form.style.display="none"
		admin_login_form.style.display="block"
		
	}

})

function studentCourse(dep,cor){
			
			let department = document.getElementById(dep)
			let cors = document.getElementById(cor)

			cors.innerHTML = "";
			if (department.value == "COE") {
				var courseArray = [
					"|Choose your course", 
					"BSEcE|Bachelor of Science in ELectronics Engineering ",
					"BSME|Bachelor of Science in Mechanical Engineering",
					"BSEE|Bachelor of Science in Electrical Engineering",
					"BSCpE|Bachelor of Science in Computer Engineering"
					]
			}else if (department.value == "COACE") {
				var courseArray = [
					"|Choose your course", 
					"BSMxE|Bachelor of Science in Mechatronics Engineering",
					"BSICE|Bachelor of Science in Instrumentation and Control Engineering",
					"BETMxT|Bachelor of Technology in Mechatronics Technology",
					]
			}else if (department.value == "COET") {
				var courseArray = [
					"|Choose your course", 
					"BSChem|Bachelor of Science in Chemistry",
					"BET|Bachelor of Science in Engineering Technology",
					]
			}
			for(let option in courseArray){
				let valueName = courseArray[option].split("|"),
					newElement = document.createElement("option");
				newElement.value = valueName[0]
				newElement.innerHTML = valueName[1]
				cors.options.add(newElement)
			}			

		}

