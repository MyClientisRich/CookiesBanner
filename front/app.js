var banner = document.getElementById('cookiesBanner'),
    btn_ok = document.getElementById('btn_ok'),
    cookieIsOk = function() {
        var cookie = localStorage.getItem('CB-valide');
        return (cookie === 'OK');
    },
    valide_cookie = function() {
        if(!cookieIsOk()) {
            try{
                localStorage.setItem('CB-valide', 'OK');
            } catch(e) {
                console.log('LocalStorage n\'est pas disponible');
            }

            hideBanner();
        }

        return false;
    },
    hideBanner = function() {
        banner.style.display = 'none';
    };

btn_ok.onclick = valide_cookie;
if(cookieIsOk()) {
    hideBanner();
}