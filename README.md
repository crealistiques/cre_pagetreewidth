# Typo3 extension "cre_pagetreewidth"
Flexible page/filelist tree width in Typo3 8 by user specific setting.


## Installation ##

Just use the following command in your Typo3 document root to download the extension from Github. 

```
git clone "https://github.com/crealistiques/cre_pagetreewidth" typo3conf/ext/cre_pagetreewidth
```

Don't forget to install the extension in the Typo3 Extension Manager after fetching it.


## Usage ##

The extension adds two new configuration fields to the Typo3 User Settings dialog. Both options are considered to change the standard width and sizing of the page and filelist tree.  

### Page / Filelist tree ###

In order to set a custom user specific width for the page/filelist tree section of the Typo3 backend, 
please go to the user settings tab "Edit and Advanced functions" and set your pixel based width in the field 
**"Width of the page/filelist tree section"**. Save your changes and reload the backend to let the new setting take effect.

> Please note: This setting has only an effect on larger screens greater than 991px.

### Link / File Browser dialog window ###
The second option in the user settings, called **"Width of page/filelist tree should be flexible in link and file browser dialogs"**, 
if activated, makes the width of the page/filelist tree section in modal and popup dialog windows more flexible. Within certain constraints 
the width now adapts to the tree content while preventing of ever getting wider than 66% of the width of the dialog. In combination with 
User TSConfig option "popupWindowSize" you could fully benefit from this option by setting a larger popup screen size – 
Typo3 default is 800x600 which might be too small on large screens.
 
```
options.popupWindowSize = 1200x900
```
or even e.g.
```
options.popupWindowSize = 1600x1200
```

depending on the screen size you are blessed with.
