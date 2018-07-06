$(document).ready(function(){

    $('.js-login').click(function(){
        $( '.login' ).modal({keyboard: true});
    });

    $('.js-signin').click(function(){
        $( '.signin' ).modal({keyboard: true});
    });

    readURL();

});

function file(input){

    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function (e){
            $('#image').attr('src',e.target.result).height(200);
        };
        reader.readAsDataURL(input.files[0]);

        $('#image').src(archivo);
    }else{
        input.files = $('#image').src;
    }
}