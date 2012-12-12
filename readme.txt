Flexibility - version 3.0.5-rc
http://flexibilitymodx.com/

This package is meant to be used once to quick-start MODX website projects. It will install a lot of things and provide a nice responsive MODX website based on the Foundation framework from ZURB.

-----------------------------------------------------------------------------------------------------------
!!! ATTENTION !!!
-----------------------------------------------------------------------------------------------------------

- The Slider items Template Variable (called 'multiItemsGrid') will not work after install, you need to open the 'multiItemsGrid' Template Variable, and re-save it.
Simply go to: 'Elements' tree > 'Template Variables' > 'Flexibility' and open the 'multiItemsGrid' Template Varibale.
Edit any field (like the name, remove the final 'e' and retype it) and save the Template Varibale. Now the Slider Items option will work as expected.
- If you change or edit any Chunk, Snippet, Template Variable or Plugin that was included in the Flexibility package, please rename it! Or it will be overwritten on any future updates.
- Any needed packages (like Wayfinder) will be installed automatically by the Flexibility package. You will be able to update and edit any sub-packages at a later date.

-----------------------------------------------------------------------------------------------------------
ABOUT
-----------------------------------------------------------------------------------------------------------

"Flexibility" is a HTML5/CSS3/jQuery based frontend MODx Revolution template based on the "Foundation 3.2" (http://foundation.zurb.com/).
With this package you will have a fully functional website with a dropdown nav, contact form, slider and a image gallery.

"Flexibility" is designed and coded by Menno Pietersen
Portfolio & blog: DESIGNfromWITHIN http://designfromwithin.com
Twitter: MennoPP https://twitter.com/MennoPP

-----------------------------------------------------------------------------------------------------------
QUICKSTART
-----------------------------------------------------------------------------------------------------------

1. Download and install Flexibility from the MODX package manager.

-----------------------------------------------------------------------------------------------------------
MANUAL INSTALL
-----------------------------------------------------------------------------------------------------------

1. Install MODx Revolution on your website.

2. download the package and upload the "flexibility-3.0.5-rc.transport.zip" file to "<your_modx_install>/core/packages/" (You only need the transport.zip file, do not unzip it yourself)

3. Install the "Flexibility" package: Go to "System" > "Package Management" > "Add New Package" > "Search Locally for Packages" > "Yes".

(to be sure clear your cache > "Site" > "Clear Cache")

-----------------------------------------------------------------------------------------------------------
ADDING AND CHANGING CONTENT
-----------------------------------------------------------------------------------------------------------

Your MODX website needs three main thing:

1. A Logo.
- Add this under "Resources" > "Site settings" > "Template Variables" tab > "Logo"

2. E-mail adress for the contact form.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Email adress for the contactform"

3. Content for the footer.
- Select how many footer boxes you want under "Resources" > "Site settings" > "Template Variables" > "Footer boxes"
- Add content for each footer box under "Resources" > "Site settings" > "Template Variables" > "Footer-content box 1", "Footer-content box 2", "Footer-content box 3" and "Footer-content box 4"

4. (optional) Slides/content for the slider.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Slider items"
- Activate the slider on any page under: "Template Variables".

5. Other page content is added the normal way on each resource, see the "Template Variables" tab on each resource for extra options. 

-----------------------------------------------------------------------------------------------------------
UPDATE instructions:
-----------------------------------------------------------------------------------------------------------

- All sub-packages (like Wayfinder) are installed by Flexibility and you will be able to remove/update each sub-package under "System" > "Package Management".
- You can update the package via package installer, Flexibility will not override excisiting Resources.

-----------------------------------------------------------------------------------------------------------
CREDITS:
-----------------------------------------------------------------------------------------------------------

ALL supporters and contributors:
- http://foundation.zurb.com/
- http://html5boilerplate.com/ (not used but got me started....)
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann for the MODx Boilerplate, http://anselm.novolo.de/
- The MODX community for all the great tips and support!

-----------------------------------------------------------------------------------------------------------
BUGS and FEATURE REQUESTS:
-----------------------------------------------------------------------------------------------------------

Please post on GitHub (https://github.com/DESIGNfromWITHIN/Flexibility) or e-mail me at: info@designfromwithin.com