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

Adding Template Variable: Now that you have added a site notice in the admin interface, we must add some code to the Page.ss template to allow this notice to be displayed on our website. Add the following code where you would like the notice to be displayed

```
<% with $SiteConfig %>
	<% if $SiteNotice %>
		$SiteNotice - Add this between HTML Heading or Paragraph Tags
	<% end_if %>
<% end_with %>
```

## License
This module is available under the BSD 3-clause

## Additional Information
You can wrap the $SiteNotice between further HTML tags and provide it with some CSS styling to suit your template and look more attractive than some static text in your template

eg.

```
<% with $SiteConfig %>
	<% if $SiteNotice %>
		<div class="site-notice">
			<div class="container">
				<p>$SiteNotice</p>
			</div>
		</div>
	<% end_if %>
<% end_with %>
```


Good Luck and Enjoy!