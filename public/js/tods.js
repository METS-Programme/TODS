/**
 * Created by imwota on 1/23/17.
 */

// $( document ).ready(function() {
//     $('#ip').on(change, function (e) {
//         var ip = $("option:selected", this);
//         alert(ip);
//
//         //// POST USING AJAX
//         //php file that retrueves data BY passing the ip
//         //Rturns jsonpCallback
//
//     });
// })

$(document).ready(function() {
    $('#ip').change(function(){
        var ip = $(this).find("option:selected").attr('value');

        $.ajax({
            //Retrieves tools using ajax.
        })
    });
});