<html>
 <body>
  <head>
   <title>
     Lutz GPIO over PHP example
   </title>
  </head>

   <form method="post">

    <input type="submit" value="LED" name="LED" style="height:50px; width:100px">
   </form>
 </body>
</html>

<?php
        if(isset($_POST['GO']))
        {
                shell_exec('python /home/Lutz/toggle.py');
        }
?>
