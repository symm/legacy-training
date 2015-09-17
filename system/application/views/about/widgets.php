<?php 
menu_pagetitle('Widgets');
?>
<h1 class="icon-about">Widgets</h1>
<div class="box">
    <p>
    The JavaScript widgets have been created to make it easier to pull relevant
    information from our site into yours.  The data on joind.in belongs to the
    community and we hope this makes it simple to use it as you wish!
    </p>

    <h3>About the Widgets</h3>

    <p>There's a few widgets to choose from, and we hope you'll also add your 
    own and share (and maybe clean up our suboptimal javascript!).</p>

    <p><b>NOTE:</b> Each widget relies on jQuery, so if your site doesn't
    already include this, you'll need the following line in your &lt;head&gt;
    tag:</p>

    <div style="padding:3px;border:1px solid #000000;background-color:#F8F8F8">
<pre>
<?php echo htmlentities('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" 
type="text/javascript"></script>'); ?>
</pre>
    </div><br />

    <h4>The Talk Widget</h4>

    We've started very simple, and the widgets display the current rating and
    number of comments for a talk.  Here's an example:

<script src="//joind.in/widget/widget.php"></script>
<script>
    joindin.draw(3214);
</script><br clear="both"/>

    <p>It simply shows how many comments there are in total, the current overall
    rating, and links to the site for people to see the comments or join in.</p>

    <p>Put the following into your code, with [talk-id] replaced by the talk
    whose data you want to show:</p>

    <div style="padding:3px;border:1px solid #000000;background-color:#F8F8F8">
<pre>
<?php echo htmlentities('<script src="//joind.in/widget/widget.php"></script>
<script>
    joindin.draw([talk-id]);
</script>'); ?>
</pre>
    </div><br />
    <p>The above will put the widget exactly where you put your script tag, but
    for more control you can also have it replace a named div, like this:</p>

    <div style="padding:3px;border:1px solid #000000;background-color:#F8F8F8">
<pre>
<?php echo htmlentities('<div id="placeholder"></div>
        <script>
            joindin.draw(3214, "placeholder");
        </script>'); ?>
</pre>
    </div>
    <br />

    <h4>The Speaker Widget</h4>

    <p>The speaker widget works much like the above, but shows a speaker's average 
    rating with a link to their page on the joind.in website:</p>

<div>
    <script src="//joind.in/widget/widget_speaker.php"></script>
    <script>
        joindin_speaker.draw(1);
    </script>
</div><br clear="both"/>

    <p>To use the code, just add the following into the page where you want it:</p>

    <div style="padding:3px;border:1px solid #000000;background-color:#F8F8F8">
<pre>
<?php echo htmlentities('<script src="//joind.in/widget/widget_speaker.php"></script>
<script>
    joindin_speaker.draw(1);
</script>'); ?>
</pre>
    </div>
    <br />

    <p>This widget also supports placing in a named div (see previous widget)</p>

    <h3>How It Works</h3>

    <p>The best explanation is for you to read the JavaScript generated by the
    /widget/widgets.php file!  Basically, it is possible to call the v2 API
    in a JSONP manner; request a format of JSON and send a <b>callback</b>
    parameter along with your request, and you will get a response which is JSON
    wrapped in a callback that your client can use cross-domain.</p>
    
</div>
