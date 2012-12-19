$(function() {
    
    /*Loan Create - View Request Button*/
    
    $( "#dialog" ).dialog({
        autoOpen: false,
        width: 1024,
        buttons: [
                /*{
                        text: "Ok",
                        click: function() {
                                $( this ).dialog( "close" );
                        }
                },
                {
                        text: "Cancel",
                        click: function() {
                                $( this ).dialog( "close" );
                        }
                }*/
        ]
    });
                
    // Link to open the dialog
    $( "#dialog-link" ).click(function( event ) {
        $( "#dialog" ).dialog( "open" );
        event.preventDefault();
    });
    
});


