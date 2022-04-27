function GetTreeLinks(){
	var html = '';
	jQuery('#link-list-group').addClass('loading');
	jQuery.ajax({
         type : "POST",
         dataType : "json",
         url : myAjax.ajaxurl,
         data : {action: "get_all_links"},
         success: function(response) {
            if(response.type == "success") {
				if(response.data){
					jQuery.each(response.data, function(index, value) {
						if(value.title=='' || value.url==''){
							var incomplete = 'incomplete';
						}else{
							var incomplete = '';
						}
						if(value.title==''){
						var titleplaceholder = 'Enter title';	
						}else{
						var titleplaceholder = value.title;	
						}
						if(value.url==''){
						var urlplaceholder = 'http://url';	
						}else{
						var urlplaceholder = value.url;	
						}
						if(value.status==1){
						var linkstatus = 'checked';	
						}else{
						var linkstatus = '';	
						}
						if(value.type=='PAYMENT'){
							if(value.paypal_email==''){
							var PaypalEmailplaceholder = 'Your Paypal Email';	
							}else{
							var PaypalEmailplaceholder = value.paypal_email;	
							}
							if(value.title==''){
							var classplaceholder = 'Enter title';	
							}else{
							var classplaceholder = value.title;	
							}
							if(value.class_price==''){
							var priceplaceholder = 'Price';	
							}else{
							var priceplaceholder = value.class_price;	
							}
							if(value.price_currency==''){
							var currencyplaceholder = 'Currency';	
							}else{
							var currencyplaceholder = value.price_currency;	
							}
							if(value.class_product_name==''){
							var classproductplaceholder = 'Item/Class/Workshop Name';	
							}else{
							var classproductplaceholder = value.class_product_name;	
							}
							if(value.class_product_name=='' || value.paypal_email=='' || value.class_price=='' || value.price_currency==''){
							var urlpayplaceholder = 'URL display after setup';
							}else{
							var urlpayplaceholder = "https://www.paypal.com/cgi-bin/webscr?cmd=_cart&add=1&business="+value.paypal_email+"&item_name="+value.class_product_name+"&item_number=123456&amount="+value.class_price+"&currency_code="+value.price_currency;
							}
							if(value.title=='' || value.class_product_name=='' || value.paypal_email=='' || value.class_price=='' || value.price_currency==''){
								html+='<div class="link paymentAdd" data-link-list-link="" data-link="'+value.ID+'" data-position="'+value.position+'" data-type="PAYMENT" data-amazon-affiliate="0"><div class="link-tooltip"></div><div class="link__inner"><div class="reorder-handle"> <svg width="4" height="16" viewBox="0 0 4 16"> <path d="M0 2C0 .897.897 0 2 0s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 8c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 14c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2"></path> </svg></div><div class="link-content"><div class="link-field paymenturl link-title placeholder"> <svg height="512pt" viewBox="0 -31 512.00033 512" width="512pt" xmlns="http://www.w3.org/2000/svg" id="fi_1170627" style="width: 22px;height: 22px;"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0" style="stroke: black;fill: honeydew;"></path><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0" style="fill: honeydew;stroke: black;"></path><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0" style="fill: honeydew;stroke: black;"></path></svg> <input type="text" placeholder="Enter title" data-link-title="" data-link-key="link[title]" value="'+value.title+'"><span tabindex="0" data-link-field-label="">'+classplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div><div class="link-field link-paypal-email placeholder"> <input type="text" placeholder="Your Paypal Email" data-link-title="" data-link-key="link[title]" value="'+value.paypal_email+'"><span tabindex="0" data-link-field-label="">'+PaypalEmailplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-price placeholder"> <input type="text" placeholder="Price" data-link-title="" data-link-key="link[title]" value="'+value.class_price+'"><span tabindex="0" data-link-field-label="">'+priceplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-currency placeholder"> <select name="currency_name" id="currency_id" class="large gfield_select" aria-required="true" aria-invalid="false"><option value="USD">USD</option><option value="AUD">AUD</option><option value="BRL">BRL</option><option value="CAD">CAD</option><option value="CNY">CNY</option><option value="CZK">CZK</option><option value="DKK">DKK</option><option value="EUR">EUR</option><option value="GBP">GBP</option><option value="HKD">HKD</option><option value="HUF">HUF</option><option value="INR">INR</option><option value="ILS">ILS</option><option value="JPY">JPY</option><option value="MYR">MYR</option><option value="MXN">MXN</option><option value="TWD">TWD</option><option value="NZD">NZD</option><option value="NOK">NOK</option><option value="PHP">PHP</option><option value="PLN">PLN</option><option value="RUB">RUB</option><option value="SEK">SEK</option><option value="CHF">CHF</option><option value="THB">THB</option></select> <span tabindex="0" data-link-field-label="">'+currencyplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-class-name placeholder"> <input type="text" placeholder="Item/Class/Workshop Name" data-link-title="" data-link-key="link[title]" value="'+value.class_product_name+'"><span tabindex="0" data-link-field-label="">'+classproductplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <label class="link-field link-active '+linkstatus+'" data-custom-checkbox="" for="link-active-'+value.ID+'"><input type="checkbox" id="link-active-'+value.ID+'" data-link-active="" data-link-key="link[active]" '+linkstatus+' tabindex="-1"></label><div class="link__tab__navs" data-link-tabs="">   <a class="link__tab__nav link__tab__nav--delete" data-link-tabs-tab="[data-link-tab-delete]"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M6 2.5v-2h4v2M1 2.5h14M9.533 13.5l.25-9M6.217 4.5l.25 9M2.661 4.5l.889 11h8.9l.888-11"></path> </svg> </a></div></div><div class="link__tab__panels" data-link-tab-panels=""><div class="link__tab__panel" data-link-tab-rss-feed-button="" data-link-tab-panel="" style="display: none;"></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-stats="" style="display: none;"><div class="panel__header"><h5> Link Analytics</h5> <a class="x" data-close="">×</a></div><div class="Analytics--Link-Overview"><div class="sc-exiMuG gXnifu"><div class="panel__body"><p>This link has been clicked <b>0</b></p></div></div></div></div><div class="link__tab__panel" data-link-tab-delete="" data-link-tab-panel="" style="display: none;"><div class="panel__header"><h5> Delete Link</h5> <a class="x" data-close="">×</a></div><div class="panel__body"><p>Are you sure you want to delete this link? This action cannot be undone.</p><div class="buttons"><button class="button grey" data-close="">Cancel</button><button class="button" data-link-delete="">Delete</button></div></div></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-payment="" style="display: none;"><div class="panel__header"><h5> Paypal Link Setup </h5> <a class="x" data-close="">×</a></div><div class="Link--ThumbnailTab"><div class="panel__body" style="height:100px;">  </div></div></div></div></div></div>';
							}else{							
							html+='<div class="link " data-link-list-link="" data-link="'+value.ID+'" data-position="'+value.position+'" data-type="CLASSIC" data-amazon-affiliate="0"><div class="link-tooltip"></div><div class="link__inner"><div class="reorder-handle"> <svg width="4" height="16" viewBox="0 0 4 16"> <path d="M0 2C0 .897.897 0 2 0s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 8c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 14c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2"></path> </svg></div><div class="link-content"><div class="link-field paymenturl link-title placeholder"> <svg height="512pt" viewBox="0 -31 512.00033 512" width="512pt" xmlns="http://www.w3.org/2000/svg" id="fi_1170627" style="width: 22px;height: 22px;"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0" style="stroke: black;fill: honeydew;"></path><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0" style="fill: honeydew;stroke: black;"></path><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0" style="fill: honeydew;stroke: black;"></path></svg> <input type="text" placeholder="Enter title" data-link-title="" data-link-key="link[title]" value="'+value.title+'"><span tabindex="0" data-link-field-label="">'+classplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div><div class="link-fieldd link-url placeholder"><span tabindex="0" data-link-field-label="">'+urlpayplaceholder+'</span> </div> <label class="link-field link-active '+linkstatus+'" data-custom-checkbox="" for="link-active-'+value.ID+'"><input type="checkbox" id="link-active-'+value.ID+'" data-link-active="" data-link-key="link[active]" '+linkstatus+' tabindex="-1"></label><div class="link__tab__navs" data-link-tabs="">   <a class="link__tab__nav link__tab__nav--payment" data-link-tabs-tab="[data-link-tab-payment]" value=""> <svg color="palette.green5" viewBox="0 0 16 16" enable-background="new 0 0 24 24" class="sc-fWPcDo jPjJPr"><path d="M8,4.5A3.5,3.5,0,1,0,11.5,8,3.50424,3.50424,0,0,0,8,4.5Zm0,6A2.5,2.5,0,1,1,10.5,8,2.50231,2.50231,0,0,1,8,10.5ZM14.5,6l-.32422-.01074a5.88166,5.88166,0,0,0-.39746-.93946l.23242-.23144a1.50241,1.50241,0,0,0,0-2.12207l-.707-.707a1.50093,1.50093,0,0,0-2.12305.001l-.23339.22266A5.857,5.857,0,0,0,10,1.82812V1.5A1.50164,1.50164,0,0,0,8.5,0h-1A1.50164,1.50164,0,0,0,6,1.5l-.01074.32422a5.88166,5.88166,0,0,0-.93946.39746l-.23144-.23242a1.49974,1.49974,0,0,0-2.12207,0l-.707.707a1.50271,1.50271,0,0,0,.001,2.12305l.22266.23339A5.857,5.857,0,0,0,1.82812,6H1.5A1.50164,1.50164,0,0,0,0,7.5v1A1.50164,1.50164,0,0,0,1.5,10l.32422.01074a5.88166,5.88166,0,0,0,.39746.93946l-.23242.23144a1.49943,1.49943,0,0,0,0,2.12109l.707.708a1.5027,1.5027,0,0,0,2.12305-.001l.23339-.22266A5.857,5.857,0,0,0,6,14.17188V14.5A1.50164,1.50164,0,0,0,7.5,16h1A1.50164,1.50164,0,0,0,10,14.5l.01074-.32422a5.88166,5.88166,0,0,0,.93946-.39746l.23144.23242a1.50329,1.50329,0,0,0,2.12207,0l.707-.708a1.49945,1.49945,0,0,0-.001-2.12207l-.22266-.23339A5.857,5.857,0,0,0,14.17188,10H14.5A1.50164,1.50164,0,0,0,16,8.5v-1A1.50164,1.50164,0,0,0,14.5,6ZM15,8.5a.501.501,0,0,1-.5.5h-.32812a.99844.99844,0,0,0-.94727.7002,5.33065,5.33065,0,0,1-.32813.792.99958.99958,0,0,0,.17676,1.167l.23047.22949a.4998.4998,0,0,1,0,.707l-.707.708a.5016.5016,0,0,1-.707.001l-.23145-.23242a.99892.99892,0,0,0-1.166-.17579,5.39468,5.39468,0,0,1-.79.32813A.99776.99776,0,0,0,9,14.17188V14.5a.501.501,0,0,1-.5.5h-1a.501.501,0,0,1-.5-.5v-.32812a.99844.99844,0,0,0-.7002-.94727,5.33065,5.33065,0,0,1-.792-.32813,1.01961,1.01961,0,0,0-.46582-.1123.98814.98814,0,0,0-.70117.28906l-.22949.23047a.501.501,0,0,1-.708,0l-.707-.708a.4998.4998,0,0,1-.001-.70605l.23242-.23145a.99916.99916,0,0,0,.17579-1.166,5.39468,5.39468,0,0,1-.32813-.79A.99776.99776,0,0,0,1.82812,9H1.5A.501.501,0,0,1,1,8.5v-1A.501.501,0,0,1,1.5,7h.32812a.99844.99844,0,0,0,.94727-.7002,5.33065,5.33065,0,0,1,.32813-.792.99958.99958,0,0,0-.17676-1.167l-.23047-.22949a.501.501,0,0,1,0-.708l.707-.707a.5016.5016,0,0,1,.707-.001l.23145.23242a.99765.99765,0,0,0,1.166.17579,5.39468,5.39468,0,0,1,.79-.32813A.99776.99776,0,0,0,7,1.82812V1.5A.501.501,0,0,1,7.5,1h1a.501.501,0,0,1,.5.5v.32812a.99844.99844,0,0,0,.7002.94727,5.33065,5.33065,0,0,1,.792.32813,1.00005,1.00005,0,0,0,1.167-.17676l.22949-.23047a.501.501,0,0,1,.708,0l.707.707a.50071.50071,0,0,1,.001.707l-.23242.23145a.99916.99916,0,0,0-.17579,1.166,5.39468,5.39468,0,0,1,.32813.79A.99776.99776,0,0,0,14.17188,7H14.5a.501.501,0,0,1,.5.5Z"></path></svg> </a>   <a class="link__tab__nav link__tab__nav--delete" data-link-tabs-tab="[data-link-tab-delete]"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M6 2.5v-2h4v2M1 2.5h14M9.533 13.5l.25-9M6.217 4.5l.25 9M2.661 4.5l.889 11h8.9l.888-11"></path> </svg> </a></div></div><div class="link__tab__panels" data-link-tab-panels=""><div class="link__tab__panel" data-link-tab-rss-feed-button="" data-link-tab-panel="" style="display: none;"></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-stats="" style="display: none;"><div class="panel__header"><h5> Link Analytics</h5> <a class="x" data-close="">×</a></div><div class="Analytics--Link-Overview"><div class="sc-exiMuG gXnifu"><div class="panel__body"><p>This link has been clicked <b>0</b></p></div></div></div></div><div class="link__tab__panel" data-link-tab-delete="" data-link-tab-panel="" style="display: none;"><div class="panel__header"><h5> Delete Link</h5> <a class="x" data-close="">×</a></div><div class="panel__body"><p>Are you sure you want to delete this link? This action cannot be undone.</p><div class="buttons"><button class="button grey" data-close="">Cancel</button><button class="button" data-link-delete="">Delete</button></div></div></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-payment="" style="display: none;"><div class="panel__header"><h5> Paypal Link Setup </h5> <a class="x" data-close="">×</a></div><div class="Link--ThumbnailTab"><div class="panel__body" style="height:100px;"> <div class="link-field link-paypal-email placeholder"> <input type="text" placeholder="Your Paypal Email" data-link-title="" data-link-key="link[title]" value="'+value.paypal_email+'"><span tabindex="0" data-link-field-label="">'+PaypalEmailplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-price placeholder"> <input type="text" placeholder="Price" data-link-title="" data-link-key="link[title]" value="'+value.class_price+'"><span tabindex="0" data-link-field-label="">'+priceplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-currency placeholder"> <select name="currency_name" id="currency_id" class="large gfield_select" aria-required="true" aria-invalid="false"><option value="USD">USD</option><option value="AUD">AUD</option><option value="BRL">BRL</option><option value="CAD">CAD</option><option value="CNY">CNY</option><option value="CZK">CZK</option><option value="DKK">DKK</option><option value="EUR">EUR</option><option value="GBP">GBP</option><option value="HKD">HKD</option><option value="HUF">HUF</option><option value="INR">INR</option><option value="ILS">ILS</option><option value="JPY">JPY</option><option value="MYR">MYR</option><option value="MXN">MXN</option><option value="TWD">TWD</option><option value="NZD">NZD</option><option value="NOK">NOK</option><option value="PHP">PHP</option><option value="PLN">PLN</option><option value="RUB">RUB</option><option value="SEK">SEK</option><option value="CHF">CHF</option><option value="THB">THB</option></select> <span tabindex="0" data-link-field-label="">'+currencyplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <div class="link-field link-class-name placeholder"> <input type="text" placeholder="Item/Class/Workshop Name" data-link-title="" data-link-key="link[title]" value="'+value.class_product_name+'"><span tabindex="0" data-link-field-label="">'+classproductplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> </div></div></div></div></div></div>';
							}
							/*if(value.class_product_name=='' || value.paypal_email=='' || value.class_price=='' || value.price_currency==''){
								setTimeout(function(){
								openlinkPayment(value.ID,'data-link-tab-payment');
								},100);
							}	*/
						}else{	
							html+='<div class="link " data-link-list-link="" data-link="'+value.ID+'" data-position="'+value.position+'" data-type="CLASSIC" data-amazon-affiliate="0"><div class="link-tooltip"></div><div class="link__inner"><div class="reorder-handle"> <svg width="4" height="16" viewBox="0 0 4 16"> <path d="M0 2C0 .897.897 0 2 0s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 8c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2M0 14c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2"></path> </svg></div><div class="link-content"><div class="link-field link-title placeholder"> <input type="text" placeholder="Enter title" data-link-title="" data-link-key="link[title]" value="'+value.title+'"><span tabindex="0" data-link-field-label="">'+titleplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div><div class="link-field link-url placeholder"> <input type="text" placeholder="http://url" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-link-url="" data-validate="url" data-link-key="link[url]" value="'+value.url+'"><span tabindex="0" data-link-field-label="">'+urlplaceholder+'</span> <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i></div> <label class="link-field link-active '+linkstatus+'" data-custom-checkbox="" for="link-active-'+value.ID+'"><input type="checkbox" id="link-active-'+value.ID+'" data-link-active="" data-link-key="link[active]" '+linkstatus+' tabindex="-1"></label><div class="link__tab__navs" data-link-tabs=""> <a class="link__tab__nav link__tab__nav--delete" data-link-tabs-tab="[data-link-tab-delete]"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M6 2.5v-2h4v2M1 2.5h14M9.533 13.5l.25-9M6.217 4.5l.25 9M2.661 4.5l.889 11h8.9l.888-11"></path> </svg> </a></div></div><div class="link__tab__panels" data-link-tab-panels=""><div class="link__tab__panel" data-link-tab-rss-feed-button="" data-link-tab-panel="" style="display: none;"></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-stats="" style="display: none;"><div class="panel__header"><h5> Link Analytics</h5> <a class="x" data-close="">×</a></div><div class="Analytics--Link-Overview"><div class="sc-exiMuG gXnifu"><div class="panel__body"><p>This link has been clicked <b>0</b></p></div></div></div></div><div class="link__tab__panel" data-link-tab-delete="" data-link-tab-panel="" style="display: none;"><div class="panel__header"><h5> Delete Link</h5> <a class="x" data-close="">×</a></div><div class="panel__body"><p>Are you sure you want to delete this link? This action cannot be undone.</p><div class="buttons"><button class="button grey" data-close="">Cancel</button><button class="button" data-link-delete="">Delete</button></div></div></div><div class="link__tab__panel" data-link-tab-panel="" data-link-tab-thumbnail="" style="display: none;"><div class="panel__header"><h5> Add Thumbnail</h5> <a class="x" data-close="">×</a></div><div class="Link--ThumbnailTab"><div class="panel__body"><p>Add a Thumbnail or Icon to this Link.</p><button class="button purple fill">Set Thumbnail</button></div></div></div></div></div></div>';
						}
					});
				}
				jQuery('#link-list-group').removeClass('loading');
				if(html!=''){
					jQuery('#link-list-group').html(html);
				}
            }
            else {
               alert("Your vote could not be added");
            }
         }
      });

}
GetTreeLinks();
function openlinkPayment(id,linktab){
		jQuery('.link__tab__nav').removeClass('active');
		var height = jQuery('.link[data-link="'+id+'"]').find('.link__tab__panel['+linktab+']').outerHeight();
		//jQuery('.link[data-link="'+id+'"]').find('.link__tab__panel').hide();
		jQuery('.link[data-link="'+id+'"]').find('.link__tab__panel['+linktab+']').show();
		//$(this).parents('.link').find('.link__tab__panels').css("height", height);
		jQuery('.link[data-link="'+id+'"]').find('.link__tab__panels').animate({height: height});
}
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

jQuery(document).ready(function($){
	$('#AddNewLink').click(function(){
		$('.link-list-group').addClass('loading');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "add_new_link"},
			success: function(response) {
				if(response.type == "success") {
				GetTreeLinks();
				}
				else {
				   alert("Your vote could not be added");
				}
			}
		});
		
	});
	$('#AddNewPaymentLink').click(function(){
		$('.link-list-group').addClass('loading');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "add_new_payment_link"},
			success: function(response) {
				if(response.type == "success") {
				GetTreeLinks();
				}
				else {
				   alert("Your vote could not be added");
				}
			}
		});
		
	});
	
	$("#loginform input,.wpuf-form-add input,#lostpasswordform input,#resetpasswordform input").focus(function(){
	  $(this).addClass('is-focused');
	});
	$("#loginform input,.wpuf-form-add input,#lostpasswordform input,#resetpasswordform input").focusout(function(){
	  $(this).removeClass('is-focused');
	});
	$('#loginform input,.wpuf-form-add input,#lostpasswordform input,#resetpasswordform input').blur(function(){
		tmpval = $(this).val();
		if(tmpval == '') {
			$(this).addClass('is-empty');
		} else {
			$(this).removeClass('is-empty');
		}
	});
	
	$('#loginform input,.wpuf-form-add input,#lostpasswordform input,#resetpasswordform input').each(function(){
		var tthis = $(this);
		tmpval = tthis.val();
		if(tmpval == '') {
			tthis.addClass('is-empty');
		} else {
			tthis.removeClass('is-empty');
		}
	});
	$(document).on('click','#DeleteAccount',function(){ 
		//$('.dialog.dialog--delete-account').animate({opacity: "1"});
		$('.dialog.dialog--delete-account').addClass('dialog-active');
		//$('.dialog.dialog--delete-account .dialog__inner').animate({opacity: "1"});
		//$('.dialog.dialog--delete-account .dialog__inner').animate({transform: "rotateX(0deg) translate(-50%,-50%)"});
	}); 
	$(document).on('click','.closeDialog',function(){ 
		$('.dialog.dialog--delete-account').removeClass('dialog-active');
	});
	$(document).on('click','#DeleteMyAccount',function(){ 
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "delete_account_action",status:status},
			success: function(response){
				if(response.type == "success"){
					$('.message[data-message-id="delete_success"]').show();
					setTimeout(function(){
						window.location.href=myAjax.siteurl;
					},2000);	
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	
	
	
	$('.scrollbar-container').perfectScrollbar();
});