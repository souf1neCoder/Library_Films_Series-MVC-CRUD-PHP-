

<footer class=" ">
    <div class="footer-main justify-content-center d-flex align-items-center ">
        <p>Copyright  &copy; 2022 <a title="MYM" href="<?php echo BASE_URL ?>"><i class="fas fa-film"></i><span class="mym">MYM</span></a> By Soufiane M'channa</p>
    </div>
</footer>
<!-- scripts js -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
    let h_alert = document.querySelector('.alert');
    function hideAlert(){
        if(h_alert){
            h_alert.remove();
        }
    }
    setTimeout(hideAlert,3000);
</script>
</body>
</html>