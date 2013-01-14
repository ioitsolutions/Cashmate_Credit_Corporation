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
//        $.ajax({
//        type: "POST",
//        url: <?= site_url('authentication/privilege/update'); ?>
//        data: {"role": role_id},  success: function (data) {}});
        $.ajax({
        type: 'POST',
        url: <?= site_url('authentication/privilege/update'); ?>,
        data: {"role"=>role_id},
        success: success,
        dataType: dataType
        });
    }
    else if (view.checked == 0)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id+" "+1);
    }
    if(save.checked == 1)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id);
    }
    else if (save.checked == 0)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id+" "+1);
    }
    if(edit.checked == 1)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id);
    }
    else if (edit.checked == 0)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id+" "+1);
    }
    if(print.checked == 1)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id);
    }
    else if (print.checked == 0)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id+" "+1);
    }
    if(post.checked == 1)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id);
    }
    else if (post.checked == 0)
    {
        //alert(role_id+" "+menu_id+" "+privilege_id+" "+1);
    }
    
}