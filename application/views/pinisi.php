<html>
<head>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />
<meta name="robots" content="noindex">
<title>PINISI LPMP</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
  <p id="hello">Anda akan dialihkan ke halaman pinisi dalam waktu <span id="count">5</span> detik</p>
<script>
window.onload = function(){
  
(function(){
  var counter = 5;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
        window.location.href='http://pinisi.lpmpsulsel.net/';
        clearInterval(counter);
    }
    
  }, 1000);
    
})();
  
}
</script>