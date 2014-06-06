var nameempty = false;
var passempty = false;

function checkcont(){
	var name = document.getElementById('username').value;
	var pass = document.getElementById('passwd').value;
	empty = false;
	if(name==null||name==""){
		
		document.getElementById('username').className="error";
		document.getElementById('username').placeholder="用户名为空!";
		nameempty = true;
	}
	if(pass==null||pass==""){
		
		document.getElementById('passwd').className = "error";
		document.getElementById('passwd').placeholder = "密码为空!";
		passempty = true;
	}
	if(nameempty||passempty){
		return false;
	}
	else{
		return true;
	}
}
function resetname(){
	document.getElementById('username').className="userbar";
	document.getElementById('username').placeholder="输入用户名(6-10个字符)";
	nameempty = false;
}
function resetpasswd(){
	document.getElementById('passwd').className="userbar";
	document.getElementById('passwd').placeholder = "输入密码(6-16位)";
	passempty = false;
}