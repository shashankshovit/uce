function checkUsername(str)
{
if (str=="")
  {
	//  alert("Enter a valid Email");
  document.getElementById("check").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("check").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkuserid.php?userid="+str,true);
xmlhttp.send();
}




function passwordcheck()
{
	pass=document.getElementById("pass").value;
	verify=document.getElementById("verify").value;
	if(pass!=verify) { alert("Both the passwords dont match with each other."); return false; }
	else return true;
}

function validation()
{
state = true;

	userid=document.getElementById("id").value;
	name=document.getElementById("name").value;
	pass=document.getElementById("pass").value;
	verify=document.getElementById("verify").value;
	dept=document.getElementById("dept").value;
	
	//alert("username="+userid);
	if(userid=="" || userid==" ")
	{
		alert("You cant leave the USERNAME empty.");
		state=false; return(state);		
	}

str=document.getElementById("id").value;
if (str=="")
  {
	//  alert("Enter a valid Email");
  document.getElementById("check").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("check").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkuserid.php?userid="+str,true);
xmlhttp.send();

usercheck=document.getElementById("useridstate").value;
//alert(usercheck);
if(usercheck=="true")
	{	}
else
	{	state=false;	alert("Please chose a different USER ID.");	}
	
//alert("state="+state);
	
	if(name=="" || name==" ")
	{
		alert("You cant leave the NAME empty.");
		state=false;		
	}
	
	else if(pass=="" || pass==" ")
	{
		alert("You cant leave your PASSWORD empty.");
		state=false;		
	}

	else if(verify=="" || verify==" " || verify!=pass)
	{
		alert("The given passwords dont match. Please provide the password again");
		state=false;		
	}
	
	else if(dept=="")
	{
		alert("You cant leave DEPARTMENT empty.");
		state=false;		
	}

	return(state);

}

function validationfordept()
{
state = true;

	userid=document.getElementById("id").value;
	name=document.getElementById("name").value;
	pass=document.getElementById("pass").value;
	verify=document.getElementById("verify").value;
	type=document.getElementById("type").value;
	
	//alert("username="+userid);
	if(userid=="" || userid==" ")
	{
		alert("You cant leave the USERNAME empty.");
		state=false; return(state);		
	}

str=document.getElementById("id").value;
if (str=="")
  {
	//  alert("Enter a valid Email");
  document.getElementById("check").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("check").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkuserid.php?userid="+str,true);
xmlhttp.send();

usercheck=document.getElementById("useridstate").value;
//alert(usercheck);
if(usercheck=="true")
	{	}
else
	{	state=false;	alert("Please chose a different USER ID.");	}
	
//alert("state="+state);
	
	if(name=="" || name==" ")
	{
		alert("You cant leave the NAME empty.");
		state=false;		
	}
	
	else if(pass=="" || pass==" ")
	{
		alert("You cant leave your PASSWORD empty.");
		state=false;		
	}

	else if(verify=="" || verify==" " || verify!=pass)
	{
		alert("The given passwords dont match. Please provide the password again");
		state=false;		
	}
	
	else if(type=="")
	{
		alert("You cant leave member TYPE empty.");
		state=false;		
	}

	return(state);

}



function cleanid() { document.getElementById("id").value=""; }
function cleanname() { document.getElementById("name").value=""; }