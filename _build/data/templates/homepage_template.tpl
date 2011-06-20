[[$headerTpl]]
<div class="bg_main">
	<div class="container row" id="content">
		[[!If? &subject=`[[*tv_sidebar]]` &operator=`isnotempty` &then=`
			<div class="col6">
				[[*content]]
			</div>
			<div class="col6 last">
				[[*tv_sidebar]]
			</div>
		`&else=`
			<div class="col12 last">
				[[*content]]
			</div>
		`]]
	</div>
</div>
[[$footerTpl]]