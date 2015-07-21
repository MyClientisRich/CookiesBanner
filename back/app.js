var msgPerso = document.getElementById('msg_perso'),
    listeMsg = document.getElementById('msg'),
    linkPerso = document.getElementById('link_perso'),
    links = document.getElementById('link'),

    checkPerso = function(event) {

        var classes = event.target.perso.classList;
        if( this.value == 'other' ) {
            classes.remove('hidden');
        } else {
            classes.add('hidden');
        }

    };

listeMsg.perso = msgPerso;
listeMsg.addEventListener('change', checkPerso, false);

links.perso = linkPerso;
links.addEventListener('change', checkPerso, false);