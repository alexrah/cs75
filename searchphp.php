<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script> 
<script type="text/javascript" src="jquery.valueFx.js"></script>
<!-- no way to make it work with jquery ...im too js ignorant i guess, works with function below: -->
<script type="text/javascript">
function searchfield_focus(obj){
  obj.style.color=""
  obj.style.fontStyle=""
    if (obj.value=="Some text here")	{	obj.value=""	}}
</script>
		<title></title>
	</head>
  <body>
<div align="center">
  <p>Create a search engines implemented in PHP</p>
</div>
  	<form action="searchmulti.php" method="get" style="text-align: center;">
      <input type="text" name="q" value="Some text here" onfocus="searchfield_focus(this)">
      <br />
      <input type="submit" name="site" value="PHP">
      <input type="submit" name="site" value="MySQL">
      <input type="submit" name="site" value="JavaScript">
      <br />
      <a href="index.html">Home</a>
    </form>
  </body>
</html>
