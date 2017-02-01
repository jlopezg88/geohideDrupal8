# geohideDrupal8
Hello, I'm implementing the geohide migration to Drupal 8 and I've managed to install it. The steps to follow are those:
<ol>
<li>The first thing to do is to change the value of the core field to <strong>8.x</strong> and rename the file as <em><strong>geohide.info.yml</strong></em>
<li>Now we create a file called <em><strong>geohide.routing.yml</strong></em> where different parameters are defined as the path, the permission and of which controller and function makes refence.</li>
<li>Well now I have created another file called <em><strong>help.page.geohide </strong></em>which will refer to the definition of the <strong>hook_help()</strong></li>
<li>
Finally I created a folder called<strong> src</strong>, inside this I created another called <strong>Cotroller</strong> and inside a file called <em><strong>GeohideController.php</strong></em>, in this file it collects the php code of the module and also as I mentioned before the <em><strong>geohide.routing.yml </strong></em>makes reference to this file</li>
</ol>

It still does not work properly but I'm at it. Any help will be welcome.

Greetings,

Jlopezg88.
