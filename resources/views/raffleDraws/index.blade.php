<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>Landing Page &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

    <!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

    <!--<![endif]-->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" href="/marketing-old-ie.css">-->
    {!! HTML::style("assets/css/style.css") !!}
    {!! HTML::style("assets/css/marketing-old-ie.css") !!}
    {!! HTML::style("assets/css/marketing.css") !!}

    <![endif]-->
    <!--[if gt IE 8]><!-->
    {{--<link rel="stylesheet" href="css/layouts/marketing.css">--}}
    <!--<![endif]-->

</head>
<body>


<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Your Site</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item  pure-menu-selected">{!! link_to_route('raffle-draws.index','Home', [],
                ['class' => 'pure-menu-link'])  !!}</li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
            <li class="pure-menu-item">{!! link_to_route('register','Registration', [], ['class' => 'pure-menu-link'])
            !!}</li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">

        <h1 class="splash-head">
        @include('partials/template')
        </h1>
        <p class="splash-subhead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
        <p>
            <a href="#" class="pure-button pure-button-primary draw">Let's Draw !</a>
        </p>
    </div>
</div>





<script src="//code.jquery.com/jquery.js"></script>
<script src="http://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.0.beta.6.js"></script>
{!! HTML::script("assets/js/prefixfree.min.js") !!}

<script>

$(document).on('click','.draw',function(e)
    { e.preventDefault();
        $.ajax({
            url: "{{ URL::route('raffle-draws.draw') }}",
            type: "GET",
            success: function(user)
            { if (user.status)
                { console.log(user);
                  show(user);
                }
            },
            error: function(xhr, textStatus, thrownError)
                {
                    alert('Something went to wrong.Please Try again later...');
                }
            });
        });
    function show(user)
       {
       /* var context = [
                    {
                        author: { first: 'Jeffrey', last: 'Way', age: 27 },
                        tweet: '30 Days to Learn jQuery Rocks',
                        quote: 'Never ever, ever, ever give up.'
                    },
                    {
                        author: { first: 'John', last: 'Doe', age: 45 },
                        tweet: '<strong>30 Days</strong> to Learn jQuery Rocks',
                    }
                ],*/
                template = Handlebars.compile( $('#template').html() );

      /*  Handlebars.registerHelper('fullName', function( author ) {
            return author.first + ' ' + author.last + ' - ' + author.age;
        });*/

        $('div.splash-container').append( template(user.user) );
    }
</script>

</body>
</html>
