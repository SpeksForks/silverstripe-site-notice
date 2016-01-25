<% require css("site-notice/css/styles.css") %>

<% with $SiteConfig %>
	<% if $SiteNotice %>
		<div class="site-notice">
			<p>$SiteNotice</p>
		</div>
	<% end_if %>
<% end_with %>