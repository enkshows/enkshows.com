$(document).ready(function(){
  $('.salesforce').submit(function(e){
    e.preventDefault();
      $.ajax({
        url: $(this).attr('action'),
     
        // The name of the callback parameter, as specified by the YQL service
        jsonp: "callback",
     
        // Tell jQuery we're expecting JSONP
        dataType: "jsonp",
        
        type: $(this).attr('method'),
        // Tell YQL what we want and that we want JSON
        data: {
            q: "select title,abstract,url from search.news where query=\"cat\"",
            format: "json"
        },
     
        // Work with the response
        success: function( response ) {
            console.log('success');
            console.log( response + " this succeeded"); // server response
        },
        error: function(error){
          console.log('error');
          console.log(error);
        }
    });
  });



  
});