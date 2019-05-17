<html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
<script>
var countdown=5;
var dt = new Date();
var key=dt.getTime();
var qrcode='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://nas-bove.synology.me/'.concat(key);
console.log(qrcode);
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
		var getNextEmptyImg = function() {
			var photos = document.getElementsByClassName("photo");
			for (i=0; i<photos.length; i++) {
				if (photos[i].hidden) {
					return photos[i];
				}
			}
		}
		var my_image = getNextEmptyImg();
		my_image.hidden=false;
		let xhr = new XMLHttpRequest();
		xhr.open('GET', 'get_photo.php?dest='.concat(key), false);
		xhr.send();
		var photo_link = xhr.response;
		console.log(photo_link);
		my_image.src=photo_link;


	}
	else if (countdown == -10) {
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
<img class="photo top left" src="loading.gif" hidden />
</td><td>
<img class="photo top right" src="loading.gif" hidden />
</td>
</tr><tr>
<td>
<img class="photo bottom left" src="loading.gif" hidden />
</td><td>
<img class="photo bottom right" src="loading.gif" hidden />
</td>
</table>
<img id="qrcode" hidden/>
</body>
</html>
