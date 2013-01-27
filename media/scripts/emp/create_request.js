$(function() {
    
    //Set button disabled
    if($(".required").val() == "")
    {
      $("#createRequestButton").attr("disabled","disabled");
      $('#saveRequestButton').attr("disabled","disabled");
    }
    else
    {
      $("#createRequestButton").removeAttr('disabled');
      $('#saveRequestButton').attr("disabled");
    }
      
    var cache = {};
    /* Search Borrower Input Text */
    $("#borrowerName").autocomplete({
        minLength: 1,
        source: function( request, response ) {
            var term = request.term;
            if ( term in cache ) {
                response( cache[ term ] );
                return;
            }
            
            $.getJSON( "../loan_create/borrower_list", request, 
                function( data ) {
                    cache[ term ] = data;
                    response( data );
                }
            );
        },
         focus: function( event, ui ) {
            $( "#borrowerName" ).val( ui.item.value );
            return false;
        },
        select: function( event, ui ) {
            //$( "#borrowerName" ).val( ui.item.label );
            $( "#borrowerID" ).val( ui.item.label.key );
            return false;
         }
    });
    /* End Search Borrower Input Text */
    
    /* Search Borrower Button */
    $("#searchBorrowerButton").click(function(){
        
        $.ajax({
            'url' : '../loan_create/view',
            'type' : 'POST',
            'data' : $('#frmRequest').serialize, //Gets all of the values from a form
            'success' : function(data) {
                $("#last_name").html(data)
                
            }
        });
     });
    /* End Search Borrower Button */
    
    /* Create or Generate CLR Number */
    $("#createRequestButton").click(function(){
        $.ajax({
            'url': "../loan_create/create",
            'dataType' : 'json',
            'success': function(data) {
                if($(".required").val() != "")
                {
                    if($("#clr_number").val() == "")
                    {
                        $("#clr_number").val(data[0].documentNumber);
                        $("#clr_date").val(createDate());
                    }

                    if($("#laf_number").val() == "")
                    {
                        $("#laf_number").val(data[1].documentNumber);
                        $("#laf_date").val(createDate());
                    }
                }
            }
        })
    });
    /* End Create or Generate CLR Number */
   
   /* View Loan Request for Posting */
    $("#viewRequestButton").click(function(){
        window.location="../loan_request/";
    });
    /* End View Loan Request for Posting */
    
    /* Save Request */
    $('#saveRequestButton').click(function() {
        $.ajax({
            'url' : '../loan_create/save/',
            'type' : 'POST',
            'data' : $('#frmRequest').serialize(), //Gets all of the values from a form
            'success' : function(data) {
            $('#saveRequestButton').attr("disabled","disabled");
            }
        });
    });
    /* End Save Request */
    
    
    /*Date Picker*/
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    /*End Date Picker*/
    
    
    function createDate()
    {
        var date = new Date();

        var month = date.getMonth()+1;
        var day = date.getDate();

        var date_result =
        ((''+month).length<2 ? '0' : '') + month + '/' +
        ((''+day).length<2 ? '0' : '') + day + '/' +
        date.getFullYear();

        return date_result;
    }
});