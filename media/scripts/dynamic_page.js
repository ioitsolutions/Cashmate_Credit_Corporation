var myVar=setInterval(function(){myTimer()},1000);

function myTimer()
{
var d=new Date();
var t=d.toLocaleTimeString();
document.getElementById("Time").innerHTML=t;
}

function togglePrivilege(role_id)
{
    $("#"+role_id).slideToggle("slow");
}
