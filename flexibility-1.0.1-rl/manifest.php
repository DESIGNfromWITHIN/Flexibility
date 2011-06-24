<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => 'Flexibility - version 1.0-rl

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

5. Enter your MODX Revolution manager ("your_url/manager"): Go to "System" > "System Settings" > Click on "Filter by area" and select "Friendly URL" > For "Use Friendly URL\'s" and "Use Friendly Alias Path" choose "Yes".

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

"Resources" > \'select the page you want\'
"Resources" > \'select the page you want\' > "Template Variables"
"System" > "System Settings" > "Filter by area" > "Site"


-----------------------------------------------------------------------------------------------------------
CONTENT:
-----------------------------------------------------------------------------------------------------------

- Packages: formit, gallery, getresources, if, tinymce, wayfinder
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
- special thanks to: Paul Irish and Divya Manian for all they\'ve done with HTML5Boilerplate
- https://github.com/paulirish/html5-boilerplate for the initial base and idea
- https://github.com/modernizr for MOdernizr
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann for the MODx Boilerplate, http://anselm.novolo.de/


-----------------------------------------------------------------------------------------------------------
BUGS and FEATURE REQUESTS:
-----------------------------------------------------------------------------------------------------------

Please e-mail me at: info@designfromwithin.com',
    'setup-options' => 'flexibility-1.0.1-rl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '2163261cf59a50cf6260e220b4ed9a83',
      'native_key' => 'flexibility',
      'filename' => 'modNamespace/98e887edaa44271b516b7d34b954fdc3.vehicle',
      'namespace' => 'flexibility',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'ba8b68fef08eb3eaed4719f2d4fb339b',
      'native_key' => 'ba8b68fef08eb3eaed4719f2d4fb339b',
      'filename' => 'xPDOTransportVehicle/0811130c4a20baaf9d7be1b523c64116.vehicle',
      'namespace' => 'flexibility',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'fb7fa00a2dd564588ccca68df0534b79',
      'native_key' => 'fb7fa00a2dd564588ccca68df0534b79',
      'filename' => 'xPDOTransportVehicle/110edc32220dbf87b3f4e491c0c28768.vehicle',
      'namespace' => 'flexibility',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '69976e174d17c9a8b8a5dcf6f69fdd1c',
      'native_key' => '69976e174d17c9a8b8a5dcf6f69fdd1c',
      'filename' => 'xPDOTransportVehicle/f0acffe9325fababd1e6ea90e1e715ff.vehicle',
      'namespace' => 'flexibility',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '55306e62036f37d3b7b2c36cc7893018',
      'native_key' => '55306e62036f37d3b7b2c36cc7893018',
      'filename' => 'xPDOTransportVehicle/f8709e82cb5cc3828a8a2aef08c74400.vehicle',
      'namespace' => 'flexibility',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'bf2089ad9d89ec47379e3e332a595597',
      'native_key' => 'bf2089ad9d89ec47379e3e332a595597',
      'filename' => 'xPDOTransportVehicle/28420f32cd0d59c062f3cd6538ff99a5.vehicle',
      'namespace' => 'flexibility',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '14c596247b9893869ca6baae406446d2',
      'native_key' => '14c596247b9893869ca6baae406446d2',
      'filename' => 'xPDOTransportVehicle/1a0b05d5fcf31747444414610215c61d.vehicle',
      'namespace' => 'flexibility',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'd35feff034ec88ba113609e92225ec39',
      'native_key' => 'd35feff034ec88ba113609e92225ec39',
      'filename' => 'xPDOTransportVehicle/1837db0073b9925ea0c8b477b6b83b63.vehicle',
      'namespace' => 'flexibility',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'a72b88b4b31b214e02afcfca1e259de1',
      'native_key' => 1,
      'filename' => 'modResource/42d9186ee3d5fea7e41486e21ebb19f6.vehicle',
      'namespace' => 'flexibility',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '2e816ac7af3d96df0c099e910e3e0b07',
      'native_key' => 2,
      'filename' => 'modResource/eea5d7e4ebb2f173ccf80c59c87e1173.vehicle',
      'namespace' => 'flexibility',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '2e019d329236cb2457d8a5b63b656f37',
      'native_key' => 3,
      'filename' => 'modResource/f8588f964bc979caf954cfb76890ca4a.vehicle',
      'namespace' => 'flexibility',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '1847a89ca89ea435e73a8c6dc230f0ea',
      'native_key' => 4,
      'filename' => 'modResource/fb1a7e47c943cb00fb1732cd0506411b.vehicle',
      'namespace' => 'flexibility',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'f38c7db339b0f01d121c346a68e42b22',
      'native_key' => 5,
      'filename' => 'modResource/ab75cca027655c8eb89b816a00a47e35.vehicle',
      'namespace' => 'flexibility',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '0b2041e60e187bc1aafb855fd0aa2d07',
      'native_key' => 6,
      'filename' => 'modResource/959341caad62265d5fd0b416ca0412b8.vehicle',
      'namespace' => 'flexibility',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '650537ebcd283d783a70bb01808e38dd',
      'native_key' => 1,
      'filename' => 'modCategory/116332993424dcffd7f3209cef3f00d7.vehicle',
      'namespace' => 'flexibility',
    ),
  ),
);