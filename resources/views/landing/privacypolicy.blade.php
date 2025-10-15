@extends('layouts.landing.master')
@section('title', 'Pandan View Mandeh - Contact')

@section('_styles')

    {{-- Primary Meta Tags --}}
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $title }}" />
    <meta name="keywords" content="About Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
    <meta name="author" content="Pandan View Mandeh" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="revisit-after" content="1 Days" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="{{ $title }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
    <meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

    <meta property="og:type" content=website />
    <meta property="og:url" content="{{ URL::current() }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ $title }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
    <meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
    <meta property="twitter:url" content="{{ URL::current() }}">

    <link rel="canonical" href="{{ URL::current() }}" />
    <link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
    <link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Privacy Policy</h2>
                    <ol>
                        <li><a href="/">{{ __('messages.menu.home') }}</a></li>
                        <li>Privacy Policy</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="privacy-policy" class="privacy-policy">
            <div class="container">

                <h1>Privacy Policy for Pandan View Mandeh</h1>

                <p>At Pandan View Mandeh, accessible from https://pandanviewmandeh.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Pandan View Mandeh and how we use it.</p>

                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

                <h2>Log Files</h2>

                <p>Pandan View Mandeh follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>

                <h2>Cookies and Web Beacons</h2>

                <p>Like any other website, Pandan View Mandeh uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

                <p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">the "Cookies" article from the Privacy Policy Generator</a>.</p>
                >>>>>>> parent of e1b9ab7 ([brands] Updated credits link)

                <h2>Google DoubleClick DART Cookie</h2>

                <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>


                <h2>Privacy Policies</h2>

                <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Pandan View Mandeh.</p>

                <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Pandan View Mandeh, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

                <p>Note that Pandan View Mandeh has no access to or control over these cookies that are used by third-party advertisers.</p>

                <h2>Third Party Privacy Policies</h2>

                <p>Pandan View Mandeh's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

                <h2>Children's Information</h2>

                <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

                <p>Pandan View Mandeh does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

                <h2>Online Privacy Policy Only</h2>

                <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Pandan View Mandeh. This policy is not applicable to any information collected offline or via channels other than this website.</p>

                <h2>Consent</h2>

                <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
