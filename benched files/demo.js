$(document).ready(function(){
    $('.submit').click(function(e){
        e.preventDefault()
        var fd = new FormData()
        var image = $('.imageInp')[0].files[0]
        fd.append('file', image)
        
        $.ajax({
            url:'demo2.php',
            type:'post',
            data:fd,
            contentType:false,
            processData:false,
            beforeSend:function(){

            },
            success:function(response){
                console.log(response);
            }
        })
    })
})