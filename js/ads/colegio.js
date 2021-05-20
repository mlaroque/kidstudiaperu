function lazyLoad() {
    lazyAds.forEach(ad => {
        const getWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
        if (ad.offsetTop < window.innerHeight + window.pageYOffset + inAdvance && ad.className.indexOf("loaded") < 0) {
            ad.style.backgroundColor = "";
            if(ad.id == "ads_abajo_h1"){
                if(getWidth > 800){
                    add_ad("3278462277","","",ad.id,"","KidstudiaPE Colegios Abajo H1 Desktop","ad_different_sizes","lc_ads-90");
					ad.classList.add('loaded');
                }else{
                    add_ad("7561322215","","auto",ad.id,"","KidstudiaPE Colegios Abajo H1 Movil","","lc_ads-90");
					ad.classList.add('loaded');
                }
            }else if(ad.id == "ads_abajo_quick"){
                add_ad("4270327352","","auto",ad.id,"","KidstudiaPE Colegios Abajo QuickInfo Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads_abajo_NT_quick"){
                add_ad("8261543259","","fluid",ad.id,"","KidstudiaPE Colegios NT Abajo QuickInfo Responsive","","lc_ads-429");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-third-h2"){
                add_ad("9479256155","","auto",ad.id,"","KidstudiaPE  Colegios Abajo 3er H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-sixth-h2"){
                add_ad("3232029111","","auto",ad.id,"","KidstudiaPE  Colegios Abajo 6to H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-NT-fourth-h2"){
                add_ad("6661521128","","auto",ad.id,"","KidstudiaPE  Colegios NT Abajo 4to H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-NT-sixth-h2"){
                add_ad("1697447980","","auto",ad.id,"","KidstudiaPE  Colegios NT Arriba 6to H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads_niveles_abajo_h1"){
                if(getWidth > 800){
                    add_ad("1465034761","","auto",ad.id,"","KidstudiaPE Niveles Abajo H1 Desktop","ad_different_sizes","lc_ads-90");
				    ad.classList.add('loaded');
                }else{
                    add_ad("1132479386","","auto",ad.id,"","KidstudiaPE Niveles Abajo H1 Movil","","lc_ads-90");
				    ad.classList.add('loaded');
                }   
            }else if(ad.id == "ads_niveles_abajo_quick"){
                add_ad("8819397711","","auto",ad.id,"","KidstudiaPE Niveles Abajo QuickInfo Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-nivel-third-h2"){
                add_ad("5865931316","","auto",ad.id,"","KidstudiaPE  Niveles Abajo 3er H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }else if(ad.id == "ads-nivel-fifth-h2"){
                add_ad("4842486079","","auto",ad.id,"","KidstudiaPE  Niveles Abajo 5to H2 Responsive","","lc_ads-280");
				ad.classList.add('loaded');
            }
        }
    })
} 

lazyLoad();

window.addEventListener('scroll', lazyLoad);
window.addEventListener('resize', lazyLoad);