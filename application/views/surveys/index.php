<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
  	<form action="/surveys/process_form" method="post">
  		<p>
  			<label for="name">Your Name:</label>
  			<input type="text" name="name" id="name" placeholder="Your Name:">
  		</p>

  		<p>
	  		<label for="location">Dojo Location:</label>
	  		<select name="location" id="location">
	  			<option value="Dubai">Dubai</option>
	  			<option value="Seattle">Seattle</option>
	  			<option value="Florida">Florida</option>
	  		</select>
	  	</p>

	  	<p>
	  		<label for="language">Favorite Language:</label>
	  		<select name="language">
	  			<option value="Ruby">Ruby</option>
	  			<option value="C++">C++</option>
	  			<option value="Javascript">Javascript</option>
	  		</select>
	  	</p>

	  	<p>
	  		<label for="comment">Comment (optional):</label></br>
	  		<textarea name="comment" cols="40" rows="15" id="comment"></textarea>
	  	</p>

  		<input type="submit" value="Submit">
  	</form>
</body>
</html>
