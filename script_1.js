function Login(){ 
  var done=0; 
  var username=document.login.username.value; 
  var password=document.login.password.value;
  var users = new Array();

users['membre'] = 'code';


  if (users[username] == password) 
  { 
       switch(username)
       {
           case 'membre':
              window.location="session.html";
              break;
	}
  }
  else 
  {
      window.location="error.html";
  }
}
