$(document).ready(function(){
    $('.profilepicture').click(function(){
        document.querySelector('.profileimage').click()
    })

    document.querySelector('.profileimage').addEventListener('change',function(){
        var e = document.querySelector('.profileimage')
        if(e.files[0]){
            var reader = new FileReader()
            reader.onload = function(e){
                document.querySelector('.profilepicture').setAttribute('src', e.target.result)
            }
            reader.readAsDataURL(e.files[0])
        }
    })
    
})