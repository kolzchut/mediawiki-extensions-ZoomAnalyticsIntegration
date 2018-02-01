<?php

namespace MediaWiki\WikiRights;

class ZoomAnalyticsIntegrationHooks {

	public static function onSkinHelenaBodyStart( &$skin ) {
		global $wgZoomAnalyticsUrlCustomPart;

		if ( $wgZoomAnalyticsUrlCustomPart === false ) {
			throw new \MWException( '$wgZoomAnalyticsUrlCustomPart was not set.' );
		}

		echo <<<HTML
<!-- Start of Zoom Analytics Code -->
<script type="text/javascript">
var _zaVerSnippet=5,_zaq=_zaq||[]; 
(function() {
  var w=window,d=document;w.__za_api=function(a){_zaq.push(a);if(typeof __ZA!='undefined'&&typeof __ZA.sendActions!='undefined')__ZA.sendActions(a);};
  var e=d.createElement('script');e.type='text/javascript';e.async=true;e.src=('https:'==d.location.protocol?'https://d2xerlamkztbb1.cloudfront.net/':'http://wcdn.zoomanalytics.co/')+'{$wgZoomAnalyticsUrlCustomPart}';
  var ssc=d.getElementsByTagName('script')[0];ssc.parentNode.insertBefore(e,ssc);
})();
</script>
<!-- End of Zoom Analytics Code -->

HTML;
	}

}
