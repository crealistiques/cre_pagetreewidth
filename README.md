# Typo3 extension "cre_pagetreewidth"
Flexible page tree width in Typo3 8 by user specific setting.


## Installation ##

Just use the following command in your Typo3 document root to download the extension from Github. 

```
git clone "https://github.com/crealistiques/cre_pagetreewidth" typo3conf/ext/cre_pagetreewidth
```

Don't forget to install the extension in the Typo3 Extension Manager after fetching it.


## Usage ##

The extension adds a new configuration field to the Typo3 User Settings dialog. In order to set a custom user specific width for the page tree, please go to the user settings tab "Edit and Advanced functions" and set your pixel based width in the field "Width of the page tree section". Save your changes and reload the backend to let the new setting take effect.

> Please note: The width setting only affect the width of the page tree section on larger screens greater than 991px.
