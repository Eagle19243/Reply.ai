<html>
    <head>
        <title>Reply</title>
    </head>
    <body>
        Reply.ai testing
        <script type="text/javascript">
            var widgetSettings = {
                channelUuid: "3d92977f-e380-48b6-ab70-20c5cdc68039",
                style: "fixed", // "fixed", "embed" or "fullpage". Open the sample page for all the configuration paramaters
                welcomeMessage : {
                    imageUrl: "https://d2ev753wf7jdl6.cloudfront.net/static/theme-landing-demo/images/reply_logo_blue.gif",
                    text : "Hey! How are you doing?",
                    buttons:[
                        {
                            type :"web_url",
                            title : "Open reply.ai",
                            url: "http://reply.ai"
                        },
                        {
                            type :"postback",
                            title : "Say Hello",
                            payload: "hello"
                        }
                    ]
                },
            };
            window.replySDK = (function(d, s, id) {
                var o = window.replySDK || {};var js,
                fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "https://d1fidecqhnmd5.cloudfront.net/prod/v1.3.1/dist/js/reply-sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
                o.isLoaded=false;o._e = [];o.load = function(f) { o._e.push(f);};
                js.onload = function () { replySDK.init( widgetSettings ); };return o;
            }(document, 'script', 'reply-sdk-js'));
        </script>
    </body>
</html>