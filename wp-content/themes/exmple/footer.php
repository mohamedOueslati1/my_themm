</div>
<div class="ctl">
<img  src="<?php echo get_bloginfo('template_directory') ?>/img/v_m.jpg" style="width: 100%;height: 250px;">
</div>
<footer class="footer">
        <p>Copyrite 2021c By &copy; Mohamed Oueslati</p>
    </footer>

    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>
</body>
</html> 