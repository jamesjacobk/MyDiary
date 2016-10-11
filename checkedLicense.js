$('#license').load("license.txt");
$('#readlicense').click(function()
{
    if(document.getElementById("readlicense").checked)
    {
        setTimeout(function() 
        {
          location.href = "tableCreate.php";
        },500);
    }
    else
    {
        alert("please check the checkbox to proceed");
        $("$readlicense").checked = FALSE;
    }
});