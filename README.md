## Silverstripe Site Notice

## Description
This module allows you to implement a site wide notice on your Silverstripe project

## Author
This module was created by Creative Gorillas (Sajan Sharma)

## Installation
Manual Installation:
- Download Zip File
- Extract Zip File
- Locate folder inside Zip File
- Rename folder to "site-notice" - without quotations
- Place this site-notice folder into your projects root directory
- Run http://yoursiteurl/dev/build?flush=1

Composer Installtion:

=====================================================================
	composer require sajansharmanz/silverstripe-site-notice
=====================================================================

- Run http://yoursiteurl/dev/build?flush=1

## Usage
Once successfully installed we are ready to implement the Site Notice to the website

NOTE: This module should be setup by Developers/Designers as you will initially need access to the Page.ss template to add some code. After this code is added it can be maintained by content editors from the admin interface simply

Add Site Notice to Page:

- Login to the Silverstripe Admin Interface
- Select "Settings" on the left menu
- Select the Site Notice tab
- Add the notice you wish to display
- Click Save (IMPORTANT)

Adding Site Notice to Template:
- Choose an area where you would like to display the Site Notice and add the following line to display it in that area

```
<% include SiteNotice %>
```

## License
This module is available under the BSD 3-clause

## Additional Information
Some pre-styling has been provided with the Site Notice to use out of the box, however, you wrap it in additional html tags and classes to provide it with your own also


Good Luck and Enjoy!