$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
    
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'ユーザー名とパスワードを入力してください',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       confirmButtonColor:'#00D188',
                       title:'ユーザーエラーまたは間違ったパスワード',
                       confirmButtonText:'オーケー'
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'!接続に成功しました！',
                       confirmButtonColor:'#00D188',
                       confirmButtonText:'アクセスするために'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           //window.location.href = "dashboard/index.php";
                           window.location.href = "register.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});