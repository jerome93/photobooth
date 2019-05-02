expressions=(DSCN5399.jpg  DSCN5426.jpg  DSCN5559.jpg  DSCN5561.jpg)

selectedexpression=${expressions[$RANDOM % ${#expressions[@]} ]}
echo $selectedexpression
