<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Movies</title>
</head>
Your public key

9de1bd4407c005feebcfb25ff2590f90

Your private key
3a06461712c641ffa0e996c5c2086559377aa4d3

<body>
<h1>HOME</h1>
    <div class="movie">ejemplo</div>
    <script type="text/javascript">
        const url = "developer.marvel.com"
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '9de1bd4407c005feebcfb25ff2590f90',
	}
};

try {
	const response = fetch(url, options);
	const result = response;
	console.log(result);
} catch (error) {
	console.error(error);
}
    </script>
</body>
</html>