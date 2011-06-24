[[$headerTpl]]
<div class="bg_main">
	<div class="container row" id="content">
			<div class="col12 last">
				[[*content]]
				[[!GalleryAlbums? &toPlaceholder=`GalleryAlbums` &limit=`25` &albumCoverSort=`rank` &prominentOnly=`0` &rowTpl=`FlexGalAlbumRowTpl` &thumbWidth=`195` &thumbHeight=`140`]]
				[[!Gallery? &checkForRequestTagVar=`1` &toPlaceholder=`Gallery` &useCss=`0` &containerTpl=`FlexGalAlbumTpl` &thumbWidth=`195` &thumbHeight=`140` &thumbTpl=`FlexGalItemThumb` &imageWidth=`800` &imageHeight=`800`]]
				[[!If? &subject=`[[+Gallery]]` &operator=`isempty` &then=`
					[[+GalleryAlbums]]
				` &else=`
					[[+Gallery]]
				`]]

			</div>
	</div>
</div>
[[$footerTpl]]