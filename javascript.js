function validation()
{
  var uname = document.login.uname.value;
  var pwd = document.login.pwd.value;

  //check empty field
  if ( uname == "" && pwd == "")
  {
    alert("Both fields should not be blank");
    return;
  }
}
