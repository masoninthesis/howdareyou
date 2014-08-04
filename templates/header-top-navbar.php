<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com/HDY/imgs/Blog-32.png" alt="<?php bloginfo('name'); ?>" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<div class="wrap container">
  <div class="col-sm-10 col-sm-offset-1"><!-- Video -->
	  <div class="row"> 
	    <center>
	      <iframe onClick="ga('send', 'event', 'video', 'play', 'main video');" src="//fast.wistia.net/embed/iframe/5tl43fy1m9?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="668" height="376"></iframe>
	      <script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
	    </center>
    </div>
  </div> <!-- /Video -->
    
  <div class="alert-header col-sm-10 col-sm-offset-1"><!-- Optin -->
      <div class="row">
        <h4 class="optin-h4">Subscribe below and I'll dare you to be great.</h4>
      </div>
	  <div class="row">
	      <div class="top-optin col-sm-offset-4">
	      
	      <!-- Mailchimp -->
			<form class="form-inline" id="before_header" action="http://jackalopemedia.us5.list-manage2.com/subscribe/post?u=cb99d140b386588bfdc019c4e&amp;id=237c1bf3cd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
			<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">I Dare</button>
			
			</form> <!-- /Mailchimp -->
	
	        <!-- AWeber Web Form Generator 3.0 
	        <form id="before_header" method="post" class="form-inline" action="http://www.aweber.com/scripts/addlead.pl"  >
	        <div style="display: none;">
	        <input type="hidden" name="meta_web_form_id" value="2074084490" />
	        <input type="hidden" name="meta_split_id" value="" />
	        <input type="hidden" name="listname" value="foreverjobless" />
	        <input type="hidden" name="redirect" value="http://www.aweber.com/thankyou.htm?m=default" id="redirect_f916c5c4ae42ade190efaef62fd11c16" />
	
	        <input type="hidden" name="meta_adtracking" value="FJ:_Header" />
	        <input type="hidden" name="meta_message" value="1" />
	        <input type="hidden" name="meta_required" value="email" />
	
	        <input type="hidden" name="meta_tooltip" value="" />
	        </div>
	        <!-- <div class="af-element"> 
	        <input class="form-control" id="awf_field-60198198" type="text" name="email" value="" tabindex="500" style="width: 75%;"  />
	        <!-- </div> 
	        <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">I Dare</button>
	        <div class="af-clear"></div>
	        </div>
	        </div>
	        <div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=TAzsLAwcLCycDA==" alt="" /></div>
	        </form>
	        
	        <script language="JavaScript">
	
	        <!--
	        function _submit_form_header(frm){
	          var email = frm.email.value;
	          var valid_email = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	          if( valid_email.test( email ) ){
	            document.getElementById('before_header').style.display = 'none';
	            document.getElementById('after_header').style.display = 'block';
	            return true;
	          } else {
	            alert("Invalid email address");
	          }
	          return false;
	        }
	        //-->
	        </script>
	        <!-- /AWeber Web Form Generator 3.0 -->
	
	      </div>
      </div>
    </div>
  </div>
</div>
<br />
<hr>
