@extends('layouts.app')

@section('content')
<div class="landing-page">
  <main class="Layout_main">

    <section class="Section -center">
      <img class="Logo -large" src="@asset('images/logo.svg')">
    </section>

    <section class="Section -center">
      <h1 class="Title">
        Clean up your inbox
      </h1>

      <p class="Lead">
        Tired of spam and newsletters?<br/>
        Easily unsubscribe from subscription<br/>
        emails with one click.
      </p>

      <a class="FancyButton" href="demo.html" data-toggle="modal" data-target="#myModal">
        Get started now
      </a>
    </section>

    <div class="SkewBox">
      <section class="Section">

        <div class="HowBox -reverse">
          <img alt="Email service logos"
            src="@asset('images/illustration-services.png')"
            srcSet="@asset('images/images/illustration-services@2x.png 2x, images/illustration-services@3x.png 3x')">

          <div class="HowBox_body">
            Sign in securely with your Google email account
          </div>
        </div>

        <div class="HowBox">
          <img alt="List of subscriptions" 
            src="@asset('images/illustration-list.svg')">

          <div class="HowBox_body">
            Instantly get a list of your newsletter subscriptions
          </div>
        </div>

        <div class="HowBox -reverse">
          <img alt="Finger pushes button" 
            src="@asset('images/illustration-click.svg')">

          <div class="HowBox_body">
            Unsubscribe one by one, or all of them, at the tap of a button
          </div>
        </div>

      </section>
    </div>

    <section class="Section -center">
      <h1 class="Title">It's free, safe, and easy</h1>
      <p><a class="FancyButton" href="demo.html">Get started now</a></p>
      <p><a href="#">Learn about our business model</a></p>
    </section>
  </main>
</div>

<div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms of service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Pellentesque rhoncus at mauris a semper. Aliquam erat volutpat. Curabitur pulvinar, mi id consectetur consequat, ipsum diam placerat ipsum, in facilisis dui elit suscipit ante. Quisque vitae diam hendrerit, dapibus lorem ut, vulputate nunc. Nullam dapibus odio ac aliquam vehicula. In vel auctor libero. Morbi nec malesuada diam. Suspendisse eu dui eget libero convallis facilisis at at nisi. Pellentesque consectetur cursus facilisis. Integer nisl sem, viverra in odio at, rhoncus tristique metus. Donec mollis felis dictum auctor euismod. Aliquam erat volutpat. Quisque mattis consectetur lorem. Suspendisse venenatis sapien ac est scelerisque lacinia. Phasellus et neque bibendum, ullamcorper felis sed, tincidunt nisi. Etiam non vestibulum sem, at egestas tellus.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a class="btn button-primary-bg continue" href="http://go.unsubscrub.com/site/start">Continue</a>
      </div>
    </div>
  </div>
</div>
@endsection