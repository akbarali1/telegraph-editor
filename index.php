<!DOCTYPE html>
<html>    
    <title>Telegraph</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="MobileOptimized" content="176">
    <meta name="HandheldFriendly" content="True">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Telegraph">
    <meta property="og:description" content="Telegra.ph is a minimalist publishing tool that allows you to create richly formatted posts and push them to the Web in just a click. Telegraph posts also get beautiful Instant View pages on Telegram.">
    <meta property="og:site_name" content="Telegraph">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Telegraph">
    <meta name="twitter:description" content="Telegra.ph is a minimalist publishing tool that allows you to create richly formatted posts and push them to the Web in just a click. Telegraph posts also get beautiful Instant View pages on Telegram.">
    <link href="./design/quill.core.min.css" rel="stylesheet">
    <link href="./design/core.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="tl_page_wrap">
      <div class="tl_page">
        <main class="tl_article tl_article_editable tl_article_edit title_focused">
          <header class="tl_article_header">
            <h1 dir="auto"></h1>
            <address dir="auto">
              <a rel="author"></a><!--
           --><time datetime=""></time>
            </address>
          </header>
          <article id="_tl_editor" class="tl_article_content ql-container"><div class="ql-editor" contenteditable="true" dir="auto"><h1 data-placeholder="Title" data-label="Title" class="empty"><br></h1><address data-placeholder="Your name" data-label="Author" class="empty"><br></address><p data-placeholder="Your story..." class="empty"><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div id="_tl_link_tooltip" class="tl_link_tooltip"></div><div id="_tl_tooltip" class="tl_tooltip">
            <div class="buttons">
              <span class="button_hover"></span>
              <span class="button_group"><!--
             --><button id="_bold_button"></button><!--
             --><button id="_italic_button"></button><!--
             --><button id="_link_button"></button><!--
           --></span><!--
           --><span class="button_group"><!--
             --><button id="_header_button"></button><!--
             --><button id="_subheader_button"></button><!--
             --><button id="_quote_button"></button><!--
           --></span>
            </div>
            <div class="prompt">
              <span class="close"></span>
              <div class="prompt_input_wrap"><input type="url" class="prompt_input"></div>
            </div>
          </div><div id="_tl_blocks" class="tl_blocks">
            <div class="buttons">
              <button id="_image_button"></button><!--
           --><button id="_embed_button"></button>
            </div>
          </div></article>
          
          <aside class="tl_article_buttons">
            <div class="account account_top"></div>
            <button id="_edit_button" class="button edit_button">Edit</button><!--
         --><button id="_publish_button" class="button publish_button">Publish</button>
            <div class="account account_bottom"></div>
            <div id="_error_msg" class="error_msg"></div>
          </aside>
        </main>
      </div>
    </div>


    <div id="_tl_alerts" class="tl_alerts"></div>
    <script>var T={"apiUrl":"http:\/\/maqolalar.uz/a.json","datetime":0,"pageId":0};(function(){var b=document.querySelector('time');if(b&&T.datetime){var a=new Date(1E3*T.datetime),d='January February March April May June July August September October November December'.split(' ')[a.getMonth()],c=a.getDate();b.innerText=d+' '+(10>c?'0':'')+c+', '+a.getFullYear()}})();</script>
    <script type="text/javascript" src="./design/jquery.min.js"></script>
    <script type="text/javascript" src="./design/jquery.selection.min.js"></script>
    <script type="text/javascript" src="./design/autosize.min.js"></script>
    <script type="text/javascript" src="./design/load-image.all.min.js"></script>
    <script type="text/javascript" src="./design/quill.min.js"></script>
    <script type="text/javascript" src="./design/core.min.js"></script>
        
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
      }
      
			var protocol = window.location.protocol === 'http:' ? 'ws://127.0.0.1:5500/ws' : 'wss://127.0.0.1:5500/ws';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>


</body></html>