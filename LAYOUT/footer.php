    <!-- / CORPO PAGINA -->    
    </div>

<!-- / BODY CONTAINER -->   
</div>


 <!--FOOTER-->
 <div class="footer__container">
     <div class="footer__line">

     </div>
    
     <div class="footer__end__line">
        <div class="footer">
            - BeerLocator 2021 - <br>
            Powered by x
        </div>
     </div>
 </div>


<!--HAMBURGER ANIMATION-->
<script>
    function myFunction(x) {
      //x.classList.toggle("hamburger-animation");
    }
</script>

<!--MOBILE NAVBAR MENU ANIMATION-->
<script>
    function openNav() {
    document.getElementById("sidenav").style.width = "250px";
    //document.getElementById("body__container").style.marginRight = "250px";
    //document.getElementById("hamburger").style.right = "250px";
    document.getElementById("logo").style.left = "-250px";
    document.getElementById("corpoPagina").style.left = "-250px";
    }
    
    function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    //document.getElementById("body__container").style.marginRight= "0";
    //document.getElementById("hamburger").style.display = "inline-block";
    document.getElementById("logo").style.left = "0px";
    }
</script>


<!--SCROLL NAVBAR ANIMATION-->
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if(screen.width<=800){ //mobile
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.height = "60px";
                document.getElementById("pusher").style.height = "60px";
                document.getElementById("logo").style.top = "-8px";
                document.getElementById("logo").style.height = "30px";
                document.getElementById("hamburger").style.top = "-11px";
            } else {
                document.getElementById("navbar").style.height = "80px";
                document.getElementById("pusher").style.height = "80px";
                document.getElementById("logo").style.top = "0px";
                document.getElementById("logo").style.height = "35px";
                document.getElementById("hamburger").style.top = "0px";
            }
        } //Desktop (add else)
          
        
    }
</script>
</body>
</html>