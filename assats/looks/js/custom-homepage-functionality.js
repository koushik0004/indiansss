$(document).ready(function(){
    if ( $.attrFn ) { $.attrFn.text = true; }
    
    var baseURL = $('#global-base-url').val().trim();
    var defaultCheckedRadio = '';
    var dialog;
    var fromSearchText = $('input.criteria-text', $( "#dialog-form" ));
    
        /*radio all all search*/
        $( "div.ui-custom-radio" ).buttonset();
        /*radio all all search*/
    
       dialog = $( "#dialog-form" ).dialog({
          autoOpen: false,
          height: 400,
          width: 550,
          modal: true,
          resizable: false,
          open: function(){
               //$( "#search_criteria" ).selectmenu();
              var radioWrapper = $('.ui-dialog div.ui-custom-radio.search-radio');
              var onlyCheckedRadio = $('input[type="radio"]:checked', radioWrapper);
              defaultCheckedRadio = onlyCheckedRadio;
              fromSearchText.attr('placeholder', 'Author name, Article title, journal title');
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
        
        $( "#search-article" )
            .on( "click", function(event) {
            dialog.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        $( "#research-paper" )
            .on( "click", function(event) {
            dialog.dialog( "open" );
            event.preventDefault();
        });
        function SearchJournal(){
            
        }
        //console.log($( "#search_criteria" ).length);
        //$( "#search_criteria" ).buttonset();
    
    
        /*radio button for search*/
        var radioWrapper = $('div.ui-custom-radio.ui-buttonset');
        console.log(radioWrapper.length);
        
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
    
        /*search box for all search*/
        $( "input.criteria-text", $( "#dialog-form" )).autocomplete({
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
        /*search box for all search*/
    
        
    
    
    
        /*past issues dialog operation*/
        var dialogPastIssue = $( "#dialog-pass-issues" ).dialog({
              autoOpen: false,
              height: 400,
              width: 550,
              modal: true,
              resizable: false,
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
                "Find": FindJournal,
                "Cancel": function() {
                  dialogPastIssue.dialog( "close" );
                    //e.preventDefault();
                }
              },
              close: function() {
                form[ 0 ].reset();
                //allFields.removeClass( "ui-state-error" );
                //$('body').removeClass('stop-scrolling');
              }
            });
        var buttonSetwrapper = $('div.ui-dialog-buttonset', $( "#dialog-pass-issues" ).next());
        var findButton = $('button:first-child', buttonSetwrapper);
        var option = {
            open: function(){
                       //$( "#search_criteria" ).selectmenu();
                      var radioWrapper = $('.ui-dialog div.ui-custom-radio.past-issue-radio');
                      var onlyCheckedRadio = $('input[type="radio"]:checked', radioWrapper);
                      defaultCheckedRadio = onlyCheckedRadio;
                      console.log(defaultCheckedRadio.val());

                      /*making disabled find button by default*/
                      findButton.addClass('ui-state-disabled');
                      /*making disabled find button by default*/

                   }
            
        };
        var lastYrOfPastIssueMin = $('#past-issue-year-min', $( "#dialog-pass-issues" ));
        var lastYrOfPastIssueMax = $('#past-issue-year-max', $( "#dialog-pass-issues" ));
        var uiMessges = $('div.ui-widget', $( "#dialog-pass-issues" ));
        var yrErrorMsg = $('div.ui-state-alert.ui-corner-all.year-error-msg', uiMessges);
        $('#dialog-pass-issues').dialog('option', 'open', option.open);
        $( "#dialog-pass-issues" ).on('keyup', '#issue_year', function(){
            var self = $(this);
            /*making enabled the find button*/
            if(self.val().length==4 && $.isNumeric(self.val())){
                findButton.removeClass('ui-state-disabled');
            }else{
                findButton.addClass('ui-state-disabled');
            }
            if(yrErrorMsg.is(':visible')){
                yrErrorMsg.fadeOut('slow');
            }
            /*making enabled the find button*/
        });
        findButton.on('click', function(evt){
            var self = $(this);
            var inputYr = parseInt($('#issue_year', $('#dialog-pass-issues')).val());
            if(inputYr>=parseInt(lastYrOfPastIssueMin.text()) && inputYr<=parseInt(lastYrOfPastIssueMax.text())){
                console.log('data send')
            }else{
                yrErrorMsg.fadeIn('slow');
                $('#issue_year', $('#dialog-pass-issues')).focus();
                findButton.addClass('ui-state-disabled');
            }
            
        });
        $( "#past-issue" )
            .on( "click", function(event) {
            dialogPastIssue.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        function FindJournal(){

        }
        /*past issues dialog operation*/
    
    
        /*current issue dialog*/
        var dialogCurrentIssue = $( "#dialog-current-issues" ).dialog({
              autoOpen: false,
              height: 540,
              width: 650,
              modal: true,
              resizable: false,
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
                "Cancel": function() {
                  dialogCurrentIssue.dialog( "close" );
                    //e.preventDefault();
                }
              },
              close: function() {
                //form[ 0 ].reset();
                //allFields.removeClass( "ui-state-error" );
                //$('body').removeClass('stop-scrolling');
              }
            });
        $( "#current-issue" )
            .on( "click", function(event) {
            dialogCurrentIssue.dialog( "open" );
            event.preventDefault();
            //return false;
        });
        /*current issue dialog*/
});