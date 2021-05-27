<footer>

</footer>
<!-- Link js -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
<script>
    // === Show navbar ===
    const showNavbar = (toggleId, navId, bodyId, headerId, headerPosId) => {
    const toggle = document.getElementById(toggleId);
    const nav = document.getElementById(navId)
    const body_pd = document.getElementById(bodyId);
    const header_pd = document.getElementById(headerId);
    const header_pos = document.getElementById(headerPosId);

        //validate that all variables exist
        if (toggle && nav && body_pd && header_pd && header_pos) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show');
                //change icon
                toggle.classList.toggle('bx-x');
                //add padding to header menu
                header_pos.classList.toggle('showToggle');
                //add padding to body
                body_pd.classList.toggle('body-pd');
                //add padding to header
                body_pd.classList.toggle('header-pd');
            })
        }
    }

    showNavbar('header-toggle','nav-bar','body_pd','header','header-pos');


    // link Active 
    const linkColor = document.querySelectorAll('.nav_link');

    function colorLink() {
        if (linkColor) {
            linkColor.forEach( (l) => l.classList.remove('active'));
            this.classList.add('active');
        }
    }

    linkColor.forEach((l) => l.addEventListener('click', colorLink));

    //profile show
    const showProfile = (profileUserId, settingId) => {

        const toggle = document.getElementById(profileUserId);
        const nav = document.getElementById(settingId)
        if (toggle && nav) {
            toggle.addEventListener('click', () => {
                nav.classList.toggle('show_menu_account');
            });
        }
    }

    showProfile('profileUser','setting');

    const notif = document.querySelectorAll('.not'); // ici je prend tout les elements qui ont la classe theme
    const message = document.getElementById('sms');
    // ici item represente chacun de mes elements de theme
    if (message) {
        console.log("echo  ");
    }
    notif.forEach( (item ) => {
        item.addEventListener('click', (event) => {
            switch (event.target.id) {
                case "bx":
                    console.log("boo " + message);
                    message.classList.toggle('showNotify');
                    break;
                case "not":
                    console.log("boo");
                    message.classList.toggle('showNotify');
                    break;
                case "bx1":
                    console.log("boo " + message);
                    message.classList.toggle('showNotify');
                    break;
                default:
                    null;
                    break;
            }
        });
    });
</script>
<script type="text/javascript" src="{{ URL::asset('js/client.js') }}"></script>
<script src="https://kit.fontawesome.com/7328ff3444.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
