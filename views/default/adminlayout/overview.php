<h3><?php echo elgg_echo('Welcome'); ?></h3>
<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAAq5vE2u7Ncb5QvFBlzSe1xSqRAjP4C_CsEkIgRj8biW5Bu-1KhQFq3DZ0wQqA9ZeYMn0WNdgDH7aNw"></script>
<script type="text/javascript">
  	google.load("feeds", "1");
    function initialize() {
        var feedControl = new google.feeds.FeedControl();
        feedControl.addFeed("http://blog.elgg.org/?view=rss", "Elgg Blog");
        feedControl.draw(document.getElementById("feedControl"));
      }
      google.setOnLoadCallback(initialize);
</script>
<p>Welcome to the administration area of your Elgg network. This is where you configure your network, set up Twitter and Facebook integration, set default access levels and add/manage users.</p>
<div class="admin_full">
<h3>Quick links</h3>
<?php
	$url = $vars['url'];
?>
<div class="quick_links">
<p>[needs content]</p>
</div>
<div class="quick_links">
<p>[needs content]</p>
</div>
<div class="quick_links">
<p>[needs content]</p>
</div>
<div class="clearfloat"></div>
</div>
<div class="admin_container admin_left">
<h3>A title</h3>
<p>[needs content]</p>
</div>
<div class="admin_container">
<h3>A title</h3>
<p>[needs content]</p>
</div>
<div class="clearfloat"></div>
<div class="admin_full">
<h3>Latest News</h3>
<div id="feedControl"></div>
</div><br /><br />