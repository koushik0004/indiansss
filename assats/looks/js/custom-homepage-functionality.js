$(document).ready(function(){
    if ( $.attrFn ) { $.attrFn.text = true; }
    var dialog;
    
       dialog = $( "#dialog-form" ).dialog({
          autoOpen: false,
          height: 400,
          width: 550,
          modal: true,
          open: function(){
               //$( "#search_criteria" ).selectmenu();
           },
          //position: "center",
          dialogClass: 'fixed-dialog',
          show: {
            effect: "fold",
            direction: "down",
            duration: 1000
          },
          hide: {
            effect: "explode",
            duration: 1000
          },
          buttons: {
            "Search": SearchJournal,
            "Cancel": function() {
              dialog.dialog( "close" );
                //e.preventDefault();
            }
          },
          close: function() {
            form[ 0 ].reset();
            //allFields.removeClass( "ui-state-error" );
            //$('body').removeClass('stop-scrolling');
          }
        });

        form = dialog.find( "form" ).on( "submit", function( event ) {
          event.preventDefault();
          addUser();
        });

        $( "#current-issue" )
            .on( "click", function(event) {
            //$('body').addClass('stop-scrolling');
            dialog.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        $( "#past-issue" )
            .on( "click", function(event) {
            //$('body').addClass('stop-scrolling');
            dialog.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        $( "#search-article" )
            .on( "click", function(event) {
            //$('body').addClass('stop-scrolling');
            dialog.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        $( "#research-paper" )
            .on( "click", function(event) {
            //$('body').addClass('stop-scrolling');
            dialog.dialog( "open" );
            //event.preventDefault();
            return false;
        });
        function SearchJournal(){
            
        }
        console.log($( "#search_criteria" ).length);
        $( "#search_criteria" ).buttonset();
    
    
        /*radio button for search*/
        var radioWrapper = $('.ui-dialog div.ui-custom-radio');
        var allRadio = $('input[type="radio"]', radioWrapper);
        allRadio.on('click', function(){
           console.log($(this).val());
        });
        /*radio button for search*/
});