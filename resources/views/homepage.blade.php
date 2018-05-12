@extends('layouts.app')

@section('content')
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-79781967-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    <div class="homepage">
        <h1>Software Developer.</h1>
        <h1>Tech Enthusiast.</h1>
        <br><br>
	    <h1 class="last">Let's Connect: 
	    	<a target="_blank" href="mailto:jeffrey.devince@gmail.com?Subject=Hi!"><i class="fa fa-envelope"></i></a>
	    	<a target="_blank" href="https://www.linkedin.com/in/jeffrey-devince"><i class="fa fa-linkedin-square text-white"></i></a>
	    </h1>   
    </div>

<style>
    html {
        background: url('/img/homepage_background_optimized.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        min-height: 100%;
    }
    body {
        background-color: transparent;
    }
</style>
@endsection
