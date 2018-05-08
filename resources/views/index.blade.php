@extends('layouts.app')

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

      <a class="FancyButton" href="demo.html">
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