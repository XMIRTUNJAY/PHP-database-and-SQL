<!DOCTYPE html>
<html>

   <head>
      <title>HTML Frames are dumb thing</title>
   </head>
	
   <frameset colss = "50%,50%">
      <frame name = "left"  src = "/php/x.php" />
      <frame name = "right"  src = "/php/y.php" />
     
   
      <noframes>
         <body>Your browser does not support frames.</body>
      </noframes>
      
   </frameset>
   
</html>