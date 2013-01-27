$(function() {
 
     $( "#confirmationDialog" ).dialog({
        autoOpen: false,
        width: 256,
        buttons: [
            {
                text: "Ok",
                click: function() {
                    deleteRequest();
                        $( this ).dialog( "close" );
                }
            },
            {
                text: "Cancel",
                click: function() {
                        $( this ).dialog( "close" );
                }
            }
        ]
     });
     
   $( "#deleteRequest" ).click(function( event ) {
        $( "#confirmationDialog" ).dialog( "open" );
        event.preventDefault();
    });
    
    
    /*Date Picker*/
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    /*End Date Picker*/
    
    
    function deleteRequest(){
        $.post('../delete', $("#frmRequest").serialize(), 
            function(data) {
            window.location.reload();
        });
    }
 
});