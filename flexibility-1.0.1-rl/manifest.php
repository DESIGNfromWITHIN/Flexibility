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
      'guid' => '3ee3ab49e1aae29064269815062648a7',
      'native_key' => 'flexibility',
      'filename' => 'modNamespace/31b3895d7da657841093a6ef50862eed.vehicle',
      'namespace' => 'flexibility',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '33e93f924aedc55c0841cf323f8cd1a6',
      'native_key' => '33e93f924aedc55c0841cf323f8cd1a6',
      'filename' => 'xPDOTransportVehicle/7004ce8379db742254b21d2b516bc403.vehicle',
      'namespace' => 'flexibility',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '6e6019c3061faabfaa5150625222fddc',
      'native_key' => '6e6019c3061faabfaa5150625222fddc',
      'filename' => 'xPDOTransportVehicle/1ee884095b464ef23e77fabc25162114.vehicle',
      'namespace' => 'flexibility',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '98296abc848b555846a2e0fddcde8a69',
      'native_key' => '98296abc848b555846a2e0fddcde8a69',
      'filename' => 'xPDOTransportVehicle/eea11bf7a58b9b68c169a28848724fe8.vehicle',
      'namespace' => 'flexibility',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '96bd79bd31db3e5322151dcb17bb8a9c',
      'native_key' => '96bd79bd31db3e5322151dcb17bb8a9c',
      'filename' => 'xPDOTransportVehicle/e8208624fb4281e15a2fdd2acb7f6531.vehicle',
      'namespace' => 'flexibility',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '2776c94568b78915ebcdded829fe7da6',
      'native_key' => '2776c94568b78915ebcdded829fe7da6',
      'filename' => 'xPDOTransportVehicle/5cc6b1a81fc28298079eff54a0f2432c.vehicle',
      'namespace' => 'flexibility',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'a0a4a121d3a53625584b9a439556cd76',
      'native_key' => 'a0a4a121d3a53625584b9a439556cd76',
      'filename' => 'xPDOTransportVehicle/21ee2b15b14f998c35743c3a0447b38f.vehicle',
      'namespace' => 'flexibility',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '5b2b8204cbcc98ef8370207cc041142c',
      'native_key' => '5b2b8204cbcc98ef8370207cc041142c',
      'filename' => 'xPDOTransportVehicle/fb9d27ce17cd44adf7ed007fb67c1e67.vehicle',
      'namespace' => 'flexibility',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '26bc5b56f7dfb8c53e2a030c5ff3d044',
      'native_key' => 1,
      'filename' => 'modResource/ae2021524049c51815f4e358e22ffbf7.vehicle',
      'namespace' => 'flexibility',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'b59501b94f39b4db5eda90b400b03e22',
      'native_key' => 2,
      'filename' => 'modResource/8e0619b11e9b00c924c0043b30e6621f.vehicle',
      'namespace' => 'flexibility',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '2c0ed0d04a6f7463c0612e6d6198cac8',
      'native_key' => 3,
      'filename' => 'modResource/75dd05ee2c32c025d374f67650fa7705.vehicle',
      'namespace' => 'flexibility',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '681f06d5cbf31f18173d9d4ae41cff1b',
      'native_key' => 4,
      'filename' => 'modResource/af095564028cdd2be5fe265a12902ad5.vehicle',
      'namespace' => 'flexibility',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '05e271a595dc24da1b0f08b54e1bb5ee',
      'native_key' => 5,
      'filename' => 'modResource/c3f5efac2de91fa13e955b8a8094671d.vehicle',
      'namespace' => 'flexibility',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'e7cbcf208c19fafaa9285a994187aeb1',
      'native_key' => 6,
      'filename' => 'modResource/2d6328d9e036047caf5d03606fdef2fb.vehicle',
      'namespace' => 'flexibility',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ec6eb00d63fedd494e6caa220bb2030f',
      'native_key' => 1,
      'filename' => 'modCategory/8612e60f13533efdc35234a212d98e4c.vehicle',
      'namespace' => 'flexibility',
    ),
  ),
);