<!-- example for PHP 5.0.0 final release -->

<?php   

$conn = @mysql_connect( "localhost", "mike", "bingo" ) 
	or die( "Sorry - could not connect to MySQL" );

$rs1 =	@mysql_create_db( $_REQUEST['db'] );

$rs2= 	@mysql_list_dbs($conn);

$list = "";

for( $row=0; $row < mysql_num_rows( $rs2 ); $row++ )
{ 
  $list .= mysql_tablename( $rs2, $row ) . " | "; 
} 

?>

<html>

 <head>
  <title>Creating databases</title>
 </head>

 <body>

 <form action="<?php echo( $_SERVER['PHP_SELF'] ); ?> " method="post">

 Current databases: <?php echo( $list ); ?> 
 <hr>
 Name:<input type = "text" name = "db"> 
 <input type = "submit" value = "Create database">
 </form>

 </body>

</html>