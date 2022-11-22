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


