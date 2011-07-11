[[$headerTpl]]
<div class="bg_main">
	[[!If? &subject=`[[*tv_sidebar]]` &operator=`isnotempty` &then=`
		<div class="container row" id="content">
			<div class="col8 padding_20_10">
				[[*content]]
			</div>
			<div class="col4 padding_20_10 last">
				[[*tv_sidebar]]
			</div>
		</div>
	`&else=`
		<div class="container row padding_20_10" id="content">
			[[*content]]
		</div>
	`]]
</div>
[[$footerTpl]]