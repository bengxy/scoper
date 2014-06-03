var nameempty = false;
var passempty = false;
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
function resetname(){
	document.getElementById('userid').className="inputbar";
}
function resetpasswd(){
	document.getElementById('passwd').className="inputbar";
}