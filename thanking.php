<?php require 'header.php'?>
<script>
    $( ".signup_link" ).remove();
    $( ".nav" ).append( "<li><a>Profile</a></li>" );
</script>

<script>
$(document).ready(function() {
        $('.parent').click(function() {
            $('.sub-nav').toggleClass('visible');
        });
    });
</script>

<div class="container-fluid alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="text-center">Successfully Registered!</p>
</div>


<?php require 'footer.php'?>