<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charSet="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<?php wp_head(); ?>
        <style>.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}@font-face{font-family:Karla;src:url(https://d1nnwinjc04txl.cloudfront.net/static/regular-3744d2a807486007e4e578177e13b83b.eot);src:url(https://d1nnwinjc04txl.cloudfront.net/static/regular-3744d2a807486007e4e578177e13b83b.eot#iefix) format("embedded-opentype"),url(data:font/woff2;base64,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) format("woff2"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-f12bf2b11383fd2115242d701c9f3640.woff) format("woff"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-fe4470d5ef947b6816e5872fb9e25a23.ttf) format("truetype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-63f0346ef26fff6577194e32ceece036.svg#Karla-Regular) format("svg");font-weight:400;font-style:normal}@font-face{font-family:Karla;src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-b3736c1962bbe2d95b77a72907d2f8a7.eot);src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-b3736c1962bbe2d95b77a72907d2f8a7.eot#iefix) format("embedded-opentype"),url(data:font/woff2;base64,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) format("woff2"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-7693177522a96cbc42a0f0fb9493f192.woff) format("woff"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-e0272785b0a53a7cb452c1190bb2c3b0.ttf) format("truetype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-62e4d25577a54bd72e55376806883799.svg#Karla-Bold) format("svg");font-weight:600;font-style:normal}@font-face{font-family:Inter;src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-6114f19d761e97e896c76815ea33b7b9.eot);src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-6114f19d761e97e896c76815ea33b7b9.eot#iefix) format("embedded-opentype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-9d2fb7b337e786e56ca8c168c23d00e0.woff2) format("woff2"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-21055b291b793b78b32dd9d153a60ebe.woff) format("woff"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-cce2641e035a18008da31f14c2a94140.ttf) format("truetype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/regular-742f5911054caebb527d44879ae2c0ff.svg#Inter-Regular) format("svg");font-weight:400;font-style:normal}@font-face{font-family:Inter;src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-3e9a306b641b53ec06ee86834006af80.eot);src:url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-3e9a306b641b53ec06ee86834006af80.eot#iefix) format("embedded-opentype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-c99d6b70171d0b43706728539ee13b74.woff2) format("woff2"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-4baa7d1ac5b03f8a4552324dce9c69fa.woff) format("woff"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-de705d6f37e2313e6c064b289713110f.ttf) format("truetype"),url(<?=get_site_url()?>/wp-content/plugins/yogabody/public/fonts/homepage/bold-e69062cf631e50df1dc2426535283ec8.svg#Inter-Bold) format("svg");font-weight:600;font-style:normal}.slick-slider{box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list,.slick-slider{position:relative;display:block}.slick-list{overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{transform:translateZ(0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:""}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}</style>
        <meta name="generator" content="Gatsby 2.24.47"/>
        <link rel="canonical" href="<?=get_the_permalink()?>"/>
        <meta name="description" content="Meet Yogabody, the free bio link tool used by the world’s best brands, creators and influencers. "/>
        <style>.dIOHHa{width:20px;height:20px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;}/*!sc*/
            .dIOHHa a{fill:inherit;stroke:inherit;}/*!sc*/
            .kcEveK{width:24px;height:24px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;}/*!sc*/
            .kcEveK a{fill:inherit;stroke:inherit;}/*!sc*/
            .jlFKrq{width:16px;height:16px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;}/*!sc*/
            .jlFKrq a{fill:inherit;stroke:inherit;}/*!sc*/
            .cRPWTG{width:12px;height:12px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;}/*!sc*/
            .cRPWTG a{fill:inherit;stroke:inherit;}/*!sc*/
            .bRuweu{width:undefined;height:undefined;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;}/*!sc*/
            .bRuweu a{fill:inherit;stroke:inherit;}/*!sc*/
            data-styled.g1[id="sc-AxjAm"]{content:"dIOHHa,kcEveK,jlFKrq,cRPWTG,bRuweu,"}/*!sc*/
            .iqGrDi{width:24px;height:24px;fill:transparent;stroke:none;}/*!sc*/
            .ceKgvy{width:12px;height:12px;fill:transparent;stroke:none;}/*!sc*/
            .bKIKpW{width:undefined;height:undefined;fill:transparent;stroke:none;}/*!sc*/
            .bWQEfy{width:20px;height:20px;fill:transparent;stroke:none;}/*!sc*/
            data-styled.g4[id="sc-AxhCb"]{content:"iqGrDi,ceKgvy,bKIKpW,bWQEfy,"}/*!sc*/
            .cSrlAO{height:32px;padding:0 calc(32px / 2);border-radius:calc(32px / 4);cursor:pointer;width:auto;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#fff;background:#F9A677;}/*!sc*/
			.cSrlAO:hover{ background:#F57125;}
            .cSrlAO > *:not(:first-child):not(.loader){margin-left:8px;}/*!sc*/
            .cSrlAO.disabled{background-color:#dadee0;color:#a4a4a4;}/*!sc*/
            .cSrlAO:disabled{pointer-events:none;}/*!sc*/
            .cSrlAO .button--label{font-weight:bold;text-transform:uppercase;font-size:14px;}/*!sc*/
            .cSrlAO.loading .button--icon,.cSrlAO.loading .button--label{opacity:0;}/*!sc*/
            .cSrlAO .loader{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            .guayOG{height:64px;padding:0 calc(64px / 2);border-radius:calc(64px / 4);cursor:pointer;width:auto;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#ffffff;background:#7551e9;}/*!sc*/
            .guayOG > *:not(:first-child):not(.loader){margin-left:8px;}/*!sc*/
            .guayOG.disabled{background-color:#dadee0;color:#a4a4a4;}/*!sc*/
            .guayOG:disabled{pointer-events:none;}/*!sc*/
            .guayOG:hover{background:#6344C6;color:#ffffff;}/*!sc*/
            .guayOG .button--label{font-weight:bold;text-transform:uppercase;font-size:20px;}/*!sc*/
            .guayOG.loading .button--icon,.guayOG.loading .button--label{opacity:0;}/*!sc*/
            .guayOG .loader{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            .iLrRrT{height:48px;padding:0 calc(48px / 2);border-radius:calc(48px / 4);cursor:pointer;width:100%;position:relative;color:#ffffff;background:#7551e9;}/*!sc*/
            .iLrRrT .button--icon{position:absolute;top:calc((48px - 24px) / 2);left:calc((48px - 24px) / 2);}/*!sc*/
            .iLrRrT.disabled{background-color:#dadee0;color:#a4a4a4;}/*!sc*/
            .iLrRrT:disabled{pointer-events:none;}/*!sc*/
            .iLrRrT:hover{background:#6344C6;color:#ffffff;}/*!sc*/
            .iLrRrT .button--label{font-weight:bold;text-transform:uppercase;font-size:16px;}/*!sc*/
            .iLrRrT.loading .button--icon,.iLrRrT.loading .button--label{opacity:0;}/*!sc*/
            .iLrRrT .loader{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            .fojivN{height:48px;padding:0 calc(48px / 2);border-radius:calc(48px / 4);cursor:pointer;width:auto;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#ffffff;background:#7551e9;}/*!sc*/
            .fojivN > *:not(:first-child):not(.loader){margin-left:8px;}/*!sc*/
            .fojivN.disabled{background-color:#dadee0;color:#a4a4a4;}/*!sc*/
            .fojivN:disabled{pointer-events:none;}/*!sc*/
            .fojivN:hover{background:#6344C6;color:#ffffff;}/*!sc*/
            .fojivN .button--label{font-weight:bold;text-transform:uppercase;font-size:16px;}/*!sc*/
            .fojivN.loading .button--icon,.fojivN.loading .button--label{opacity:0;}/*!sc*/
            .fojivN .loader{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            data-styled.g6[id="sc-AxgMl"]{content:"cSrlAO,guayOG,iLrRrT,fojivN,"}/*!sc*/
            .hIYVOM{color:#131415;font-size:16px;line-height:1.75;-webkit-letter-spacing:calc(16px * -0.02);-moz-letter-spacing:calc(16px * -0.02);-ms-letter-spacing:calc(16px * -0.02);letter-spacing:calc(16px * -0.02);font-weight:normal;display:inline;}/*!sc*/
            .jZDkkQ{color:#131415;font-size:64px;line-height:1.13;-webkit-letter-spacing:calc(64px * -0.02);-moz-letter-spacing:calc(64px * -0.02);-ms-letter-spacing:calc(64px * -0.02);letter-spacing:calc(64px * -0.02);font-weight:normal;display:block;}/*!sc*/
            @media screen and (max-width:767px){.jZDkkQ{font-size:32px;line-height:1.25;-webkit-letter-spacing:calc(32px * -0.02);-moz-letter-spacing:calc(32px * -0.02);-ms-letter-spacing:calc(32px * -0.02);letter-spacing:calc(32px * -0.02);}}/*!sc*/
            .dmghuz{color:#263238;font-size:24px;line-height:1.5;-webkit-letter-spacing:calc(24px * -0.02);-moz-letter-spacing:calc(24px * -0.02);-ms-letter-spacing:calc(24px * -0.02);letter-spacing:calc(24px * -0.02);font-weight:normal;display:block;}/*!sc*/
            @media screen and (max-width:767px){.dmghuz{font-size:20px;line-height:1.6;-webkit-letter-spacing:calc(20px * -0.02);-moz-letter-spacing:calc(20px * -0.02);-ms-letter-spacing:calc(20px * -0.02);letter-spacing:calc(20px * -0.02);}}/*!sc*/
            .ffPPfc{color:#131415;font-size:16px;line-height:1.75;-webkit-letter-spacing:calc(16px * -0.02);-moz-letter-spacing:calc(16px * -0.02);-ms-letter-spacing:calc(16px * -0.02);letter-spacing:calc(16px * -0.02);font-weight:normal;display:block;}/*!sc*/
            .gsARew{color:#131415;font-size:48px;line-height:1.17;-webkit-letter-spacing:calc(48px * -0.02);-moz-letter-spacing:calc(48px * -0.02);-ms-letter-spacing:calc(48px * -0.02);letter-spacing:calc(48px * -0.02);font-weight:normal;display:block;}/*!sc*/
            @media screen and (max-width:767px){.gsARew{font-size:32px;line-height:1.25;-webkit-letter-spacing:calc(32px * -0.02);-moz-letter-spacing:calc(32px * -0.02);-ms-letter-spacing:calc(32px * -0.02);letter-spacing:calc(32px * -0.02);}}/*!sc*/
            .kWITHl{color:#263238;font-size:20px;line-height:1.6;-webkit-letter-spacing:calc(20px * -0.02);-moz-letter-spacing:calc(20px * -0.02);-ms-letter-spacing:calc(20px * -0.02);letter-spacing:calc(20px * -0.02);font-weight:normal;display:block;}/*!sc*/
            .gQFsfI{color:#455a64;font-size:14px;line-height:1.71;-webkit-letter-spacing:calc(14px * -0.02);-moz-letter-spacing:calc(14px * -0.02);-ms-letter-spacing:calc(14px * -0.02);letter-spacing:calc(14px * -0.02);font-weight:normal;display:block;}/*!sc*/
            .dOOwcX{color:#131415;font-size:12px;line-height:2;-webkit-letter-spacing:calc(12px * -0.02);-moz-letter-spacing:calc(12px * -0.02);-ms-letter-spacing:calc(12px * -0.02);letter-spacing:calc(12px * -0.02);font-weight:normal;display:inline;}/*!sc*/
            data-styled.g11[id="sc-fzoLsD"]{content:"hIYVOM,jZDkkQ,dmghuz,ffPPfc,gsARew,kWITHl,gQFsfI,dOOwcX,"}/*!sc*/
            .ewBrzF{background:inherit;color:inherit;border:none;margin:0;padding:0;outline:none;height:auto;cursor:pointer;-webkit-appearance:button;height:24px;width:24px;}/*!sc*/ 
            .ewBrzF:hover{background-color:inherit;}/*!sc*/
            data-styled.g13[id="sc-fzplWN"]{content:"ewBrzF,"}/*!sc*/
            .becZbZ{-webkit-text-decoration:none;text-decoration:none;color:#263238;}/*!sc*/
            .becZbZ:hover{-webkit-text-decoration:underline;text-decoration:underline;color:initial;}/*!sc*/
            .bRQUkY{-webkit-text-decoration:none;text-decoration:none;color:#131415;}/*!sc*/
            .bRQUkY:hover{-webkit-text-decoration:underline;text-decoration:underline;color:initial;}/*!sc*/
            .guqhxv{-webkit-text-decoration:underline;text-decoration:underline;color:#131415;}/*!sc*/
            .guqhxv:hover{-webkit-text-decoration:underline;text-decoration:underline;color:#7551e9;}/*!sc*/
            data-styled.g23[id="sc-fzpjYC"]{content:"becZbZ,bRQUkY,guqhxv,"}/*!sc*/
            .bLyQDF{font-size:16px;color:#F9A677;line-height:1.6;}/*!sc*/
			.bLyQDF:hover {color: #F57125;}
            .mNLTT{font-size:14px;color:#263238;line-height:1.6;}/*!sc*/
            .WewEU{font-size:20px;color:#263238;line-height:1.6;}/*!sc*/
            .glKzzh{font-size:20px;color:#131415;line-height:1.6;}/*!sc*/
            .dmsdny{font-size:14px;color:#131415;line-height:1.6;}/*!sc*/
            .eAAGbq{font-size:inherit;color:#131415;line-height:1.6;}/*!sc*/
            data-styled.g24[id="sc-fznxsB"]{content:"bLyQDF,mNLTT,WewEU,glKzzh,dmsdny,eAAGbq,"}/*!sc*/
            .cranDr{width:150px;height:30px;}/*!sc*/
            .cranDr a{fill:inherit;stroke:inherit;}/*!sc*/
            data-styled.g25[id="sc-fznJRM"]{content:"cranDr,"}/*!sc*/
            .cmbFjv{fill:#000;}/*!sc*/
            data-styled.g26[id="sc-fznWqX"]{content:"cmbFjv,"}/*!sc*/
            .hKHYa-d{fill:#39e09b;}/*!sc*/
            data-styled.g27[id="sc-fzoiQi"]{content:"hKHYa-d,"}/*!sc*/
            .fwEvg{fill:#28bf7b;}/*!sc*/
            data-styled.g28[id="sc-fzqARJ"]{content:"fwEvg,"}/*!sc*/
            .edzWgm{width:calc(85px * 1);height:calc(20px * 1);fill:transparent;stroke:none;}/*!sc*/
            data-styled.g29[id="sc-fzqNqU"]{content:"edzWgm,"}/*!sc*/
            .bLGRpx{display:initial;}/*!sc*/
            @media screen and (max-width:767px){.bLGRpx{display:none;}}/*!sc*/
            data-styled.g41[id="sc-fzoKki"]{content:"bLGRpx,"}/*!sc*/
            .gaTPij{display:none;}/*!sc*/
            @media screen and (max-width:767px){.gaTPij{display:initial;}}/*!sc*/
            data-styled.g43[id="sc-fzpkJw"]{content:"gaTPij,"}/*!sc*/
            .biVOqy .collapse-css-transition{-webkit-transition:height 200ms cubic-bezier(0.4,0,0.2,1);transition:height 200ms cubic-bezier(0.4,0,0.2,1);overflow:hidden;}/*!sc*/
            data-styled.g45[id="sc-fznMnq"]{content:"biVOqy,"}/*!sc*/
            .fSDUJQ{background:inherit;color:inherit;border:none;margin:0;padding:0;outline:none;height:auto;cursor:pointer;-webkit-appearance:button;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%;font-size:20px;color:#263238;}/*!sc*/
            .fSDUJQ:hover{background-color:inherit;}/*!sc*/
            .fSDUJQ:focus{outline:none;}/*!sc*/
            .iixxwB{background:inherit;color:inherit;border:none;margin:0;padding:0;outline:none;height:auto;cursor:pointer;-webkit-appearance:button;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%;font-size:16px;color:#263238;}/*!sc*/
            .iixxwB:hover{background-color:inherit;}/*!sc*/
            .iixxwB:focus{outline:none;}/*!sc*/
            data-styled.g46[id="sc-fzoant"]{content:"fSDUJQ,iixxwB,"}/*!sc*/
            .irTPkx{color:#263238;}/*!sc*/
            data-styled.g47[id="sc-fzomME"]{content:"irTPkx,"}/*!sc*/
            .jkSwri{pointer-events:initial;}/*!sc*/
            .igNzze{pointer-events:none;}/*!sc*/
            data-styled.g72[id="sc-fzoWqW"]{content:"jkSwri,igNzze,"}/*!sc*/
            .bHmBtJ{position:relative;}/*!sc*/
            .bHmBtJ img{border-radius:5%;}/*!sc*/
            .bHmBtJ::after{background-image:url(static/device-deee8c126310b52fd50ed2fdb21ba2cd.png);content:'';position:absolute;top:-1.8%;left:-5.6%;right:-5.6%;bottom:-1.8%;background-repeat:round;}/*!sc*/
            data-styled.g73[id="sc-fzplgP"]{content:"bHmBtJ,"}/*!sc*/
            .bNiLxN{background-color:#ffffff;position:fixed;top:0;left:0;right:0;z-index:5;-webkit-transform:translateY(64px);-ms-transform:translateY(64px);transform:translateY(64px);-webkit-transition:-webkit-transform 0.3s ease-in-out;-webkit-transition:transform 0.3s ease-in-out;transition:transform 0.3s ease-in-out;height:64px;background-color:#ffffff;}/*!sc*/
            @media screen and (max-width:767px){.bNiLxN{-webkit-transform:translateY(92px);-ms-transform:translateY(92px);transform:translateY(92px);-webkit-transform:translateY(92px);-ms-transform:translateY(92px);transform:translateY(92px);}}/*!sc*/
            .bNiLxN.banner_DesktopHeaderNoPadding{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);-webkit-transition:none;transition:none;}/*!sc*/
            data-styled.g80[id="styles__DesktopHeader-sc-1tdma9g-1"]{content:"bNiLxN,"}/*!sc*/
            .eknHrs{background-color:#ffffff;position:fixed;top:0;left:0;right:0;z-index:5;-webkit-transform:translateY(64px);-ms-transform:translateY(64px);transform:translateY(64px);-webkit-transition:-webkit-transform 0.3s ease-in-out;-webkit-transition:transform 0.3s ease-in-out;transition:transform 0.3s ease-in-out;height:56px;border-bottom:1px solid #dadee0;}/*!sc*/
            @media screen and (max-width:767px){.eknHrs{-webkit-transform:translateY(92px);-ms-transform:translateY(92px);transform:translateY(92px);-webkit-transform:translateY(92px);-ms-transform:translateY(92px);transform:translateY(92px);}}/*!sc*/
            .eknHrs.banner_DesktopHeaderNoPadding{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);-webkit-transition:none;transition:none;}/*!sc*/
            data-styled.g81[id="styles__MobileHeader-sc-1tdma9g-2"]{content:"eknHrs,"}/*!sc*/
            .ejJabW{padding:0 24px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;height:100%;}/*!sc*/
            data-styled.g82[id="styles__ContentWrapper-sc-1tdma9g-3"]{content:"ejJabW,"}/*!sc*/
            .ipvwPj{padding:0 24px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;height:100%;padding:0 16px;}/*!sc*/
            data-styled.g83[id="styles__MobileContentWrapper-sc-1tdma9g-4"]{content:"ipvwPj,"}/*!sc*/
            .iigIyi > *:not(:last-child){margin-right:48px;}/*!sc*/
            data-styled.g84[id="styles__Nav-sc-1tdma9g-5"]{content:"iigIyi,"}/*!sc*/
            .hApAYm{display:inline-block;height:64px;line-height:64px;background-image:linear-gradient(to right,#28bf7b,#2ed3ba 20%,#44c2d7 40%,#5aa2dc 60%,#708de0 80%,#8a86e5);background-position:0% 100%;background-repeat:no-repeat;background-size:0% 2px;-webkit-transition:background-size .1s ease-out;transition:background-size .1s ease-out;}/*!sc*/
            .hApAYm:hover{background-size:100% 2px;}/*!sc*/
            data-styled.g85[id="styles__NavItemLink-sc-1tdma9g-6"]{content:"hApAYm,"}/*!sc*/
            .ikcTIb{display:inline-block;height:64px;line-height:64px;background-image:linear-gradient(to right,#28bf7b,#2ed3ba 20%,#44c2d7 40%,#5aa2dc 60%,#708de0 80%,#8a86e5);background-position:0% 100%;background-repeat:no-repeat;background-size:0% 2px;-webkit-transition:background-size .1s ease-out;transition:background-size .1s ease-out;}/*!sc*/
            .ikcTIb:hover{background-size:100% 2px;-webkit-text-decoration:none;text-decoration:none;}/*!sc*/
            data-styled.g86[id="styles__PageLink-sc-1tdma9g-7"]{content:"ikcTIb,"}/*!sc*/
            .duKdAJ{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            .duKdAJ > *:not(:last-child){margin-right:32px;}/*!sc*/
            .YCSXs{display:none;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            .YCSXs > *:not(:last-child){margin-right:32px;}/*!sc*/
            data-styled.g87[id="styles__Col-sc-1tdma9g-8"]{content:"duKdAJ,YCSXs,"}/*!sc*/
            .cFydgj{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            .cFydgj > *:not(:last-child){margin-right:32px;}/*!sc*/
            .cFydgj > *:not(:last-child){margin-right:16px;}/*!sc*/
            data-styled.g88[id="styles__MobileCol-sc-1tdma9g-9"]{content:"cFydgj,"}/*!sc*/
            .hIuqRb{width:100%;position:fixed;top:0;left:0;right:0;z-index:4;margin-top:56px;height:48px;background-color:#f4f4f4;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transform:translateY(calc(0px + 92px));-ms-transform:translateY(calc(0px + 92px));transform:translateY(calc(0px + 92px));-webkit-transition:-webkit-transform 0.3s ease-in-out;-webkit-transition:transform 0.3s ease-in-out;transition:transform 0.3s ease-in-out;}/*!sc*/
            .hIuqRb > *{-webkit-flex:1 100%;-ms-flex:1 100%;flex:1 100%;text-align:center;}/*!sc*/
            .hIuqRb.banner_DesktopHeaderNoPadding{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);-webkit-transition:none;transition:none;}/*!sc*/
            data-styled.g89[id="styles__MobileSubHeader-sc-1tdma9g-10"]{content:"hIuqRb,"}/*!sc*/
            .iehWMm{border-left:1px solid [object Object];display:none;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;}/*!sc*/
            .iehWMm > *:first-child{border-left:0;margin-right:8px;}/*!sc*/
            data-styled.g90[id="styles__MobileAdmin-sc-1tdma9g-11"]{content:"iehWMm,"}/*!sc*/
            .kwKvvw{display:initial;}/*!sc*/
            data-styled.g91[id="styles__StyledLink-sc-1tdma9g-12"]{content:"kwKvvw,"}/*!sc*/
            .dqngDE{color:#263238;}/*!sc*/
            data-styled.g92[id="styles__StyledIconButton-sc-1tdma9g-13"]{content:"dqngDE,"}/*!sc*/
            .hdNDFi > *:not(:last-child){margin-right:24px;}/*!sc*/
            .hdNDFi a:hover{color:#39e09b;}/*!sc*/
            .gEllyq > *:not(:last-child){margin-right:20px;}/*!sc*/
            .gEllyq a:hover{color:#39e09b;}/*!sc*/
            data-styled.g93[id="styles-sc-1kv0ull-0"]{content:"hdNDFi,gEllyq,"}/*!sc*/
            .ewTVMh{width:24px;height:24px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;width:calc(24px + 1px);height:calc(24px + 1px);}/*!sc*/
            .ewTVMh a{fill:inherit;stroke:inherit;}/*!sc*/
            .dnOQRt{width:20px;height:20px;fill:currentColor;stroke:none;-webkit-transition:-webkit-transform 200ms linear;-webkit-transition:transform 200ms linear;transition:transform 200ms linear;width:calc(20px + 1px);height:calc(20px + 1px);}/*!sc*/
            .dnOQRt a{fill:inherit;stroke:inherit;}/*!sc*/
            .kmchPh{padding-left:20px;margin-bottom:16px;}/*!sc*/
            .kmchPh:first-child{margin-top:24px;}/*!sc*/
            .kmchPh:last-child{margin-bottom:calc(20px - 16px);}/*!sc*/
            .kqWHEJ{padding-left:16px;margin-bottom:16px;}/*!sc*/
            .kqWHEJ:first-child{margin-top:24px;}/*!sc*/
            .kqWHEJ:last-child{margin-bottom:calc(16px - 16px);}/*!sc*/
            data-styled.g95[id="styles__DropdownNavItem-sc-1yk6syu-0"]{content:"kmchPh,kqWHEJ,"}/*!sc*/
            .eZyHDQ > *{display:block;padding-bottom:24px;}/*!sc*/
            data-styled.g96[id="styles__MobileNav-sc-1yk6syu-1"]{content:"eZyHDQ,"}/*!sc*/
            .kWZMxe{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;padding-bottom:72px;}/*!sc*/
            .kWZMxe > *{padding-right:64px;max-width:160px;}/*!sc*/
            data-styled.g97[id="styles__DesktopNav-sc-1yk6syu-2"]{content:"kWZMxe,"}/*!sc*/
            .fRVDDW > *:first-child{padding-bottom:20px;}/*!sc*/
            .fRVDDW > *{padding-bottom:8px;display:block;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content;}/*!sc*/
            .kTngyb > *:first-child{padding-bottom:16px;}/*!sc*/
            .kTngyb > *{padding-bottom:8px;display:block;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content;}/*!sc*/
            data-styled.g98[id="styles__PageLinkGroup-sc-1yk6syu-3"]{content:"fRVDDW,kTngyb,"}/*!sc*/
            .jsFWnl{color:#263238;}/*!sc*/
            .jsFWnl:hover{color:#263238;-webkit-text-decoration-color:#263238;text-decoration-color:#263238;}/*!sc*/
            data-styled.g99[id="styles__StyledUILink-sc-1yk6syu-4"]{content:"jsFWnl,"}/*!sc*/
            .iYrInN{z-index:1;position:fixed;top:0;left:0;right:0;bottom:0;}/*!sc*/
            data-styled.g100[id="styles-sc-1ofb9fb-0"]{content:"iYrInN,"}/*!sc*/
            .fBTmyL{height:100%;background-color:#ffffff;display:-webkit-box !important;display:-webkit-flex !important;display:-ms-flexbox !important;display:flex !important;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;overflow:scroll;}/*!sc*/
            data-styled.g101[id="styles__ContentWrapper-sc-1ofb9fb-1"]{content:"fBTmyL,"}/*!sc*/
            .cyMyzb{padding:24px 16px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;}/*!sc*/
            data-styled.g102[id="styles__Header-sc-1ofb9fb-2"]{content:"cyMyzb,"}/*!sc*/
            .lgUGpR{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;padding:40px 24px;}/*!sc*/
            data-styled.g103[id="styles__Body-sc-1ofb9fb-3"]{content:"lgUGpR,"}/*!sc*/
            .fEjNyM{margin:0 24px 24px;padding-top:32px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;border-top:1px solid #c4c4c4;color:#c4c4c4;outline:none;}/*!sc*/
            data-styled.g104[id="styles__Footer-sc-1ofb9fb-4"]{content:"fEjNyM,"}/*!sc*/
            .kuhLCB{padding-bottom:32px;}/*!sc*/
            .kuhLCB > *:not(:last-child){display:block;padding-bottom:16px;}/*!sc*/
            data-styled.g105[id="styles__FooterNav-sc-1ofb9fb-5"]{content:"kuhLCB,"}/*!sc*/
            .fSjeLT{color:#263238;}/*!sc*/
            .fSjeLT:hover{-webkit-text-decoration-color:#263238;text-decoration-color:#263238;}/*!sc*/
            data-styled.g106[id="styles__StyledUILink-sc-1ofb9fb-6"]{content:"fSjeLT,"}/*!sc*/
            .fPacZq > *{display:block;padding-bottom:24px;}/*!sc*/
            data-styled.g107[id="styles__PageLinks-sc-1ofb9fb-7"]{content:"fPacZq,"}/*!sc*/
            .kpQkFK{width:100%;background-color:#ffffff;}/*!sc*/
            data-styled.g108[id="styles-y208e2-0"]{content:"kpQkFK,"}/*!sc*/
            .hxmutF{margin:0 48px;padding-top:32px;}/*!sc*/
            .hxmutF > *:first-child{padding-bottom:80px;}/*!sc*/
            @media screen and (max-width:767px){.hxmutF{padding-top:48px;margin:0 24px;}.hxmutF > *:first-child{padding-bottom:96px;}}/*!sc*/
            data-styled.g109[id="styles__ContentWrapper-y208e2-1"]{content:"hxmutF,"}/*!sc*/
            @media screen and (max-width:1400px){.iRJUwH{padding-top:16px;}}/*!sc*/
            data-styled.g110[id="styles__StyledSocialLinks-y208e2-2"]{content:"iRJUwH,"}/*!sc*/
            .eURTnn{border-top:1px solid #dadee0;color:#c4c4c4;padding:24px 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            @media screen and (max-width:767px){.eURTnn{border:0;}}/*!sc*/
            @media screen and (max-width:1400px){.eURTnn{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}}/*!sc*/
            data-styled.g111[id="styles__BaseFooter-y208e2-3"]{content:"eURTnn,"}/*!sc*/
            .cjUxyg{width:100%;padding:24px;border-top:1px solid #dadee0;background-color:none;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-align:center;box-sizing:border-box;}/*!sc*/
            .cjUxyg > *:first-child{padding-bottom:16px;}/*!sc*/
            data-styled.g112[id="styles__AcknowledgementStatementWrapper-y208e2-4"]{content:"cjUxyg,"}/*!sc*/
            .bbvnbL{height:24px;width:auto;}/*!sc*/
            data-styled.g113[id="styles__FlagImage-y208e2-5"]{content:"bbvnbL,"}/*!sc*/
            .iAHTiw{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-height:80vh;height:100%;overflow-x:hidden;position:relative;padding-top:calc(64px + 64px);}/*!sc*/
            @media screen and (max-width:767px){.iAHTiw{padding-top:calc(56px + 92px);}}/*!sc*/
            .iAHTiw.ContentWrapperNoBanner{padding-top:0;}/*!sc*/
            @media (max-width:767px){.iAHTiw.ContentWrapperNoBanner{padding-top:calc(56px);}}/*!sc*/
            data-styled.g114[id="styles__ContentWrapper-sc-1f2uii5-0"]{content:"iAHTiw,"}/*!sc*/
            .dCoMbT{box-sizing:border-box;margin:0 auto;width:100%;max-width:calc((1440px * 0.8) + (64px * 2));padding:0 64px;}/*!sc*/
            @media screen and (max-width:767px){.dCoMbT{padding:0 24px;}}/*!sc*/
            .iYfMPC{box-sizing:border-box;margin:0 auto;width:100%;max-width:calc((1440px * 0.8) + (64px * 2));}/*!sc*/
            data-styled.g116[id="styles__MaxWidthContent-sc-1f2uii5-2"]{content:"dCoMbT,iYfMPC,"}/*!sc*/
            .iRyZqm{padding:64px 0;}/*!sc*/
            @media screen and (max-width:767px){.iRyZqm{padding:24px 0 64px;}}/*!sc*/
            data-styled.g120[id="Body-sc-1w0gdou-0"]{content:"iRyZqm,"}/*!sc*/
            .cnFlIg{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;position:relative;z-index:2;}/*!sc*/
            data-styled.g122[id="styles-sc-1fhy3q6-0"]{content:"cnFlIg,"}/*!sc*/
            .gGUJWr{width:375px;height:812px;border-radius:2%;background-image:linear-gradient(155deg,#0bafff,#39e09b 50%,#ffc213);overflow:hidden;box-shadow:0 96px 96px 0 rgba(0,0,0,0.08);}/*!sc*/
            @media screen and (max-width:767px){.gGUJWr{width:200px;height:432px;}}/*!sc*/
            data-styled.g123[id="styles__MobileBackground-sc-1fhy3q6-1"]{content:"gGUJWr,"}/*!sc*/
            .hJXxQA{display:block;position:relative;border-radius:50%;width:96px;height:96px;margin:32px auto 32px;will-change:transform,opacity;background-color:#ffffff;overflow:hidden;}/*!sc*/
            @media screen and (max-width:767px){.hJXxQA{width:42px;height:42px;margin:20px auto 21px;}}/*!sc*/
            data-styled.g124[id="styles__AnimatedProfileImageWrapper-sc-1fhy3q6-2"]{content:"hJXxQA,"}/*!sc*/
            .jaPrrE{width:100%;height:100%;object-fit:cover;}/*!sc*/
            data-styled.g125[id="styles__StyledProfileImage-sc-1fhy3q6-3"]{content:"jaPrrE,"}/*!sc*/
            .flKisH{background-color:#ffffff;width:327px;height:0;padding-top:56px;border-radius:8px;margin:0 auto 16px;will-change:transform,opacity;}/*!sc*/
            @media screen and (max-width:767px){.flKisH{width:173px;padding-top:28px;border-radius:4px;margin:0 auto 10px;}}/*!sc*/
            data-styled.g126[id="styles__AnimatedButton-sc-1fhy3q6-4"]{content:"flKisH,"}/*!sc*/
            .fTFZiu{width:136px;margin:24px auto 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;}/*!sc*/
            @media screen and (max-width:767px){.fTFZiu{width:96px;margin:16px auto 0;}}/*!sc*/
            data-styled.g127[id="styles__SocialIconsWrapper-sc-1fhy3q6-5"]{content:"fTFZiu,"}/*!sc*/
            .cXPzie{display:block;position:relative;width:24px;height:24px;will-change:transform,opacity;color:#ffffff;}/*!sc*/
            .cXPzie svg{display:block;width:24px;height:24px;}/*!sc*/
            @media screen and (max-width:767px){.cXPzie{width:16px;height:16px;}.cXPzie svg{display:block;width:16px;height:16px;}}/*!sc*/
            data-styled.g128[id="styles__AnimatedSocialIcon-sc-1fhy3q6-6"]{content:"cXPzie,"}/*!sc*/
            .eOyROd{min-height:300px;}/*!sc*/
            @media screen and (max-width:992px){.eOyROd{min-height:200px;}}/*!sc*/
            data-styled.g133[id="styles__AnimatedContainer-sc-1u3c2do-0"]{content:"eOyROd,"}/*!sc*/
            .eiFLRs{display:block;width:0;border:0;margin:0 auto;border-left:2px dashed #7551e9;}/*!sc*/
            data-styled.g134[id="styles__AnimatedLine-sc-1u3c2do-1"]{content:"eiFLRs,"}/*!sc*/
            .fdJtbI{margin:0 auto;padding:0;width:80px;height:80px;border-radius:48px;background-color:#ffffff;border:solid 1px #7551e9;-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);overflow:hidden;max-width:84vw;}/*!sc*/
            @media screen and (max-width:992px){.fdJtbI{width:64px;height:64px;}}/*!sc*/
            data-styled.g135[id="styles__AnimatedFieldContainer-sc-1u3c2do-2"]{content:"fdJtbI,"}/*!sc*/
            .eIZktw{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:0 16px 0 32px;position:absolute;top:0;left:0;right:0;bottom:0;}/*!sc*/
            @media screen and (max-width:992px){.eIZktw{padding:0 8px 0 24px;}}/*!sc*/
            data-styled.g136[id="styles__FieldContainerInner-sc-1u3c2do-3"]{content:"eIZktw,"}/*!sc*/
            .eXQnlc{display:block;width:32px;height:32px;}/*!sc*/
            @media screen and (max-width:992px){.eXQnlc{width:24px;height:24px;}}/*!sc*/
            data-styled.g137[id="styles__StyledLogo-sc-1u3c2do-4"]{content:"eXQnlc,"}/*!sc*/
            .cYFToo{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;font-size:32px;-webkit-letter-spacing:-0.64px;-moz-letter-spacing:-0.64px;-ms-letter-spacing:-0.64px;letter-spacing:-0.64px;color:#263238;width:332px;white-space:nowrap;}/*!sc*/
            @media screen and (max-width:992px){.cYFToo{font-size:20px;width:207px;}}/*!sc*/
            .cYFToo .Typist{color:#ccc !important;position:relative;}/*!sc*/
            @media screen and (max-width:992px){.cYFToo .Typist{height:32px;}}/*!sc*/
            .cYFToo .Typist .Cursor{position:absolute !important;top:0;width:1px;background-color:#263238;font-size:0;}/*!sc*/
            data-styled.g139[id="styles__FieldInput-sc-1u3c2do-6"]{content:"cYFToo,"}/*!sc*/
            .dAQxXU{width:48px;height:48px;background-color:#7551e9;border-radius:50%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;cursor:pointer;position:relative;}/*!sc*/
            .dAQxXU:hover{background-color:#6344C6;}/*!sc*/
            .dAQxXU input{display:none;}/*!sc*/
            .dAQxXU svg{width:22px;width:22px;-webkit-transition:fill 0.2s ease-in-out;transition:fill 0.2s ease-in-out;fill:#ffffff;}/*!sc*/
            data-styled.g140[id="styles__StyledButtonLabel-sc-1u3c2do-7"]{content:"dAQxXU,"}/*!sc*/
            .bdAiZE{display:block;position:absolute;top:0;left:0;right:0;bottom:0;}/*!sc*/
            .bdAiZE svg{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            data-styled.g141[id="styles__StyledLink-sc-1u3c2do-8"]{content:"bdAiZE,"}/*!sc*/
            .bMRxKJ{margin:0 auto;width:100%;height:55vh;position:relative;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.bMRxKJ{height:512px;}}/*!sc*/
            @media screen and (max-width:767px){.bMRxKJ{height:40vh;margin-left:-24px;margin-right:-24px;width:auto;}}/*!sc*/
            data-styled.g143[id="styles__AnimationOuter-h4wjxk-0"]{content:"bMRxKJ,"}/*!sc*/
            .bcJkY{position:absolute;top:0;left:0;right:0;bottom:0;display:block;overflow:hidden;}/*!sc*/
            data-styled.g144[id="styles__AnimationInner-h4wjxk-1"]{content:"bcJkY,"}/*!sc*/
            .bvWDsN{position:absolute;width:32px;height:32px;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            data-styled.g145[id="styles__AnimatedIcon-h4wjxk-2"]{content:"bvWDsN,"}/*!sc*/
            .HwuXt{position:absolute;width:216px;height:48px;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}/*!sc*/
            data-styled.g146[id="styles__AnimatedUrl-h4wjxk-3"]{content:"HwuXt,"}/*!sc*/
            .gOpiDz{z-index:2;position:absolute;top:0;left:0;right:0;bottom:0;display:block;background: linear-gradient(90deg,rgba(255,255,255,1) 0%,rgba(255,255,255,1) 10%,rgba(255,255,255,0.5) 25%,rgba(255,255,255,0) 50%,rgba(255,255,255,0) 100%), linear-gradient(-90deg,rgba(255,255,255,1) 0%,rgba(255,255,255,1) 10%,rgba(255,255,255,0.5) 25%,rgba(255,255,255,0) 50%,rgba(255,255,255,0) 100%), linear-gradient(180deg,rgba(255,255,255,1) 0%,rgba(255,255,255,1) 10%,rgba(255,255,255,0.5) 25%,rgba(255,255,255,0) 50%,rgba(255,255,255,0) 100%);-webkit-transform:translateY(-1px);-ms-transform:translateY(-1px);transform:translateY(-1px);}/*!sc*/
            data-styled.g147[id="styles__GradientOverlay-h4wjxk-4"]{content:"gOpiDz,"}/*!sc*/
            .blCRqj{width:32px;height:32px;}/*!sc*/
            data-styled.g149[id="styles__StyledIconImage-h4wjxk-6"]{content:"blCRqj,"}/*!sc*/
            .hrnQPn{width:216px;height:48px;}/*!sc*/
            data-styled.g150[id="styles__StyledUrlImage-h4wjxk-7"]{content:"hrnQPn,"}/*!sc*/
            .dwsPKV{margin-top:calc(-27.77777777777778vw - 64px);}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.dwsPKV{margin-top:calc(-400px - 64px);}}/*!sc*/
            @media screen and (max-width:767px){.dwsPKV{margin-top:calc(-27.77777777777778vw - 92px);}}/*!sc*/
            data-styled.g151[id="styles__PositionedAnimation-sc-1hqor6h-0"]{content:"dwsPKV,"}/*!sc*/
            .eaEGWL{margin:0 auto;padding:4.444444444444445vw 0;border-top:1px solid #dadee0;margin-top:64px;text-align:center;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.eaEGWL{padding:64px 0;}}/*!sc*/
            @media screen and (max-width:767px){.eaEGWL{padding:64px 0;}}/*!sc*/
            @media screen and (max-width:767px){.eaEGWL{padding:40px 0;}}/*!sc*/
            data-styled.g152[id="styles-r5mvx5-0"]{content:"eaEGWL,"}/*!sc*/
            .hDPvGL{padding-bottom:24px;display:block;}/*!sc*/
            data-styled.g153[id="styles__Title-r5mvx5-1"]{content:"hDPvGL,"}/*!sc*/
            .fBDxBl{display:grid;box-sizing:border-box;grid-template-columns:repeat(4,1fr);grid-column-gap:48px;grid-row-gap:40px;}/*!sc*/
            @supports (display:-ms-grid){.fBDxBl{display:-ms-grid;-ms-grid-columns:1fr 1fr;}}/*!sc*/
            @media screen and (max-width:992px){.fBDxBl{grid-template-columns:repeat(2,1fr);}}/*!sc*/
            @media screen and (max-width:767px){.fBDxBl{max-width:100%;grid-column-gap:24px;grid-row-gap:24px;}}/*!sc*/
            data-styled.g154[id="styles__PressBlock-r5mvx5-2"]{content:"fBDxBl,"}/*!sc*/
            .ixfRCi{border-radius:10px;background-color:#f5f7f8;height:80px;width:auto;min-width:80px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;fill:#455a64;}/*!sc*/
            @supports (display:-ms-grid){.ixfRCi{-ms-grid-column:calc(0 + 1);-ms-grid-row:calc(1 + 1);margin:8px;}}/*!sc*/
            .ixfRCi img{height:100%;max-height:32px;width:auto;object-fit:contain;}/*!sc*/
            @media screen and (max-width:576px){.ixfRCi img{max-height:24px;}}/*!sc*/
            .kETXiA{border-radius:10px;background-color:#f5f7f8;height:80px;width:auto;min-width:80px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;fill:#455a64;}/*!sc*/
            @supports (display:-ms-grid){.kETXiA{-ms-grid-column:calc(1 + 1);-ms-grid-row:calc(2 + 1);margin:8px;}}/*!sc*/
            .kETXiA img{height:100%;max-height:32px;width:auto;object-fit:contain;}/*!sc*/
            @media screen and (max-width:576px){.kETXiA img{max-height:24px;}}/*!sc*/
            .iOpIMs{border-radius:10px;background-color:#f5f7f8;height:80px;width:auto;min-width:80px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;fill:#455a64;}/*!sc*/
            @supports (display:-ms-grid){.iOpIMs{-ms-grid-column:calc(0 + 1);-ms-grid-row:calc(3 + 1);margin:8px;}}/*!sc*/
            .iOpIMs img{height:100%;max-height:32px;width:auto;object-fit:contain;}/*!sc*/
            @media screen and (max-width:576px){.iOpIMs img{max-height:24px;}}/*!sc*/
            .fDDOOS{border-radius:10px;background-color:#f5f7f8;height:80px;width:auto;min-width:80px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;fill:#455a64;}/*!sc*/
            @supports (display:-ms-grid){.fDDOOS{-ms-grid-column:calc(1 + 1);-ms-grid-row:calc(4 + 1);margin:8px;}}/*!sc*/
            .fDDOOS img{height:100%;max-height:32px;width:auto;object-fit:contain;}/*!sc*/
            @media screen and (max-width:576px){.fDDOOS img{max-height:24px;}}/*!sc*/
            data-styled.g155[id="styles__PressLogo-r5mvx5-3"]{content:"ixfRCi,kETXiA,iOpIMs,fDDOOS,"}/*!sc*/
            .bQZgIw video{height:100%;width:100%;}/*!sc*/
            data-styled.g156[id="styles__VideoContainer-sc-14hp8ed-0"]{content:"bQZgIw,"}/*!sc*/
            .hgyRLn{position:relative;margin-bottom:16px;}/*!sc*/
            @media screen and (max-width:767px){.hgyRLn{margin-bottom:24px;}}/*!sc*/
            data-styled.g168[id="styles__ImageWrapper-sc-3wvh1z-0"]{content:"hgyRLn,"}/*!sc*/
            .fbUIKS{position:absolute;bottom:16px;left:16px;color:#ffffff;}/*!sc*/
            .jGqDSE{width:21.666666666666668vw;max-width:320px;min-width:247px;display:block;-webkit-clip-path:inset(0 round 24px);clip-path:inset(0 round 24px);-webkit-clip-path:inset(0 round 24px);-webkit-transition:clip-path .35s !important;transition:clip-path .35s !important;-webkit-transition:-webkit-clip-path .35s !important;}/*!sc*/
            @-moz-document url-prefix(){.jGqDSE{-webkit-transition:clip-path .35s !important;}}/*!sc*/
            @media screen and (min-width:calc(992px + 1px)){.jGqDSE:hover{-webkit-clip-path:inset(8px round 24px);clip-path:inset(8px round 24px);-webkit-clip-path:inset(8px round 24px);}}/*!sc*/
            @media screen and (max-width:767px){.jGqDSE{-webkit-clip-path:inset(0 round 16px);clip-path:inset(0 round 16px);-webkit-clip-path:inset(0 round 16px);}}/*!sc*/
            data-styled.g170[id="styles__StyledImage-sc-3wvh1z-2"]{content:"jGqDSE,"}/*!sc*/
            .bejryY{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            @media screen and (max-width:767px){.bejryY{-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}}/*!sc*/
            data-styled.g171[id="styles__Bio-sc-3wvh1z-3"]{content:"bejryY,"}/*!sc*/
            .ezTBEJ{border-radius:50%;margin-right:16px;width:32px;height:32px;object-fit:cover;}/*!sc*/
            data-styled.g172[id="styles__Avatar-sc-3wvh1z-4"]{content:"ezTBEJ,"}/*!sc*/
            .eFmnhQ{margin-top:-8px;}/*!sc*/
            @media screen and (max-width:767px){.eFmnhQ{display:none;}}/*!sc*/
            data-styled.g173[id="styles__Subtitle-sc-3wvh1z-5"]{content:"eFmnhQ,"}/*!sc*/
            .qeZdT{margin-top:64px;padding-bottom:96px;}/*!sc*/
            data-styled.g174[id="styles-sc-17bug0o-0"]{content:"qeZdT,"}/*!sc*/
            .bfXtCT{border-top:1px solid #dadee0;padding:96px 0;margin:0 64px;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.bfXtCT{margin:0 calc((100vw - 1152px) / 2);}}/*!sc*/
            @media screen and (max-width:767px){.bfXtCT{padding:32px 0;margin:16px 32px 64px;}}/*!sc*/
            data-styled.g175[id="styles__HeaderWrapper-sc-17bug0o-1"]{content:"bfXtCT,"}/*!sc*/
            .iZaHvo{width:50%;}/*!sc*/
            .iZaHvo > *:first-child{margin-bottom:24px;}/*!sc*/
            @media screen and (max-width:767px){.iZaHvo{width:100%;}.iZaHvo > *:first-child{margin-bottom:16px;}}/*!sc*/
            data-styled.g176[id="styles__Header-sc-17bug0o-2"]{content:"iZaHvo,"}/*!sc*/
            .ccRoUe{padding-left:64px;overflow:scroll !important;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-ms-overflow-style:none;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.ccRoUe{padding-left:calc((100vw - 1152px) / 2);}}/*!sc*/
            @media screen and (max-width:767px){.ccRoUe{padding-left:32px;}}/*!sc*/
            .ccRoUe > *:not(:last-child){padding-right:3.3333333333333335vw;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.ccRoUe > *:not(:last-child){padding-right:48px;}}/*!sc*/
            @media screen and (max-width:576px){.ccRoUe > *:not(:last-child){padding-right:24px;}}/*!sc*/
            .ccRoUe > *:last-child{padding-right:64px;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.ccRoUe > *:last-child{padding-right:calc((100vw - 1152px) / 2);}}/*!sc*/
            @media screen and (max-width:767px){.ccRoUe > *:last-child{padding-right:32px;}}/*!sc*/
            .ccRoUe::-webkit-scrollbar{display:none;}/*!sc*/
            data-styled.g177[id="styles__Carousel-sc-17bug0o-3"]{content:"ccRoUe,"}/*!sc*/
            .cURpo{color:#263238;}/*!sc*/
            data-styled.g178[id="styles__StyledUICopy-sc-17bug0o-4"]{content:"cURpo,"}/*!sc*/
            .kiqLWT{margin:0 auto;padding:4.444444444444445vw 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.kiqLWT{padding:64px 0;}}/*!sc*/
            @media screen and (max-width:767px){.kiqLWT{padding:64px 0;}}/*!sc*/
            .kiqLWT > *:not(:last-child){margin-bottom:6.666666666666667vw;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.kiqLWT > *:not(:last-child){margin-bottom:96px;}}/*!sc*/
            @media screen and (max-width:767px){.kiqLWT > *:not(:last-child){margin-bottom:96px;}}/*!sc*/
            @media screen and (max-width:767px){.kiqLWT > *{margin-left:8px;margin-right:8px;}}/*!sc*/
            data-styled.g179[id="styles-sc-13ceqjm-0"]{content:"kiqLWT,"}/*!sc*/
            .dgelNQ{display:grid;grid-template-columns:repeat(2,1fr);grid-template-rows:auto;grid-column-gap:3.3333333333333335%;direction:ltr;text-align:left;}/*!sc*/
            @supports (display:-ms-grid){.dgelNQ{display:-ms-grid;-ms-grid-columns:1fr 1fr;}.dgelNQ > *:first-child{-ms-grid-column:calc(0 + 1);}.dgelNQ > *:last-child{-ms-grid-column:2;}@media screen and (max-width:767px){.dgelNQ{-ms-grid-columns:auto;}}}/*!sc*/
            .dgelNQ > *:last-child{padding-left:11.11111111111111%;padding-right:5.555555555555555%;}/*!sc*/
            @media screen and (max-width:767px){.dgelNQ{grid-template-columns:auto;text-align:center;}.dgelNQ > *:last-child{padding:0;}}/*!sc*/
            .kmBNVi{display:grid;grid-template-columns:repeat(2,1fr);grid-template-rows:auto;grid-column-gap:3.3333333333333335%;direction:rtl;text-align:left;}/*!sc*/
            @supports (display:-ms-grid){.kmBNVi{display:-ms-grid;-ms-grid-columns:1fr 1fr;}.kmBNVi > *:first-child{-ms-grid-column:calc(1 + 1);}.kmBNVi > *:last-child{-ms-grid-column:1;}@media screen and (max-width:767px){.kmBNVi{-ms-grid-columns:auto;}}}/*!sc*/
            .kmBNVi > *:last-child{padding-right:11.11111111111111%;padding-left:5.555555555555555%;}/*!sc*/
            @media screen and (max-width:767px){.kmBNVi{grid-template-columns:auto;text-align:center;}.kmBNVi > *:last-child{padding:0;}}/*!sc*/
            data-styled.g180[id="styles__StyledVideoBlock-sc-13ceqjm-1"]{content:"dgelNQ,kmBNVi,"}/*!sc*/
            .dyiuvX{height:0;width:100%;position:relative;overflow:hidden;-webkit-flex:1;-ms-flex:1;flex:1;min-height:552px;}/*!sc*/
            .dyiuvX > *{position:absolute !important;bottom:-2px;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);min-width:100%;min-height:100%;width:auto;height:auto;}/*!sc*/
            @media screen and (max-width:767px){.dyiuvX{min-height:312px;margin-bottom:32px;}}/*!sc*/
            data-styled.g181[id="styles__VideoWrapper-sc-13ceqjm-2"]{content:"dyiuvX,"}/*!sc*/
            .fPznsq{-webkit-align-self:center;-ms-flex-item-align:center;align-self:center;direction:ltr;}/*!sc*/
            .fPznsq > *:first-child{margin-bottom:8px;}/*!sc*/
            data-styled.g182[id="styles__Content-sc-13ceqjm-3"]{content:"fPznsq,"}/*!sc*/
            .eOeKNs{font-size:3.3333333333333335vw;line-height:1.17;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.eOeKNs{font-size:48px;}}/*!sc*/
            @media screen and (max-width:767px){.eOeKNs{font-size:32px;line-height:1.25;}}/*!sc*/
            data-styled.g183[id="styles__TitleCopy-sc-13ceqjm-4"]{content:"eOeKNs,"}/*!sc*/
            .ceBOEd{font-size:1.6666666666666667vw;line-height:1.5;color:#263238;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.ceBOEd{font-size:24px;}}/*!sc*/
            @media screen and (max-width:992px){.ceBOEd{font-size:2.2222222222222223vw;}}/*!sc*/
            @media screen and (max-width:767px){.ceBOEd{font-size:20px;line-height:1.6;}}/*!sc*/
            data-styled.g184[id="styles__DescriptionCopy-sc-13ceqjm-5"]{content:"ceBOEd,"}/*!sc*/
            .gpEduv{display:inline-block;margin:0 auto;}/*!sc*/
            .gpEduv p{margin:0;display:block;}/*!sc*/
            .gpEduv p a span{white-space:normal;word-wrap:break-word;}/*!sc*/
            .gpEduv code{color:#7551e9;font-family:Karla,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Oxygen,Cantarell,sans-serif;}/*!sc*/
            .gpEduv blockquote{position:relative;display:block;font-size:32px;line-height:1.5;margin:0 0 64px;}/*!sc*/
            @media screen and (max-width:767px){.gpEduv blockquote{font-size:24px;line-height:1.25;margin:0 0 24px;}}/*!sc*/
            .gpEduv blockquote::before{position:absolute;content:'';top:0;left:-24px;bottom:0;width:8px;border-radius:4px;background:#ed63d2;}/*!sc*/
            .cErOyN{display:block;margin:0 auto;}/*!sc*/
            .cErOyN p{margin:0;display:block;}/*!sc*/
            .cErOyN p a span{white-space:normal;word-wrap:break-word;}/*!sc*/
            .cErOyN code{color:#7551e9;font-family:Karla,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Oxygen,Cantarell,sans-serif;}/*!sc*/
            .cErOyN blockquote{position:relative;display:block;font-size:32px;line-height:1.5;margin:0 0 64px;}/*!sc*/
            @media screen and (max-width:767px){.cErOyN blockquote{font-size:24px;line-height:1.25;margin:0 0 24px;}}/*!sc*/
            .cErOyN blockquote::before{position:absolute;content:'';top:0;left:-24px;bottom:0;width:8px;border-radius:4px;background:#39e09b;}/*!sc*/
            data-styled.g185[id="styles-sc-1polp6v-0"]{content:"gpEduv,cErOyN,"}/*!sc*/
            .hhRlJl{margin:0 auto;padding:4.444444444444445vw 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;text-align:center;position:relative;z-index:3;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.hhRlJl{padding:64px 0;}}/*!sc*/
            @media screen and (max-width:767px){.hhRlJl{padding:64px 0;}}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.hhRlJl{padding:128px 0 192px;}}/*!sc*/
            @media screen and (max-width:767px){.hhRlJl{padding:104px 0 128px;}}/*!sc*/
            data-styled.g188[id="styles-s8vvbb-0"]{content:"hhRlJl,"}/*!sc*/
            .csOOj{margin-bottom:64px;}/*!sc*/
            @media screen and (max-width:992px){.csOOj{margin-bottom:32px;}}/*!sc*/
            @media screen and (max-width:767px){.csOOj{padding:0 24px;}}/*!sc*/
            data-styled.g189[id="styles__Main-s8vvbb-1"]{content:"csOOj,"}/*!sc*/
            .ecFDNS{font-size:64px;}/*!sc*/
            @media screen and (max-width:992px){.ecFDNS{font-size:48px;}}/*!sc*/
            @media screen and (max-width:767px){.ecFDNS{font-size:calc(80px/2);}}/*!sc*/
            data-styled.g191[id="styles__Title-s8vvbb-3"]{content:"ecFDNS,"}/*!sc*/
            .cjpmrw{padding-top:16px;}/*!sc*/
            @media screen and (max-width:767px){.cjpmrw{padding-top:8px;}}/*!sc*/
            data-styled.g192[id="styles__Subtitle-s8vvbb-4"]{content:"cjpmrw,"}/*!sc*/
            .gSUUPH{padding-top:16px;width:calc(100% -32px);max-width:256px;}/*!sc*/
            .gSUUPH a{-webkit-text-decoration:underline;text-decoration:underline;}/*!sc*/
            .gSUUPH a:hover{-webkit-text-decoration:none;text-decoration:none;}/*!sc*/
            data-styled.g193[id="styles__SignInCta-s8vvbb-5"]{content:"gSUUPH,"}/*!sc*/
            .jkMfSm{margin:0 auto;padding:4.444444444444445vw 0;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding-top:0;}/*!sc*/
            @media screen and (min-width:calc(1440px + 1px)){.jkMfSm{padding:64px 0;}}/*!sc*/
            @media screen and (max-width:767px){.jkMfSm{padding:64px 0;}}/*!sc*/
            data-styled.g194[id="styles-eu9sig-0"]{content:"jkMfSm,"}/*!sc*/
            *{-webkit-tap-highlight-color:transparent;}/*!sc*/
            #___gatsby{height:100%;}/*!sc*/
            #___gatsby > *:first-child{height:100%;}/*!sc*/
            main{width:100%;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;}/*!sc*/
            .header--1{-webkit-letter-spacing:calc(64px * -0.2);-moz-letter-spacing:calc(64px * -0.2);-ms-letter-spacing:calc(64px * -0.2);letter-spacing:calc(64px * -0.2);font-size:64px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--2{-webkit-letter-spacing:calc(48px * -0.2);-moz-letter-spacing:calc(48px * -0.2);-ms-letter-spacing:calc(48px * -0.2);letter-spacing:calc(48px * -0.2);font-size:48px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--3{-webkit-letter-spacing:calc(32px * -0.2);-moz-letter-spacing:calc(32px * -0.2);-ms-letter-spacing:calc(32px * -0.2);letter-spacing:calc(32px * -0.2);font-size:32px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--4{-webkit-letter-spacing:calc(24px * -0.2);-moz-letter-spacing:calc(24px * -0.2);-ms-letter-spacing:calc(24px * -0.2);letter-spacing:calc(24px * -0.2);font-size:24px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--5{-webkit-letter-spacing:calc(20px * -0.2);-moz-letter-spacing:calc(20px * -0.2);-ms-letter-spacing:calc(20px * -0.2);letter-spacing:calc(20px * -0.2);font-size:20px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--6{-webkit-letter-spacing:calc(16px * -0.2);-moz-letter-spacing:calc(16px * -0.2);-ms-letter-spacing:calc(16px * -0.2);letter-spacing:calc(16px * -0.2);font-size:16px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--7{-webkit-letter-spacing:calc(14px * -0.2);-moz-letter-spacing:calc(14px * -0.2);-ms-letter-spacing:calc(14px * -0.2);letter-spacing:calc(14px * -0.2);font-size:14px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            .header--8{-webkit-letter-spacing:calc(12px * -0.2);-moz-letter-spacing:calc(12px * -0.2);-ms-letter-spacing:calc(12px * -0.2);letter-spacing:calc(12px * -0.2);font-size:12px;font-weight:600;font-style:normal;line-height:1.1;margin:0;color:#263238;}/*!sc*/
            a{-webkit-text-decoration:none;text-decoration:none;color:inherit;}/*!sc*/
            button{font-family:Karla,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Oxygen,Cantarell,sans-serif;border:none;outline:none;}/*!sc*/
            x48 .pt-47{padding-top:188px;}/*!sc*/
            .pl-47{padding-left:188px;}/*!sc*/
            .pr-47{padding-right:188px;}/*!sc*/
            .pb-47{padding-bottom:188px;}/*!sc*/
            .pt-46{padding-top:184px;}/*!sc*/
            .pl-46{padding-left:184px;}/*!sc*/
            .pr-46{padding-right:184px;}/*!sc*/
            .pb-46{padding-bottom:184px;}/*!sc*/
            .pt-45{padding-top:180px;}/*!sc*/
            .pl-45{padding-left:180px;}/*!sc*/
            .pr-45{padding-right:180px;}/*!sc*/
            .pb-45{padding-bottom:180px;}/*!sc*/
            .pt-44{padding-top:176px;}/*!sc*/
            .pl-44{padding-left:176px;}/*!sc*/
            .pr-44{padding-right:176px;}/*!sc*/
            .pb-44{padding-bottom:176px;}/*!sc*/
            .pt-43{padding-top:172px;}/*!sc*/
            .pl-43{padding-left:172px;}/*!sc*/
            .pr-43{padding-right:172px;}/*!sc*/
            .pb-43{padding-bottom:172px;}/*!sc*/
            .pt-42{padding-top:168px;}/*!sc*/
            .pl-42{padding-left:168px;}/*!sc*/
            .pr-42{padding-right:168px;}/*!sc*/
            .pb-42{padding-bottom:168px;}/*!sc*/
            .pt-41{padding-top:164px;}/*!sc*/
            .pl-41{padding-left:164px;}/*!sc*/
            .pr-41{padding-right:164px;}/*!sc*/
            .pb-41{padding-bottom:164px;}/*!sc*/
            .pt-40{padding-top:160px;}/*!sc*/
            .pl-40{padding-left:160px;}/*!sc*/
            .pr-40{padding-right:160px;}/*!sc*/
            .pb-40{padding-bottom:160px;}/*!sc*/
            .pt-39{padding-top:156px;}/*!sc*/
            .pl-39{padding-left:156px;}/*!sc*/
            .pr-39{padding-right:156px;}/*!sc*/
            .pb-39{padding-bottom:156px;}/*!sc*/
            .pt-38{padding-top:152px;}/*!sc*/
            .pl-38{padding-left:152px;}/*!sc*/
            .pr-38{padding-right:152px;}/*!sc*/
            .pb-38{padding-bottom:152px;}/*!sc*/
            .pt-37{padding-top:148px;}/*!sc*/
            .pl-37{padding-left:148px;}/*!sc*/
            .pr-37{padding-right:148px;}/*!sc*/
            .pb-37{padding-bottom:148px;}/*!sc*/
            .pt-36{padding-top:144px;}/*!sc*/
            .pl-36{padding-left:144px;}/*!sc*/
            .pr-36{padding-right:144px;}/*!sc*/
            .pb-36{padding-bottom:144px;}/*!sc*/
            .pt-35{padding-top:140px;}/*!sc*/
            .pl-35{padding-left:140px;}/*!sc*/
            .pr-35{padding-right:140px;}/*!sc*/
            .pb-35{padding-bottom:140px;}/*!sc*/
            .pt-34{padding-top:136px;}/*!sc*/
            .pl-34{padding-left:136px;}/*!sc*/
            .pr-34{padding-right:136px;}/*!sc*/
            .pb-34{padding-bottom:136px;}/*!sc*/
            .pt-33{padding-top:132px;}/*!sc*/
            .pl-33{padding-left:132px;}/*!sc*/
            .pr-33{padding-right:132px;}/*!sc*/
            .pb-33{padding-bottom:132px;}/*!sc*/
            .pt-32{padding-top:128px;}/*!sc*/
            .pl-32{padding-left:128px;}/*!sc*/
            .pr-32{padding-right:128px;}/*!sc*/
            .pb-32{padding-bottom:128px;}/*!sc*/
            .pt-31{padding-top:124px;}/*!sc*/
            .pl-31{padding-left:124px;}/*!sc*/
            .pr-31{padding-right:124px;}/*!sc*/
            .pb-31{padding-bottom:124px;}/*!sc*/
            .pt-30{padding-top:120px;}/*!sc*/
            .pl-30{padding-left:120px;}/*!sc*/
            .pr-30{padding-right:120px;}/*!sc*/
            .pb-30{padding-bottom:120px;}/*!sc*/
            .pt-29{padding-top:116px;}/*!sc*/
            .pl-29{padding-left:116px;}/*!sc*/
            .pr-29{padding-right:116px;}/*!sc*/
            .pb-29{padding-bottom:116px;}/*!sc*/
            .pt-28{padding-top:112px;}/*!sc*/
            .pl-28{padding-left:112px;}/*!sc*/
            .pr-28{padding-right:112px;}/*!sc*/
            .pb-28{padding-bottom:112px;}/*!sc*/
            .pt-27{padding-top:108px;}/*!sc*/
            .pl-27{padding-left:108px;}/*!sc*/
            .pr-27{padding-right:108px;}/*!sc*/
            .pb-27{padding-bottom:108px;}/*!sc*/
            .pt-26{padding-top:104px;}/*!sc*/
            .pl-26{padding-left:104px;}/*!sc*/
            .pr-26{padding-right:104px;}/*!sc*/
            .pb-26{padding-bottom:104px;}/*!sc*/
            .pt-25{padding-top:100px;}/*!sc*/
            .pl-25{padding-left:100px;}/*!sc*/
            .pr-25{padding-right:100px;}/*!sc*/
            .pb-25{padding-bottom:100px;}/*!sc*/
            .pt-24{padding-top:96px;}/*!sc*/
            .pl-24{padding-left:96px;}/*!sc*/
            .pr-24{padding-right:96px;}/*!sc*/
            .pb-24{padding-bottom:96px;}/*!sc*/
            .pt-23{padding-top:92px;}/*!sc*/
            .pl-23{padding-left:92px;}/*!sc*/
            .pr-23{padding-right:92px;}/*!sc*/
            .pb-23{padding-bottom:92px;}/*!sc*/
            .pt-22{padding-top:88px;}/*!sc*/
            .pl-22{padding-left:88px;}/*!sc*/
            .pr-22{padding-right:88px;}/*!sc*/
            .pb-22{padding-bottom:88px;}/*!sc*/
            .pt-21{padding-top:84px;}/*!sc*/
            .pl-21{padding-left:84px;}/*!sc*/
            .pr-21{padding-right:84px;}/*!sc*/
            .pb-21{padding-bottom:84px;}/*!sc*/
            .pt-20{padding-top:80px;}/*!sc*/
            .pl-20{padding-left:80px;}/*!sc*/
            .pr-20{padding-right:80px;}/*!sc*/
            .pb-20{padding-bottom:80px;}/*!sc*/
            .pt-19{padding-top:76px;}/*!sc*/
            .pl-19{padding-left:76px;}/*!sc*/
            .pr-19{padding-right:76px;}/*!sc*/
            .pb-19{padding-bottom:76px;}/*!sc*/
            .pt-18{padding-top:72px;}/*!sc*/
            .pl-18{padding-left:72px;}/*!sc*/
            .pr-18{padding-right:72px;}/*!sc*/
            .pb-18{padding-bottom:72px;}/*!sc*/
            .pt-17{padding-top:68px;}/*!sc*/
            .pl-17{padding-left:68px;}/*!sc*/
            .pr-17{padding-right:68px;}/*!sc*/
            .pb-17{padding-bottom:68px;}/*!sc*/
            .pt-16{padding-top:64px;}/*!sc*/
            .pl-16{padding-left:64px;}/*!sc*/
            .pr-16{padding-right:64px;}/*!sc*/
            .pb-16{padding-bottom:64px;}/*!sc*/
            .pt-15{padding-top:60px;}/*!sc*/
            .pl-15{padding-left:60px;}/*!sc*/
            .pr-15{padding-right:60px;}/*!sc*/
            .pb-15{padding-bottom:60px;}/*!sc*/
            .pt-14{padding-top:56px;}/*!sc*/
            .pl-14{padding-left:56px;}/*!sc*/
            .pr-14{padding-right:56px;}/*!sc*/
            .pb-14{padding-bottom:56px;}/*!sc*/
            .pt-13{padding-top:52px;}/*!sc*/
            .pl-13{padding-left:52px;}/*!sc*/
            .pr-13{padding-right:52px;}/*!sc*/
            .pb-13{padding-bottom:52px;}/*!sc*/
            .pt-12{padding-top:48px;}/*!sc*/
            .pl-12{padding-left:48px;}/*!sc*/
            .pr-12{padding-right:48px;}/*!sc*/
            .pb-12{padding-bottom:48px;}/*!sc*/
            .pt-11{padding-top:44px;}/*!sc*/
            .pl-11{padding-left:44px;}/*!sc*/
            .pr-11{padding-right:44px;}/*!sc*/
            .pb-11{padding-bottom:44px;}/*!sc*/
            .pt-10{padding-top:40px;}/*!sc*/
            .pl-10{padding-left:40px;}/*!sc*/
            .pr-10{padding-right:40px;}/*!sc*/
            .pb-10{padding-bottom:40px;}/*!sc*/
            .pt-9{padding-top:36px;}/*!sc*/
            .pl-9{padding-left:36px;}/*!sc*/
            .pr-9{padding-right:36px;}/*!sc*/
            .pb-9{padding-bottom:36px;}/*!sc*/
            .pt-8{padding-top:32px;}/*!sc*/
            .pl-8{padding-left:32px;}/*!sc*/
            .pr-8{padding-right:32px;}/*!sc*/
            .pb-8{padding-bottom:32px;}/*!sc*/
            .pt-7{padding-top:28px;}/*!sc*/
            .pl-7{padding-left:28px;}/*!sc*/
            .pr-7{padding-right:28px;}/*!sc*/
            .pb-7{padding-bottom:28px;}/*!sc*/
            .pt-6{padding-top:24px;}/*!sc*/
            .pl-6{padding-left:24px;}/*!sc*/
            .pr-6{padding-right:24px;}/*!sc*/
            .pb-6{padding-bottom:24px;}/*!sc*/
            .pt-5{padding-top:20px;}/*!sc*/
            .pl-5{padding-left:20px;}/*!sc*/
            .pr-5{padding-right:20px;}/*!sc*/
            .pb-5{padding-bottom:20px;}/*!sc*/
            .pt-4{padding-top:16px;}/*!sc*/
            .pl-4{padding-left:16px;}/*!sc*/
            .pr-4{padding-right:16px;}/*!sc*/
            .pb-4{padding-bottom:16px;}/*!sc*/
            .pt-3{padding-top:12px;}/*!sc*/
            .pl-3{padding-left:12px;}/*!sc*/
            .pr-3{padding-right:12px;}/*!sc*/
            .pb-3{padding-bottom:12px;}/*!sc*/
            .pt-2{padding-top:8px;}/*!sc*/
            .pl-2{padding-left:8px;}/*!sc*/
            .pr-2{padding-right:8px;}/*!sc*/
            .pb-2{padding-bottom:8px;}/*!sc*/
            .pt-1{padding-top:4px;}/*!sc*/
            .pl-1{padding-left:4px;}/*!sc*/
            .pr-1{padding-right:4px;}/*!sc*/
            .pb-1{padding-bottom:4px;}/*!sc*/
            x48 .mt-47{margin-top:188px;}/*!sc*/
            .ml-47{margin-left:188px;}/*!sc*/
            .mr-47{margin-right:188px;}/*!sc*/
            .mb-47{margin-bottom:188px;}/*!sc*/
            .mt-46{margin-top:184px;}/*!sc*/
            .ml-46{margin-left:184px;}/*!sc*/
            .mr-46{margin-right:184px;}/*!sc*/
            .mb-46{margin-bottom:184px;}/*!sc*/
            .mt-45{margin-top:180px;}/*!sc*/
            .ml-45{margin-left:180px;}/*!sc*/
            .mr-45{margin-right:180px;}/*!sc*/
            .mb-45{margin-bottom:180px;}/*!sc*/
            .mt-44{margin-top:176px;}/*!sc*/
            .ml-44{margin-left:176px;}/*!sc*/
            .mr-44{margin-right:176px;}/*!sc*/
            .mb-44{margin-bottom:176px;}/*!sc*/
            .mt-43{margin-top:172px;}/*!sc*/
            .ml-43{margin-left:172px;}/*!sc*/
            .mr-43{margin-right:172px;}/*!sc*/
            .mb-43{margin-bottom:172px;}/*!sc*/
            .mt-42{margin-top:168px;}/*!sc*/
            .ml-42{margin-left:168px;}/*!sc*/
            .mr-42{margin-right:168px;}/*!sc*/
            .mb-42{margin-bottom:168px;}/*!sc*/
            .mt-41{margin-top:164px;}/*!sc*/
            .ml-41{margin-left:164px;}/*!sc*/
            .mr-41{margin-right:164px;}/*!sc*/
            .mb-41{margin-bottom:164px;}/*!sc*/
            .mt-40{margin-top:160px;}/*!sc*/
            .ml-40{margin-left:160px;}/*!sc*/
            .mr-40{margin-right:160px;}/*!sc*/
            .mb-40{margin-bottom:160px;}/*!sc*/
            .mt-39{margin-top:156px;}/*!sc*/
            .ml-39{margin-left:156px;}/*!sc*/
            .mr-39{margin-right:156px;}/*!sc*/
            .mb-39{margin-bottom:156px;}/*!sc*/
            .mt-38{margin-top:152px;}/*!sc*/
            .ml-38{margin-left:152px;}/*!sc*/
            .mr-38{margin-right:152px;}/*!sc*/
            .mb-38{margin-bottom:152px;}/*!sc*/
            .mt-37{margin-top:148px;}/*!sc*/
            .ml-37{margin-left:148px;}/*!sc*/
            .mr-37{margin-right:148px;}/*!sc*/
            .mb-37{margin-bottom:148px;}/*!sc*/
            .mt-36{margin-top:144px;}/*!sc*/
            .ml-36{margin-left:144px;}/*!sc*/
            .mr-36{margin-right:144px;}/*!sc*/
            .mb-36{margin-bottom:144px;}/*!sc*/
            .mt-35{margin-top:140px;}/*!sc*/
            .ml-35{margin-left:140px;}/*!sc*/
            .mr-35{margin-right:140px;}/*!sc*/
            .mb-35{margin-bottom:140px;}/*!sc*/
            .mt-34{margin-top:136px;}/*!sc*/
            .ml-34{margin-left:136px;}/*!sc*/
            .mr-34{margin-right:136px;}/*!sc*/
            .mb-34{margin-bottom:136px;}/*!sc*/
            .mt-33{margin-top:132px;}/*!sc*/
            .ml-33{margin-left:132px;}/*!sc*/
            .mr-33{margin-right:132px;}/*!sc*/
            .mb-33{margin-bottom:132px;}/*!sc*/
            .mt-32{margin-top:128px;}/*!sc*/
            .ml-32{margin-left:128px;}/*!sc*/
            .mr-32{margin-right:128px;}/*!sc*/
            .mb-32{margin-bottom:128px;}/*!sc*/
            .mt-31{margin-top:124px;}/*!sc*/
            .ml-31{margin-left:124px;}/*!sc*/
            .mr-31{margin-right:124px;}/*!sc*/
            .mb-31{margin-bottom:124px;}/*!sc*/
            .mt-30{margin-top:120px;}/*!sc*/
            .ml-30{margin-left:120px;}/*!sc*/
            .mr-30{margin-right:120px;}/*!sc*/
            .mr-18{margin-right:72px;}/*!sc*/
            .mb-18{margin-bottom:72px;}/*!sc*/
            .mt-17{margin-top:68px;}/*!sc*/
            .ml-17{margin-left:68px;}/*!sc*/
            .ml-15{margin-left:60px;}/*!sc*/
            .mr-15{margin-right:60px;}/*!sc*/
            .mb-15{margin-bottom:60px;}/*!sc*/
            .mt-14{margin-top:56px;}/*!sc*/
            .ml-14{margin-left:56px;}/*!sc*/
            .mr-14{margin-right:56px;}/*!sc*/
            .mb-14{margin-bottom:56px;}/*!sc*/
            .mt-13{margin-top:52px;}/*!sc*/
            .ml-13{margin-left:52px;}/*!sc*/
            .mr-13{margin-right:52px;}/*!sc*/
            .mb-13{margin-bottom:52px;}/*!sc*/
            .mt-12{margin-top:48px;}/*!sc*/
            .ml-12{margin-left:48px;}/*!sc*/
            .mr-12{margin-right:48px;}/*!sc*/
            .mb-12{margin-bottom:48px;}/*!sc*/
            .mt-11{margin-top:44px;}/*!sc*/
            .ml-11{margin-left:44px;}/*!sc*/
            .mr-11{margin-right:44px;}/*!sc*/
            .mb-11{margin-bottom:44px;}/*!sc*/
            .mt-10{margin-top:40px;}/*!sc*/
            .ml-10{margin-left:40px;}/*!sc*/
            .mr-10{margin-right:40px;}/*!sc*/
            .mb-10{margin-bottom:40px;}/*!sc*/
            .mt-9{margin-top:36px;}/*!sc*/
            .ml-9{margin-left:36px;}/*!sc*/
            .mr-9{margin-right:36px;}/*!sc*/
            .mb-9{margin-bottom:36px;}/*!sc*/
            .mt-8{margin-top:32px;}/*!sc*/
            .ml-8{margin-left:32px;}/*!sc*/
            .mr-8{margin-right:32px;}/*!sc*/
            .mb-8{margin-bottom:32px;}/*!sc*/
            .mt-7{margin-top:28px;}/*!sc*/
            .ml-7{margin-left:28px;}/*!sc*/
            .mr-7{margin-right:28px;}/*!sc*/
            .mb-7{margin-bottom:28px;}/*!sc*/
            .mt-6{margin-top:24px;}/*!sc*/
            .ml-6{margin-left:24px;}/*!sc*/
            .mr-6{margin-right:24px;}/*!sc*/
            .mb-6{margin-bottom:24px;}/*!sc*/
            .mt-5{margin-top:20px;}/*!sc*/
            .ml-5{margin-left:20px;}/*!sc*/
            .mr-5{margin-right:20px;}/*!sc*/
            .mb-5{margin-bottom:20px;}/*!sc*/
            .mt-4{margin-top:16px;}/*!sc*/
            .ml-4{margin-left:16px;}/*!sc*/
            .mr-4{margin-right:16px;}/*!sc*/
            .mb-4{margin-bottom:16px;}/*!sc*/
            .mt-3{margin-top:12px;}/*!sc*/
            .ml-3{margin-left:12px;}/*!sc*/
            .mr-3{margin-right:12px;}/*!sc*/
            .mb-3{margin-bottom:12px;}/*!sc*/
            .mt-2{margin-top:8px;}/*!sc*/
            .ml-2{margin-left:8px;}/*!sc*/
            .mr-2{margin-right:8px;}/*!sc*/
            .mb-2{margin-bottom:8px;}/*!sc*/
            .mt-1{margin-top:4px;}/*!sc*/
            .ml-1{margin-left:4px;}/*!sc*/
            .mr-1{margin-right:4px;}/*!sc*/
            .mb-1{margin-bottom:4px;}/*!sc*/
            .block{display:block;}/*!sc*/
            data-styled.g289[id="sc-global-iEDSUG1"]{content:"sc-global-iEDSUG1,"}/*!sc*/
        </style>
        <meta name="theme-color" content="#39e09b"/>
        <style>.async-hide { opacity: 0 !important}</style>
		<?php echo Avada()->settings->get( 'google_analytics' ); ?>

		<?php echo Avada()->settings->get( 'space_head' ); ?>
		<?
		$pageid = get_the_ID(); //get current ID of page
		$code_header = get_post_meta($pageid, 'code_header', true); //get value from custom fields
		echo $code_header;	// code before </head>
		?>
 
    </head>
	<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	$logo_url = Avada_Sanitize::get_url_with_correct_scheme( Avada()->settings->get( 'logo', 'url' ) );
	if ( '' == $logo_url ) {
		$logo_url = Avada_Sanitize::get_url_with_correct_scheme( Avada()->settings->get( 'logo_retina', 'url' ) );
	}
	?>
    <?php
	global $post;
	$page_slug = $post->post_name;
	if($page_slug=='account'){
	$datapreview = '';	
	}else{
	$datapreview = 'data-has-preview';	
	}
	?>
	<body <?php body_class(); ?> <?= $datapreview ?> data-page-<?= $page_slug ?> >
	<?php wp_body_open(); ?>
        <div id="___gatsby">
            <div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
                <div class="sc-fzoKki bLGRpx">
                    <div class="styles__StyledHeader-sc-1tdma9g-0 styles__DesktopHeader-sc-1tdma9g-1 bNiLxN banner_DesktopHeaderNoPadding">
                        <div class="styles__ContentWrapper-sc-1tdma9g-3 ejJabW">
                            <div class="styles__Col-sc-1tdma9g-8 duKdAJ">
                                    <a href="<?php echo get_site_url(); ?>">
                                        <img class="thumb logoimage" src="<?=$logo_url?>" />
                                    </a>
                                <div class="styles__Nav-sc-1tdma9g-5 iigIyi"> </div>
                            </div>
							<?php if ( is_user_logged_in() ) { ?>
                            <div class="styles__Col-sc-1tdma9g-8 duKdAJ">
                                <a href="<?php echo wp_logout_url( home_url() ); ?>" data-test="SignOutLink" class="styles__NavItemLink-sc-1tdma9g-6 hApAYm"><span type="heading" class="sc-fznxsB bLyQDF">Sign out</span></a>
                                <a href="<?= get_the_permalink(33) ?>" data-test="Link">
                                    <button color="green" data-test="Button" class="sc-AxgMl cSrlAO   undefined" type="button">
                                        <svg viewBox="0 0 24 24" class="sc-AxjAm dIOHHa button--icon" data-test="IconComponent">
                                            <path d="M12,4.35a3.7,3.7,0,1,1-3.7,3.7A3.7,3.7,0,0,1,12,4.35ZM18.13,17.9a.73.73,0,0,1-.63.35H6.5a.73.73,0,0,1-.63-.35.74.74,0,0,1,0-.72,6.84,6.84,0,0,1,12.36,0A.74.74,0,0,1,18.13,17.9ZM12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Z"></path>
                                        </svg>
                                        <span class="button--label" data-test="Label">Admin</span>
                                    </button>
                                </a>
                            </div>
							<?php } else { ?>
                            <div class="styles__Col-sc-1tdma9g-8 duKdAJ"><a href="<?= get_the_permalink(14) ?>" data-test="LogInLink" class="styles__NavItemLink-sc-1tdma9g-6 hApAYm"><span type="heading" class="sc-fznxsB bLyQDF">Log in</span></a><a href="<?= get_the_permalink(9) ?>" data-test="Link"><button color="green" data-test="Button" class="sc-AxgMl cSrlAO   undefined" type="button"><span class="button--label" data-test="Label">Sign up free</span></button></a></div>
							<?php } ?> 
                        </div>
                    </div>
                </div>
				<div class="sc-fzpkJw gaTPij">
                    <section>
                        <div class="styles__StyledHeader-sc-1tdma9g-0 styles__MobileHeader-sc-1tdma9g-2 eknHrs banner_DesktopHeaderNoPadding">
                            <div class="styles__ContentWrapper-sc-1tdma9g-3 styles__MobileContentWrapper-sc-1tdma9g-4 ipvwPj">
                                <span class="sc-fznJRM cranDr" viewBox="0 0 85 16">
                                    <a href="<?php echo get_site_url(); ?>">
                                        <img class="thumb mobilelogo" src="<?=$logo_url?>" />
                                    </a>
                                </span>
                                <div class="styles__Col-sc-1tdma9g-8 styles__MobileCol-sc-1tdma9g-9 cFydgj">
									<?php if ( is_user_logged_in() ) { ?>
									<a href="<?php echo wp_logout_url( home_url() ); ?>" data-test="Link"><button color="green" data-test="Button" class="sc-AxgMl cSrlAO   undefined" type="button"><span class="button--label" data-test="Label">Sign out</span></button></a>
									<?php }else{ ?>
                                    <a href="<?= get_the_permalink(9) ?>" data-test="Link"><button color="green" data-test="Button" class="sc-AxgMl cSrlAO   undefined" type="button"><span class="button--label" data-test="Label">Sign up free</span></button></a> 
									<?php } ?>
                                </div>
                            </div>
                        </div>
						<div data-test="SubHeader" class="styles__MobileSubHeader-sc-1tdma9g-10 hIuqRb banner_DesktopHeaderNoPadding">
							<?php if ( is_user_logged_in() ) { ?>
                            <a type="heading" data-test="Link" class="sc-fzpjYC becZbZ styles__MobileAdmin-sc-1tdma9g-11" href="<?= get_the_permalink(14) ?>">
                                <span type="heading" data-test="AdminLink" class="sc-fznxsB mNLTT">
                                    <svg style="position: relative;top: 3px;" viewBox="0 0 24 24" data-test="IconComponent" class="sc-AxjAm jlFKrq">
                                        <path d="M12,4.35a3.7,3.7,0,1,1-3.7,3.7A3.7,3.7,0,0,1,12,4.35ZM18.13,17.9a.73.73,0,0,1-.63.35H6.5a.73.73,0,0,1-.63-.35.74.74,0,0,1,0-.72,6.84,6.84,0,0,1,12.36,0A.74.74,0,0,1,18.13,17.9ZM12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Z"></path>
                                    </svg>
                                    Admin
                                </span>
                            </a>
							<?php }else{ ?>
                            <a type="heading" data-test="Link" class="sc-fzpjYC becZbZ styles__StyledLink-sc-1tdma9g-12 kwKvvw" href="<?= get_the_permalink(14) ?>"><span type="heading" data-test="LogInLink" class="sc-fznxsB mNLTT">Log in</span></a>
							<?php } ?>
                        </div>
                    </section>
                </div>
				<?php if ( !is_front_page() && !is_home() ) { ?>
				<div class="container pagesmp">
				<?php } ?>