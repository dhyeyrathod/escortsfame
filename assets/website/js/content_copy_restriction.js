
    $(document).ready(function () {
        //Disable full page
        $("body").on("contextmenu",function(e){
            return false;
        });
        
        //Disable part of page
        $("#id").on("contextmenu",function(e){
            return false;
        });
        
         //Disable full page
        $('body').bind('cut copy paste', function (e) {
            e.preventDefault();
        });
        
        //Disable part of page
        $('#id').bind('cut copy paste', function (e) {
            e.preventDefault();
        });
        
        //Disable cut copy paste
        $('body').bind('cut copy paste', function (e) {
            e.preventDefault();
        });
       
        //Disable mouse right click
        $("body").on("contextmenu",function(e){
            return false;
        });
    });