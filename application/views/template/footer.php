<footer class="computerView">
    <div class="links flex-row">
        <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Termos e condições</a>
        <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Privacidade</a>
        <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Sobre nós</a>
    </div>  
    <div class="brand flex-column text-centered">
        <img src="<?php echo base_url('assets/img/logo.png');?>" alt="">
        <span>© 2023 SpeedLog</span>
    </div>
    <div class="socialMedia flex-row">
        <a class="btnSocialMedia btnTwitter" target="_blank" rel="noopener noreferrer" href="http://twitter.com">
            <img src="<?php echo base_url('assets/icons/twitter-white.png');?>" alt="Link Twitter">
        </a>
        <a class="btnSocialMedia btnFacebook" target="_blank" rel="noopener noreferrer" href="http://facebook.com">
            <img src="<?php echo base_url('assets/icons/facebook-white.png');?>" alt="Link Facebook">
        </a>
        <a class="btnSocialMedia btnInstagram" target="_blank" rel="noopener noreferrer" href="http://instagram.com">
            <img src="<?php echo base_url('assets/icons/instagram-white.png');?>" alt="Link Instagram">
        </a>
    </div>
</footer>

<footer class="tabletView">
    <div class="linksMedia flex-column">
        <div class="links flex-row spaced-around wrap">
            <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Termos e condições</a>
            <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Privacidade</a>
            <a href="<?php echo base_url('');?>" target="_blank" rel="noopener noreferrer">Sobre nós</a>
        </div>  
        <div class="socialMedia flex-row">
            <a class="btnSocialMedia btnTwitter" target="_blank" rel="noopener noreferrer" href="http://twitter.com">
                <img src="<?php echo base_url('assets/icons/twitter-white.png');?>" alt="Link Twitter">
            </a>
            <a class="btnSocialMedia btnFacebook" target="_blank" rel="noopener noreferrer" href="http://facebook.com">
                <img src="<?php echo base_url('assets/icons/facebook-white.png');?>" alt="Link Facebook">
            </a>
            <a class="btnSocialMedia btnInstagram" target="_blank" rel="noopener noreferrer" href="http://instagram.com">
                <img src="<?php echo base_url('assets/icons/instagram-white.png');?>" alt="Link Instagram">
            </a>
        </div>
    </div>
    <div class="brand flex-column text-centered">
        <img src="<?php echo base_url('assets/img/logo.png');?>" alt="">
        <span>© 2023 SpeedLog</span>
    </div>
</footer>

<?php if($this->session->userdata('tipo')!=''){ echo '
<footer class="mobileView">
    <button class="btnMobile btnProfile selectedMobile"><img src="'.base_url("assets/icons/user-colored.png").'" alt=""></button>';
    if($this->session->userdata('tipo') == 'ENTREGADOR') echo'
    <button class="btnMobile btnOrders"><img src="'.base_url("assets/icons/moto.png").'" alt=""></button>';
    else if($this->session->userdata('tipo') == 'CLIENTE') echo '
    <button class="btnMobile btnOrders"><img src="'.base_url("assets/icons/box.png").'" alt=""></button>';
    echo '
    <button class="btnMobile btnMessages"><img src="'.base_url("assets/icons/message.png").'" alt=""></button>
    <button class="btnMobile btnSettings"><img src="'.base_url("assets/icons/config.png").'" alt=""></button>
</footer>';
}
else{ echo '
<footer class="mobileView2 ">
    <div class="links flex-column">
        <a href="'.base_url('').'" target="_blank" rel="noopener noreferrer">Termos e condições</a>
        <a href="'.base_url('').'" target="_blank" rel="noopener noreferrer">Privacidade</a>
        <a href="'.base_url('').'" target="_blank" rel="noopener noreferrer">Sobre nós</a>
    </div>
    <div class="brandMedia">
        <div class="brand flex-column text-centered">
            <img src="'.base_url('assets/img/logo.png').'" alt="">
            <span>© 2023 SpeedLog</span>
        </div>
        <div class="socialMedia flex-row">
            <a class="btnSocialMedia btnTwitter" target="_blank" rel="noopener noreferrer" href="http://twitter.com">
                <img src="'.base_url('assets/icons/twitter-white.png').'" alt="Link Twitter">
            </a>
            <a class="btnSocialMedia btnFacebook" target="_blank" rel="noopener noreferrer" href="http://facebook.com">
                <img src="'.base_url('assets/icons/facebook-white.png').'" alt="Link Facebook">
            </a>
            <a class="btnSocialMedia btnInstagram" target="_blank" rel="noopener noreferrer" href="http://instagram.com">
                <img src="'.base_url('assets/icons/instagram-white.png').'" alt="Link Instagram">
            </a>
        </div>
    </div>
</footer>';
}
?>
<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>
<!-- JAVA SCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
