var lazyAds = [...document.querySelectorAll('.lazy-ads')];
var ads_inAdvance = 100;


function add_ad(slot, layout, format,id,sizes,adsense_title,ad_different_sizes='',lc_ads_class=''){
	let container_block = document.getElementById(id);
        container_block.className  += lc_ads_class; /* small banner | Anuncios responsive | Anuncios in-article */
	let ad_title = document.createComment(adsense_title);
	container_block.appendChild(ad_title);

	let ad = document.createElement( 'ins' );
	ad.setAttribute("style","display:block; text-align:center;" + sizes) ;
	ad.setAttribute("class","adsbygoogle " + ad_different_sizes);
	ad.setAttribute("data-ad-client","pub-7600038231425274") ;
	if(layout != ""){
		ad.setAttribute("data-ad-layout",layout) ;
	}
	ad.setAttribute("data-ad-slot",slot) ;
	if(ad_different_sizes == ''){
		ad.setAttribute("data-ad-format",format) ;
		ad.setAttribute("data-full-width-responsive","true") ;
	}

	container_block.appendChild( ad );

	(adsbygoogle = window.adsbygoogle || []).push({});
}