var nameempty = false;
var passempty = false;
var nameerror = false;
var passwderror = false;
function checknull(){
			var name = document.getElementById('userid').value;
			var pass = document.getElementById('passwd').value;
			empty = false;
			if(name==null||name==""){
				document.getElementById('userid').className="error";
				document.getElementById('userid').placeholder="请输入用户名";
				nameempty = true;
			}
			if(pass==null||pass==""){
				document.getElementById('passwd').className="error";
				document.getElementById('passwd').placeholder="请输入密码";
				passempty = true; 
			}
			if(nameempty||passempty){
				return false;
			}
			else{
				return true;
			}
		}
function checkall(){
	return checknull()&&checkerror();
}
function checkerror(){

}
function resetname(){
	document.getElementById('userid').className="inputbar";
	nameempty = false;
}
function resetpasswd(){
	document.getElementById('passwd').className="inputbar";
	passempty = false;
}

function setusererror(){
	document.getElementById('usererror').style.display = "block";
}
function resetusererror(){
	document.getElementById('usererror').style.display = "none";
}
function setpasswderror(){
	document.getElementById('passwderror').style.display = "block";
}
function resetpasswderrror(){
	document.getElementById('passwderror').style.display = "none";
}
function setverifyerror(){
	document.getElementById('verifyerror').style.display = "block";
}
function resetverifyerrror(){
	document.getElementById('verifyerror').style.display = "none";
}


