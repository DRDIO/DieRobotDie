<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DRD.IO | Austin, TX Based Web Design and Consulting</title>
            
        <link rel="stylesheet" href="/css/jquery.min.css" />
        <link rel="stylesheet" href="/css/default.css" />

        <script src="/js/jquery.min.js"></script>
        <script>
            $(function() {                 
                $('#body').hide()
                    .animate({d:1}, 500)
                    .fadeIn(1500);

                setInterval(function() {
                    $('#body')
                        .fadeTo(50, 0.5).fadeTo(50, 1)
                        .fadeTo(50, 0.5).fadeTo(50, 1)
                        .animate({d:1}, 500)
                        .fadeTo(50, 0.5).fadeTo(50, 1);                    
                }, 5000);

                $('#contact').hide()
                    .animate({d:1}, 500)
                    .effect('drop', {direction: 'up', mode: 'show'}, 500);          
            });
        </script>
        <!--[if IE]>
        <script src="/js/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <section id="page">
            <section id="body"></section>
            <section id="contact">
                <article>
                    <h2>We Are Web Development &amp; Consulting</h2>
                    <p>
                        Settled in Austin, Texas, we strive to build interactive web experiences
                        utilizing popular APIs from Google, Facebook, Amazon, and Twitter.
                        When not working with clients, we keep our sanity by developing in-house
                        applications that push our skills and are &ndash; most importantly &ndash; 
                        entertaining.
                    </p>
                </article> 
                
                <article>
                    <h2>Give Us a Holler</h2>
                    <p>
                        We have a busy schedule leading up to SXSW 2010, but we are always
                        interested in meeting new clients with great ideas.  Follow us on
                        Twitter at 
                        <a href="http://twitter.com/drdio" title="Visit Twitter!" target="_blank">@DRDio</a> 
                        or drop us a message at 
                        <a href="mailto:sayhello@drd.io" title="Email Us!" target="_blank">sayhello@drd.io</a>
                        and we'll work something up!
                    </p>
                </article>                        
            </section>
        </section>
    </body>
</html>