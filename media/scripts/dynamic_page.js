var myVar=setInterval(function(){myTimer()},1000);

function myTimer()
{
var d=new Date();
var t=d.toLocaleTimeString();
document.getElementById("Time").innerHTML=t;
}

function saveChange(role_id,menu_id,privilege_id)
{
    if (view.checked == 1)
    {
        if (str.length==0)
        {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
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
                document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","application/classes/controller/authentication/privilege.php?role="+role_id+"menu="+menu_id+"privilege="+privilege_id,true);
        xmlhttp.send();
    }
    else if (view.checked == 0)
    {
    }
}