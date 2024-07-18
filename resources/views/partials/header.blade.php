<div id="headerContainer" class="header uk-navbar-container uk-navbar-transparent" uk-navbar>
    <div class="uk-navbar-left uk-width-1-1">
        <ul class="uk-navbar-nav uk-width-1-1">
            <li class="logo"><a href="#"><img src="assets/logos/main.png" alt="Logo"></a></li>
            <li class="logo flipped"><a href="#"><img src="assets/logos/orange.png" alt="Logo"></a></li>
            <li><a href="#services-large" uk-scroll>Diensten</a></li>
            <li><a href="#film" uk-scroll>Film</a></li>
            <li><a href="#audio" uk-scroll>Audio</a></li>
            <li><a href="#photos" uk-scroll>Foto</a></li>
            <li><a href="#about" uk-scroll>Youri</a></li>
            <li class="menu-toggle"><a href="#sidebar" uk-toggle><span class="material-icons">menu</span></a></li>
            <li class="right">
                <div class="container">
                    <a href="mailto:yvanderstarre@gmail.com?SUBJECT=Informatie%20aanvraag">yvanderstarre@gmail.com</a>

                    <a href="https://www.youtube.com/channel/UC-0VYOh2chQ6SksGEgnARGg" target="_blank"><span class="uk-icon-button uk-margin-small-left" uk-icon="youtube"></span></a>
                    <a href="https://www.instagram.com/yourivanderstarre" target="_blank"><span class="uk-icon-button" uk-icon="instagram"></span></a>
                    <a href="https://www.linkedin.com/in/youri-van-der-starre-62b405173" target="_blank"><span class="uk-icon-button uk-margin-small-right" uk-icon="linkedin"></span></a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="sidebar" uk-offcanvas="flip: true; overlay: true;">
    <div class="uk-offcanvas-bar container">
        <div class="logo">
            <img src="assets/logos/orange.png" alt="Logo">
        </div>

        <div class="menu-items" onclick="closeMenu()">
            <ul class="uk-navbar-nav uk-width-1-1">
                <li><a href="#services-small" uk-scroll>Diensten</a></li>
                <li><a href="#film" uk-scroll>Film</a></li>
                <li><a href="#audio" uk-scroll>Audio</a></li>
                <li><a href="#photos" uk-scroll>Foto</a></li>
                <li><a href="#about" uk-scroll>Youri</a></li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="icons">
                <a href="https://www.instagram.com/yourivanderstarre" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                <a href="https://www.linkedin.com/in/youri-van-der-starre-62b405173" class="uk-icon-button  uk-margin-small-right" uk-icon="linkedin"></a>
                <a href="https://www.youtube.com/channel/UC-0VYOh2chQ6SksGEgnARGg" class="uk-icon-button" uk-icon="youtube"></a>
            </div>
            
            <!-- Contact -->
            <div class="contact">
                <a href="mailto:yvanderstarre@gmail.com?SUBJECT=Informatie%20aanvraag">Contact</a>
            </div>

            <!-- Terms and conditions -->
            <div class="terms">
                <a href="algemene-voorwaarden-youri-vd-starre.pdf" download>Algemene voorwaarden</a>
            </div>
        </div>
    </div>
</div>

<script>
    function closeMenu()
    {
        let sidebar = document.querySelector('#sidebar');
        if (sidebar) {
            UIkit.offcanvas(sidebar).hide();
        }
    }
</script>