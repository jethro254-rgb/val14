<?php

$reasons = [
"You always make me smile even on my worst days",
"You support me and believe in me",
"You have the most beautiful heart",
"You make every moment special",
"You inspire me to be a better person",
"You understand me like no one else",
"Your smile brightens my whole world",
"You are my best friend and my love",
"You are the best thing that ever hapenned to me",
"You are the most beautiful gal 'mamaa❤️'",
];

?>

<!DOCTYPE html>
<html>
<head>

<title>Reasons Why I Love You</title>

<style>

body{
font-family: Arial;
background:#ff9a9e;
text-align:center;
padding-top:60px;
}

.container{
background:white;
width:500px;
margin:auto;
padding:30px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h1{
color:#ff4b5c;
}

ul{
text-align:left;
font-size:18px;
line-height:30px;
}

li{
margin-bottom:10px;
}

button{
background:#ff4b5c;
border:none;
color:white;
padding:10px 18px;
font-size:16px;
border-radius:8px;
cursor:pointer;
margin-top:20px;
}

a{
text-decoration:none;
color:white;
}

</style>

</head>

<body>

<div class="container">

<h1>Reasons Why I Love You ❤️</h1>

<ul>

<?php
foreach($reasons as $reason){
echo "<li>$reason</li>";
}
?>

</ul>

<a href="val.php">
<button>Back to Valentine Page</button>
</a>

</div>

</body>
</html>