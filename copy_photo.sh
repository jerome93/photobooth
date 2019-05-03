mkdir compagnons/$2
cp -n index_photo.html compagnons/$2/index.html
sed -i 's/<table>/<table><tr><td><a href="'$1'" download><img src="'$1'" \/><\/a><\/td><\/tr>/' compagnons/$2/index.html
cp $1 compagnons/$2 &
