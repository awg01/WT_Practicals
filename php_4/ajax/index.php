<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <script>
       function showUser(str){
         if(str == ""){
           document.getElementById("txtHint").innerHTML = "";
         }else{
           var xmlHttp = new XMLHttpRequest();

           xmlHttp.onreadystatechange = function(){
             if (this.readyState==4 && this.status==200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
             }
           };

           xmlHttp.open("GET", "profile.php?uname="+str, true);
           xmlHttp.send();
         }
       }
    </script>
  </head>
  <body>
    <form>
       <label>UserName</label>
       <input type="text" name="uname" oninput="showUser(this.value);">
    </form>

    <div id="txtHint">
       Your profile will display here
    </div>

  </body>
</html>
