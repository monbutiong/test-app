function delete_employee(id,url){
	var ans = confirm("Delete Selected Employee?");
	if(ans){
		location.href = url + id;
	}
}

function delete_department(id,url){
	var ans = confirm("Delete Selected Department?");
	if(ans){
		location.href = url + id;
	}
}

function delete_designation(id,url){
	var ans = confirm("Delete Selected Designation?");
	if(ans){
		location.href = url + id;
	}
}

function logout(url) {
	var ans = confirm("Logout from account?");
	if(ans){
		location.href = url;
	}
}