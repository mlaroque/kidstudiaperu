function lazyLoad() {
    lazyAds.forEach(ad => {
        const getWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
        if (ad.offsetTop < window.innerHeight + window.pageYOffset + inAdvance && ad.className.indexOf("loaded") < 0) {
            ad.style.backgroundColor = "";
            if(ad.id == "ads_abajo_h1"){
                if(getWidth > 800){
                    add_ad("3758890141","","",ad.id,"","KidstudiaPE Listado Colegios Abajo H1 Desktop","ad_different_sizes","lc_ads-90");
					ad.classList.add('loaded');
                }else{
                    add_ad("9091107870","","auto",ad.id,"","KidstudiaPE Listado Colegios Abajo H1 Movil","","lc_ads-90");
					ad.classList.add('loaded');
                }
            }
        }
    })
} 

lazyLoad();

window.addEventListener('scroll', lazyLoad);
window.addEventListener('resize', lazyLoad);