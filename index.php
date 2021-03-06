<!doctype html>
<html>
<head>
    <title>{block:PostTitle}{PostTitle} - {/block:PostTitle}{Title}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content='IE=edge' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="shortcut icon" href="{Favicon}">
    <link rel="apple-touch-icon-precomposed" href="{PortraitURL-128}">
    <link rel="apple-touch-icon" sizes="57x57" href="{PortraitURL-64}">
    <link rel="apple-touch-icon" sizes="60x60" href="{PortraitURL-64}">
    <link rel="apple-touch-icon" sizes="72x72" href="{PortraitURL-64}">
    <link rel="apple-touch-icon" sizes="76x76" href="{PortraitURL-96}">
    <link rel="apple-touch-icon" sizes="114x114" href="{PortraitURL-128}">
    <link rel="apple-touch-icon" sizes="120x120" href="{PortraitURL-128}">
    <link rel="apple-touch-icon" sizes="144x144" href="{PortraitURL-128}">
    <link rel="apple-touch-icon" sizes="152x152" href="{PortraitURL-128}">
    <link rel="apple-touch-icon" sizes="180x180" href="{PortraitURL-128}">
    <link rel="icon" type="image/png" href="{PortraitURL-30}" sizes="32x32">
    <link rel="icon" type="image/png" href="{PortraitURL-128}" sizes="192x192">
    <link rel="icon" type="image/png" href="{PortraitURL-96}" sizes="96x96">
    <link rel="icon" type="image/png" href="{PortraitURL-16}" sizes="16x16">
    <link rel="alternate" type="application/rss+xml" href="{RSS}">

    {block:Description}
    <meta name="description" content="{MetaDescription}" />
    {/block:Description}

    <meta name="text:Google analytics ID" content="UA-127804140-1">
    <meta name="text:Disqus Shortname" content="aicoutodasilva"/>

    <meta name="if:Show Article Footer" content="1">
    <meta name="if:Show Header Image" content="0">
    <meta name="if:Show tags" content="1">
    <meta name="if:Show Navigation" content="1">
    <style media="screen">
    /*Desktop*/
    body{
        color:#333;
        font-family:sans;
        font-size:1em;
    }
    .avatar{
        border-radius: 100%;
    }
    .conteudo{
        padding:1em;
    }
    .conteudo iframe{
        display: block;
        max-height:281px;
        margin:0 auto;
        max-width: 100%;
        width:500px;
    }
    .conteudo .data,.conteudo .tags{
        margin:1em 0;
    }    
    .conteudo p{
        padding-bottom:0.25em;
    }
    .conteudo .tags a{
        text-transform: capitalize;
    }
    small{
        color:gray;
    }
    /*Mobile*/
    @media all and (max-width: 799px) {
        h1,.data,.tags{
            text-align:center;
        }
        td {
            display:inline-block;
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <!--https://github.com/hugurp/tumblr-boilerplate-->
    <!--https://github.com/topics/tumblr-theme?o=desc&s=stars-->
    <table width="100%" border="0">
        <tr>
            <td colspan="3" align="center">
                <a href="/" title="AI">
                    <img class="avatar" alt="Anderson Ismael" src="{PortraitURL-128}" width="128" height="128">
                </a><br>
                <b>{Description}</b><br>
                <small>{Title}</small>
            </td>
        </tr>
        <tr>
            <td width="25%">
            </td>
            <td>
                <div class="conteudo">
                {block:Posts}

                {block:Text}

                {block:IfShowTags}
                {block:HasTags}
                <div class="tags">
                    <small>
                        {block:Tags}
                        <a href="{TagURL}" title="{lang:Posts tagged Tag}">{Tag}</a>&nbsp;
                        {/block:Tags}
                    </small>
                </div>
                {/block:HasTags}
                {/block:IfShowTags}

                {block:Title}
                <h1><a href="{Permalink}">{Title}</a></h1>
                {/block:Title}

                {block:Date}
                <div class="data">
                    <small>
                        {DayOfMonth} de {Month} de {Year}
                    </small>
                    <br>
                </div>
                {/block:Date}

                {Body}

                {/block:Text}

                {block:Photo}

                {block:IfShowTags}
                {block:HasTags}
                <div class="tags">
                    <small>
                        {block:Tags}
                        <a href="{TagURL}" title="{lang:Posts tagged Tag}">{Tag}</a>&nbsp;
                        {/block:Tags}
                    </small>
                </div>
                {/block:HasTags}
                {/block:IfShowTags}

                {block:Date}
                <div class="data">
                    <small>
                        {DayOfMonth} de {Month} de {Year}
                    </small>
                    <br>
                </div>
                {/block:Date}

                <div style="text-align:center;">
                    <a href="{Permalink}">
                        <img src="{PhotoURL-HighRes}" alt="{PhotoAlt}"/>
                    </a>
                    {block:Caption}
                    <p style="text-align:left;">
                        {Caption}
                    </p>
                    {/block:Caption}
                </div>
                {/block:Photo}

                {block:Video}
                {block:IfShowTags}
                {block:HasTags}
                <div class="tags">
                    <small>
                        {block:Tags}
                        <a href="{TagURL}" title="{lang:Posts tagged Tag}">{Tag}</a>&nbsp;
                        {/block:Tags}
                    </small>
                </div>
                {/block:HasTags}
                {/block:IfShowTags}

                {block:Date}
                <div class="data">
                    <small>
                        {DayOfMonth} de {Month} de {Year}
                    </small>
                    <br>
                </div>
                {/block:Date}

                {Video-500}
                {block:Caption}<br>
                {Caption}
                {/block:Caption}
                {/block:Video}

                {block:HomePage}
                <hr>
                {/block:HomePage}

                {/block:Posts}

                {block:IndexPage}
                <table width="100%" border="0">
                    <tr>
                        <td width="50%" align="left">
                            {block:PreviousPage}
                            <a href="{PreviousPage}">&#171; Anterior</a>
                            {/block:PreviousPage}
                        </td>
                        <td width="50%" align="right">
                            {block:NextPage}
                            <a href="{NextPage}">Próximo &#187;</a>
                            {/block:NextPage}
                        </td>
                    </tr>
                </table>
                {/block:IndexPage}

                {block:PermalinkPage}
                {block:PermalinkPagination}
                <table width="100%" border="0">
                    <tr>
                        <td width="50%" align="left">
                            {block:NextPost}
                            <a href="{NextPost}">&#171; Anterior</a>
                            {/block:NextPost}
                        </td>
                        <td width="50%" align="right">
                            {block:PreviousPost}
                            <a href="{PreviousPost}">Próximo &#187;</a>
                            {/block:PreviousPost}
                        </td>
                    </div>
                </tr>
            </table>
            {/block:PermalinkPagination}
            {/block:PermalinkPage}


            {block:PermalinkPage}
            {block:IfDisqusShortname}
            <div id="disqus_thread"></div>
            {/block:IfDisqusShortname}
            {/block:PermalinkPage}

            {block:IfGoogleAnalyticsID}
            <script type="text/javascript">var gaJsHost=(("https:"==document.location.protocol)?"https://ssl.":"http://www.");document.write(unescape("%3Cscript src='"+gaJsHost+"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try{var pageTracker=_gat._getTracker("{text:Google Analytics ID}");pageTracker._trackPageview()}catch(err){}</script>
            {block:IfGoogleAnalyticsID}

            {block:IfDisqusShortname}
            <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = '{text:Disqus Shortname}'; // Required - Replace <example> with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
            </script>
            {/block:IfDisqusShortname}
        </div><!--conteudo-->
        </td>
        <td width="25%">
        </td>
    </tr>
</table>
</body>
</html>
