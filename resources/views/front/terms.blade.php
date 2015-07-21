@extends('_layouts.front')

@section('body')
<div class="page-hero">
   <div class="container">
        <div class="page-hero__logo-wrapper">
            <object type="image/svg+xml" data="/assets/images/logo.svg" class="page-hero__logo">
                <img src="/assets/images/logo.png" alt="">
            </object>
        </div>

        <h1 class="page-hero__title">Terms &amp; Conditions</h1>
    </div>
</div>

<div class="container">
    <p>Thanks for choosing to use Paddle.  Paddle is a tool that will convert your Git source control to SVN so that all SVN users can benefit from your code with the minimum of fuss.</p>
    <p>When we refer to us or we, we are referring to Big Bite Creative Limited, being the company that created and administers Paddle.  Our registered number is 07642287 and our registered office is at Boho One, Bridge Street West, Middlesbrough, TS2 1AE, England.  When we refer to you, it’s you the user of Paddle, or your employer on whose behalf you are using Paddle.</p>
    <p>In order to use Paddle, you’ll need to accept these Terms &amp; Conditions (which we’ll refer to as “the Terms”) and you’ll do that by checking the unchecked box during the sign-up process.  In so doing, you’re also accepting the terms of our <a href="{{ route('get::front.privacy') }}">Privacy Policy</a>, so it would be a good idea to check that out too.  These Terms will then regulate the relationship between us from then on, covering each and every task you carry out using Paddle.  We may change these Terms from time to time (for example, if we offer premium services around Paddle) and if so, we’ll let you know what we’ve changed and the date from which the new Terms will apply.  If you choose to keep using Paddle on or after the date upon which the new Terms apply, your use will be covered by the new version of the Terms.  If you don’t like the new Terms, that’s fine - just don’t make any further use of Paddle and all will be well.  </p>
    <p>Bear in mind that although we’re giving you permission to use Paddle, it’s a service rather than software.  There’s nothing to download and use natively on your hardware.  You’re just providing us with some information that we use to carry out a fiddly task for you.  Speaking of which, let’s look at what it is we’re asking for from you.  When you sign up, you are providing us with some basic details about yourself that we can use to communicate with you about your use of Paddle - there’s more about this in our <a href="{{ route('get::front.privacy') }}">Privacy Policy</a>.  </p>
    <p>To enable Paddle to carry out the task at hand, we will need your SVN login details and we will store your password securely (please contact us if you want to know what standards we adhere to).  We will also store your github login token.  Those things we will keep as long as you maintain your registration with us.</p>
    <p>Once Paddle has completed its task, both GitHub and SVN repositories are removed from our server.  Paddle won’t store any code beyond the execution of the task but of course, while it is in our hands, we confirm that we will treat it as confidential to you and we’ll store it securely.</p>
    <p>Paddle is supplied to you on an entirely “as is” basis.  We make no representations and give no warranties about Paddle’s reliability or availability.  We promise to try in good faith to make sure that it operates effectively and correctly but we do not guarantee that it will.  Whilst we are making it available free of charge with no additional revenue model, we can’t afford to provide the levels of service that you may expect from a commercial solution.  But if something does go wrong you can always email us at hello@bigbitecreative.com and we’ll look into it.</p>
    <p>You agree that we won’t ever be liable to you for any loss of data, opportunity, profits, goodwill or any other form of indirect, special or consequential loss of damage.  We will never be liable for anything that goes wrong the cause of which is beyond our reasonable control (stuff like hurricanes, terrorist attacks, alien invasions and what-not).  In the event that we breach these terms or are liable to you in some other way (other than our promise to look after you in the event of an allegation that Paddle infringes somebody else’s rights), our liability to you will be limited to the sum of £100.  We know that doesn’t sound a lot, but it’s still infinity times what you’re paying us to use Paddle, that being nothing.</p>
    <p>We know that those last two paragraphs sound drastic but on the other hand, hey, we’re not charging you anything to use Paddle.  Even if we do decide to charge at some later date, or we offer additional services around it, it will always be up to you to decide that you want to purchase those services on whatever terms and conditions apply at that time.  Also, although we can’t see any way that it could happen, in the event that our negligence (or the negligence of anybody acting on our behalf) gives rise to death or personal injury or if you suffer harm due to our fraud, nothing in these terms could be interpreted so as to limit or exclude our liability.  Not even anything in the previous two paragraphs.</p>
    <p>We created Paddle and we own all the intellectual property rights in it.  We promise that if anybody ever comes along and threatens you or sues you as a result of your use of Paddle (as distinct to the code Paddle handles for you), we’ll see you right as long as you give us control on your behalf of the dispute and your defence to the allegations made against you.</p>
    <p>It’s unlikely but it is just conceivable that in the time that Paddle is handling your code, we could receive a grumpy letter from a person (or worse, their lawyer) claiming that your code infringes their intellectual property rights or is unlawful for some other reason.  If that happens, once we are on notice, we could be liable ourselves so should that situation arise, we may, should we so choose, suspend the task at hand or even terminate your registration.  For that reason, you promise that the code Paddle handles for you won’t infringe the rights of anybody else nor will it be unlawful for any reason and that if anybody does threaten action (or take action) against us because of any alleged infringement represented by your code (or because it is, or is alleged to be, illegal or unlawful in any other way), you will see us right in full - and that will include paying any legal fees (which could be weighty) we incur as a result.</p>
    <p>You can terminate your registration to use Paddle at any time - you don’t need to give us a reason.  Just follow the instructions or, if you can’t find them, fire an email over to hello@bigbitecreative.com.  Likewise, we can terminate or suspend your registration at any time for any reason, even if Paddle is mid-task.  In the event that your registration is terminated, all your details will be removed from our servers save for your name and email address (and any other information we have about you that can help us locate you), which you confirm to be accurate and which we will only keep in the event that the termination has been caused by your use of Paddle for illicit, illegal or otherwise unlawful purposes or any purposes for which it was not designed.</p>
    <p>Some other bits and pieces.</p>
    <p>We’re not acting in a partnership with you nor are we acting as your agent or you as ours.  You can’t resell the right to use Paddle (that would be totally not on).  You are not our employee and we are not yours.</p>
    <p>If we have to send you something in writing, you agree that an email or some other form of electronic communication is fine.  We can contact you for this purpose at the email address you give us when you register and you promise to keep that email address accurate and current.  If it isn’t and you don’t receive a notification from us as a result, that’s your look-out.</p>
    <p>Just because we don’t insist on you complying with these terms at any particular time doesn’t mean we can’t insist on that compliance at some later date.  And just because somebody in authority decides that some element of these terms is not enforceable won’t mean that the rest of them aren’t enforceable either.  The terms will remain in place without the offending wording and where necessary, you will agree with us some wording that comes as close as possible to doing the same job as the bit that’s been removed.</p>
    <p>There’s a law in England &amp; Wales that allows third parties to enforce contract terms that are intended to benefit them.  There may be something similar wherever you are if that’s not England &amp; Wales.  Insofar as it’s lawful for us to do so, that law is excluded and the only people that can rely on and enforce the terms of our contract with you are us and you.  But of course, if there is some other law that overrides this, then that takes precedence.</p>
    <p>Paddle is perfectly lawful to use under the laws of England and Wales and of the European Union.  But if you live beyond the shores of this sceptred isle, the law where you are may be different.  It’s up to you to make sure that your use of Paddle is legal wherever you are.</p>
    <p>These terms, together with the <a href="{{ route('get::front.privacy') }}">Privacy Policy</a>, form our contract with you.  No other terms can be implied into the agreement we have with you and your registration on these terms cancels any previous agreement or understanding we may have had with you about Paddle or matters relating to it.  Basically, if it’s not set out in these terms, then it doesn’t apply to the contract and can’t be enforced.  That includes any statements we may have made to you either in person or via some electronic means.</p>
    <p>Last but not least, these terms and our contract with you are governed by the law of England &amp; Wales and are subject to the exclusive jurisdiction of the English courts.</p>
</div>
@endsection
