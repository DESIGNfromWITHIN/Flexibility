Flexibility - version 1.0.2-rl

-----------------------------------------------------------------------------------------------------------
ABOUT
-----------------------------------------------------------------------------------------------------------

"Flexibility" is a HTML5/CSS3/jQuery based frontend MODx Revolution template based on the "MODX Boilerplate".
With this package you will have a fully functional website with a contact form, slider and a image gallery.

"Flexibility" is designed and coded by Menno Pietersen (blog: http://designfromwithin.com - Twitter: ThaClown)

NOTE:
"MODX Boilerplate" is created by Anselm Hannemann, and it is not a direct clone of the original HTML5Boilerplate by Paul Irish.


-----------------------------------------------------------------------------------------------------------
QUICKSTART        PLEASE READ THIS 
-----------------------------------------------------------------------------------------------------------

1. Install MODx Revolution on your website.

2. Backup the "ht.access" file in from root folder to your desktop and remove the "ht.access" file from your website root (your root is probably something like: "your_url/public_html/").

3. Open the "ht.access" file from your desktop (with notepad or any code editor) and save it as ".htaccess".

4. Copy the new "ht.access" file to your website root.

5. Enter your MODX Revolution manager ("your_url/manager"): Go to "System" > "System Settings" > Click on "Filter by area" and select "Friendly URL" > For "Use Friendly URL's" and "Use Friendly Alias Path" choose "Yes".

6. Install the "Flexibility" package: Go to "System" > "Package Management" > "Add New Package" > "Search Locally for Packages" > "Yes".

THAT IS ALL!
(to be sure clear your cache > "Site" > "Clear Cache")


-----------------------------------------------------------------------------------------------------------
ADDING AND CHANGING CONTENT
-----------------------------------------------------------------------------------------------------------

Your MODX website needs three main thing:

1. A Logo.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Logo"

2. An e-mail adress where you want to get mail from the contact form.
- Add this under "Resources" > "Site settings" > "Template Variables" > "E-mail adress"

3. Your adress (remove the default text to keep it empty).
- Add this under "Resources" > "Site settings" > "Template Variables" > "Adress"


And three optional things (only if you want a slider and/or gallery and want custom template colors):

1. Slide content for your website slider.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Slider items"

2. Images and (optional) descriptions for your gallery.
- Add this under "Components" > "Gallery" > "Create Album"


I general you can find all website settings under:

"Resources" > 'select the page you want'
"Resources" > 'select the page you want' > "Template Variables"
"System" > "System Settings" > "Filter by area" > "Site"


-----------------------------------------------------------------------------------------------------------
CONTENT:
-----------------------------------------------------------------------------------------------------------

- Packages: FlexibilitySubPackages (containing: bloggingessentials-1.0-pl, formit-1.7.0-pl, gallery-1.2.1-pl, getresources-1.3.0-pl, if-1.1-pl, login-1.6.4-pl, migx-1.1.0-rc1, tinymce-4.3.0-rc2, wayfinder-2.3.1-pl)
- Templates: Basic page template, Contact page template, Gallery page template, Homepage template, Page settings template
- Template Variables: tv.email_adress, tv.logo, tv_sidebar, tv_slider, tv_tagline, tv_tagline_link, tv_taline_link_text, tv_tagline_option
- Cunks: chunk_contact_form, chunk_email_adress, email_adress_tpl, GalAlbumRowTpl, GalItemThumb, GalleryAlbumTpl, chunk_email_form, logo_tpl, settings_page_id, thank_you_page_id
- Directories: [base_path}/assets
- HTML5 Boilerplate HTML Body
- jQuery 1.6
- basic CSS with reset
- .htaccess File (MODX + Boilerplate)
- favicon + apple touch icons
- Modernizr with HTML5Shim + Modernizr.load/yepnope.js (JS-Loadhelper)
- A Simpler Grid CSS


-----------------------------------------------------------------------------------------------------------
UPDATE instructions:
-----------------------------------------------------------------------------------------------------------

You can update the package via package installer, download the new version and place it in:
[base_path}/core/packages/
Update the package under "System" > "Package Managment"


-----------------------------------------------------------------------------------------------------------
IMPORTANT NOTICES FOR DEVELOPMENT:
-----------------------------------------------------------------------------------------------------------

- yepnope.js always executes things in the order they are listed. This is very important to know because it can hurt the speed of your website critically!
- If you need more than basic HTML5 support enabling with modernizr please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- for how-to use the modernizr please read this: http://blogs.sitepoint.com/2011/03/08/regressive-enhancement-with-modernizr-and-yepnope/
+ added monderizr blog entry
- If you need more than basic HTML5 support enabling with modernizer please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- If you want to add CSS3 behavior to IE<9 you can use the PIE.htc. You just have to add behavior: url(path/to/PIE.htc); to your css properties. See here for more info: http://css3pie.com/documentation/getting-started/
- I provided support for different devices with @media-queries. Please consider to either use all that stylesheet links in "site_header.html" or remove them to avoid dead links!


-----------------------------------------------------------------------------------------------------------
CREDITS:
-----------------------------------------------------------------------------------------------------------

ALL supporters and contributors of the great HTML5Boilerplate:
- http://html5boilerplate.com/
- special thanks to: Paul Irish and Divya Manian for all they've done with HTML5Boilerplate
- https://github.com/paulirish/html5-boilerplate for the initial base and idea
- https://github.com/modernizr for MOdernizr
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann for the MODx Boilerplate, http://anselm.novolo.de/


-----------------------------------------------------------------------------------------------------------
BUGS and FEATURE REQUESTS:
-----------------------------------------------------------------------------------------------------------

Please e-mail me at: info@designfromwithin.com