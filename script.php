<script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
        character: $("#character")
        fName: $("#fName").val(),
        lName: $("#lName").val(),
        s_Email: $("#s_Email").val(),
        school: $("#school")
        password: $("#password").val(),
        c_password: $("#c_password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }