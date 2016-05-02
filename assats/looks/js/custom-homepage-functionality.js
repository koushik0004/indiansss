$(document).ready(function(){
    if ( $.attrFn ) { $.attrFn.text = true; }
    
    var baseURL = $('#global-base-url').val().trim();
    var defaultCheckedRadio = '';
    var dialog;
    
       dialog = $( "#dialog-form" ).dialog({
          autoOpen: false,
          height: 400,
          width: 550,
          modal: true,
          open: function(){
               //$( "#search_criteria" ).selectmenu();
              var radioWrapper = $('.ui-dialog div.ui-custom-radio');
              var onlyCheckedRadio = $('input[type="radio"]:checked', radioWrapper);
              defaultCheckedRadio = onlyCheckedRadio;
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
            fromSearchText.attr('placeholder', 'Author name, Article title, journal title');
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
        var fromSearchText = $('#criteria');
        var allRadio = $('input[type="radio"]', radioWrapper);
        allRadio.on('click', function(){
           defaultCheckedRadio = $(this);    
           fromSearchText.attr('placeholder', $(this).attr('text-data'));
           console.log($(this).val());
        });
        /*radio button for search*/
        /* getting only checked radio button */
        
        
        /* getting only checked radio button */
    
        var availableTags = [
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"
        ];
        $( "#criteria" ).autocomplete({
          source: function(req, res){
              $.ajax({
                  url: baseURL+"home/search/",
                  type: 'POST',
                  dataType: "json",
                  data: {
                    q: req.term,
                    attrb: defaultCheckedRadio.val()  
                  },
                  success: function( data ) {
                    res( data );
                  }
                });
          },
          minLength: 3,
          open: function() {
            $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
          },
          close: function() {
            $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
          }  
        });
});