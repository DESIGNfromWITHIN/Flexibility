[[$headerTpl]]
<div class="bg_main">
	<div class="container row" id="content">
			<div class="col12 last">
				[[*content]]
				[[!GalleryAlbums? &toPlaceholder=`GalleryAlbums` &limit=`0` &albumCoverSort=`rank` &prominentOnly=`0` &rowTpl=`DemoGalAlbumRowTpl` &thumbWidth=`195` &thumbHeight=`140`]]
				[[!Gallery? &checkForRequestTagVar=`1` &toPlaceholder=`Gallery` &useCss=`0` &containerTpl=`DemoGalleryAlbumTpl` &thumbWidth=`195` &thumbHeight=`140` &thumbTpl=`DemoGalItemThumb` &imageWidth=`800` &imageHeight=`800`]]
				[[!If? &subject=`[[+Gallery]]` &operator=`isempty` &then=`
					[[+GalleryAlbums]]
				` &else=`
					[[+Gallery]]
				`]]
			</div>
	</div>
</div>
[[$footerTpl]]