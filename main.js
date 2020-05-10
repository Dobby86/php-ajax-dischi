
$(document).ready(function() {

$.ajax({

    url : "database.php",

    method : "GET",

    success : function(data) {

        var template = Handlebars.compile($("#entry-template").html());

        for (var i = 0; i < data.length; i++) {
             var album = data[i];
             console.log(album);
             var context = template({
                 poster: album.poster,
                title : album.title,
                author : album.author,
                year : album.year,
                genre : album.genre

             });

             $(".cds-container").append(context);
        }


    },
    error : function(err){
        alert("warning");
    }

});








// fine document.ready
});
