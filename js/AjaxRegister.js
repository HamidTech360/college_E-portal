$(document).ready(function(){
    document.querySelector('.submitImg').addEventListener('click', function(e){
        e.preventDefault()
    })
    $('#submit').click(function(e){
        e.preventDefault()

        let formOk;
       for(let i=1; i<=12; i++){
           
           let value = $(`.inpt-${i}`).val()
           if(value !== ""){
                formOk=1
           }else{
               formOk=0
           }
       }
      // console.log(formOk);

      
   
      
     if (formOk==1){
        $.ajax({
            method:'post',
            url:'comfirm-register.php',
            data:$('.registration').serialize(),
            beforeSend:function(){
                // console.log(this.data);
               
            },
            success:function(response){
                console.log(response);
                $('.alert').fadeIn()
                if(response==1){
                    document.querySelector('.alert').classList.remove('alert-warning')
                    document.querySelector('.alert').classList.add('alert-success')
                    $('.alert').html(' student has been successfully registered')
                }else{
                    document.querySelector('.alert').classList.add('alert-warning')
                    $('.alert').html('please choose another Id for student <br> this Id already exist')
                }
            }
        }) 
       }else{
            
            $('.alert').fadeIn()
            document.querySelector('.alert').classList.add('alert-warning')
            $('.alert').html('please fill out the input fields')
       }
    

    var fd = new FormData()
    var files = $('.profileimage')[0].files[0]
    fd.append('file', files)
    $.ajax({
       url:'comfirm-register.php',
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