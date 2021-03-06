<!-- Required meta tags -->
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="google-site-verification" content="ixh63P7Tr3t_oApcfx3O-KE51AWOIkAsnQHWggpUGE0" />

<meta property="og:title" content="emit – A new perspective on time. In reverse.">
<meta property="og:image" content="https://ownemit.com/images/rightfacing_goal_comp_preview.png">
<meta property="og:description" content="A watch that counts down to the most important events of your day, month, year and even life. Own time. Own emit.">
<meta property="og:url" content="ownemit.com">
<meta property="og:type" content="website">

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- fullPage plugin by Alvaro Trigo CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/fullpage.css" rel="stylesheet" type="text/css">

<!-- JAVASCRIPTS -->
<script src="/js/app.js"></script>

<!-- Script to force div to scroll -->
<script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>

<!-- fullPage plugin by Alvaro Trigo CSS -->
<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/vendors/scrolloverflow.js"></script>

<!-- Drag N Move Extension -->
<!-- <script src="/js/fullpage.dragAndMove.min.js"></script> -->
<!-- <script src="/js/jquery.fullpage.extensions.min.js"></script> -->

<!-- FullpageJS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/fullpage.js"></script>

<!-- Hotjar Tracking Code for https://ownemit.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:796145,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '277169082861932');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=277169082861932&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '257927708268790');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=257927708268790&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123259634-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123259634-1');
</script>

<!-- Webgains tracking landing page script -->
<script>
(function(w,e,b,g,a,i,n,s){w['ITCLKOBJ']=a;w[a]=w[a]||function(){(w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();i=e.createElement(b),n=e.getElementsByTagName(b)[0];i.async=1;i.src=g;n.parentNode.insertBefore(i,n)})(window,document,'script','https://analytics.webgains.io/clk.min.js','ITCLKQ');
ITCLKQ('set', 'internal.api', true);
ITCLKQ('set', 'internal.cookie', true);
ITCLKQ('click');
</script>

<!-- Snipcart Stuff -->
<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" id="snipcart" data-api-key="MDUzNGQ1YzctNTFkMy00YjVlLWExMDEtZGVlZTY3NzdiNTA3NjM2ODk0MDkzNzI0MTg5NTYw"></script>
<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" type="text/css" rel="stylesheet" />

<!-- Webgains on confirmation of order on snipcart -->
<script type="text/javascript">
  $(document).ready(function(){
    Snipcart.subscribe('order.completed', function (data) {

        // Mapping variables to be used
        var itemsArray = data.items;
        var discountsArray = data.discounts;
        var itemNames = itemsArray.map(a => a.name);
        var itemIDs = itemsArray.map(b => b.id);
        var discountsNames = discountsArray.map(c => c.name);

        // Forming items string
        var itemsString = '1046475' + '::' + data.total + '::' + itemNames.toString() + '::' + itemIDs.toString() + '::' + discountsNames.toString();

        // Webgains confirmation script
        (function(w,e,b,g,a,i,n,s){w['ITCVROBJ']=a;w[a]=w[a]||function(){
            (w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();i=e.createElement(b),
            n=e.getElementsByTagName(b)[0];i.async=1;i.src=g;n.parentNode.insertBefore(i,n)
        })(window,document,'script','https://analytics.webgains.io/cvr.min.js','ITCVRQ');
        ITCVRQ('set', 'trk.programId', '273825');
        ITCVRQ('set', 'cvr', {
            value: data.total,
            currency: data.currency,
            language: 'en_EN',
            eventId: '1046475',
            orderReference : data.invoiceNumber,
            comment: '',
            multiple: '',
            checksum: '',
            items: itemsString,
            customerId: '',
            voucherId: discountsNames.toString(),
            location: document.referrer
        });
        ITCVRQ('conversion');
    });
  });
</script>

<!-- favicon icon -->
<link rel="icon" href="/images/logo.png">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="/css/styles.css">

<title>emit</title>
