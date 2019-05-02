<html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
<script>
var countdown=5;
var key='abc';
var qrcode='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://bove.ch/companions/'.concat(key);
var x = setInterval(function() {
	countdown -= 1;
	if (countdown >= 1) {
		document.getElementById("countdown").innerHTML=countdown;
	}
	else if (countdown == 0) {
		document.getElementById("countdown").innerHTML="Smile !";
	}
	else if (countdown >= -4) {
		document.getElementById("countdown").hidden=true;
		const photo_link = fetch('get_photo.php?'.concat(key)).then(response => response.text()).then(data => {
			var getNextEmptyImg = function() {
				var photos = document.getElementsByClassName("photo");
				for (i=0; i<photos.length; i++) {
					if (!photos[i].src) {
						return photos[i];
					}
				}
			}
			getNextEmptyImg().src=data;
		});
	}
	else if (countdown = 6) {
		document.getElementById("qrcode").src = qrcode;
		document.getElementById("qrcode").hidden = false;
	}
}, 1000);
</script>
</head>
<body>
<p id="countdown">5</p>
<table>
<tr>
<td>
<img class="photo top left"/>
</td><td>
<img class="photo top right" />
</td>
</tr><tr>
<td>
<img class="photo bottom left" />
</td><td>
<img class="photo bottom right"/>
</td>
</table>
<img id="qrcode" hidden/>
</body>
</html>
