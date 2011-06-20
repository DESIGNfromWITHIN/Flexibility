<div class="bg_footer">
	<div class="container row" id="content">
		<div class="col6">
			[[!getResources? &resources=`[[$settings_page_id]]` &tpl=`chunk_footer_left` &includeTVs=`1` &processTVs=`1` &tvPrefix=``]]
		</div>
		<div class="col3">
			[[!getResources? &resources=`[[$settings_page_id]]` &tpl=`chunk_footer_right` &includeTVs=`1` &processTVs=`1` &tvPrefix=``]]
		</div>
		<div class="col3 last padding_10">
			[[!getResources? &resources=`[[$settings_page_id]]` &tpl=`chunk_footer_contact` &includeTVs=`1` &processTVs=`1` &tvPrefix=``]]
		</div>
	</div>
</div>

<script>
	yepnope([{
		load: '//code.jquery.com/jquery-1.6.min.js',
		complete: function () {
			if (!window.jQuery) {
				yepnope('[[++base_url]]assets/templates/templates/main/js/libs/jquery-1.6.min.js');
			}
		}
	}, {
		load: ['[[++base_url]]assets/templates/templates/main/js/plugins.js', '[[++base_url]]assets/templates/templates/main/js/scripts.js'  ]
	}]);
</script>

<!--[if lt IE 7 ]>
	<script>yepnope('[[++base_url]]assets/templates/templates/main/js/libs/dd_belatedpng.js');</script>
	<script> DD_belatedPNG.fix('img, .png_bg'); </script>
<![endif]-->

</body>
</html>