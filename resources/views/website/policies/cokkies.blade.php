@extends('website.master')
@section('body')

<div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Cookie</span>
        <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Cookie</h2>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- main start -->
<main id="main">
    <!-- cookie start -->
    <section class="cookie section-ptb">
        <div class="container">
            <div class="section-capture text-center">
                <div class="section-title" data-animate="animate__fadeIn">
                    <h2 class="section-heading">Cookie</h2>
                </div>
            </div>
            <div class="row row-mtm align-items-md-start">
                <div class="col-12 col-md-4 col-lg-3 p-md-sticky top-0">
                    <div class="per-xxl-10">
                        <div class="row row-mtm">
                            <div class="col-12">
                                <h6 class="other-tab-title font-20 meb-18" data-animate="animate__fadeIn"><span>Ask us anything</span></h6>
                                <div class="ul-mtm-15">
                                    <span data-animate="animate__fadeIn"><i class="ri-phone-line icon-16 mer-4"></i><a href="+88 01304-004499" class="body-primary-color">+88 01304-004499</a></span>
                                    <span data-animate="animate__fadeIn"><i class="ri-mail-line icon-16 mer-4"></i><a href="toyhavenbd@gmail.com" class="body-primary-color">toyhavenbd@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="other-tab-title font-20 meb-18" data-animate="animate__fadeIn"><span>Policies</span></h6>
                                <div class="ul-mtm-15">
                                    <span data-animate="animate__fadeIn"><a href="{{route('cookie')}}" class="primary-color">Cookie page</a></span>
                                    <span data-animate="animate__fadeIn"><a href="{{route('payment')}}" class="body-primary-color">Payment policy</a></span>
                                    <span data-animate="animate__fadeIn"><a href="{{route('privacy')}}" class="body-primary-color">Privacy policy</a></span>
                                    <span data-animate="animate__fadeIn"><a href="{{route('refund')}}" class="body-primary-color">Return policy</a></span>
                                    <span data-animate="animate__fadeIn"><a href="{{route('shipping')}}" class="body-primary-color">Shipping policy</a></span>
                                    <span data-animate="animate__fadeIn"><a href="{{route('condition')}}" class="body-primary-color">Terms & conditions</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 p-md-sticky top-0">
                    <div class="number-index">
                        <p data-animate="animate__fadeIn">We utilize tracking technologies like cookies to enhance your experience on our website. These tools help us remember your preferences, personalize content, and analyze user behavior. By storing small data files on your device, we can offer a more tailored browsing experience. You can adjust your cookie preferences via your browser settings, but disabling cookies may limit site functionality.</p>
                        <p class="mst-6" data-animate="animate__fadeIn">Our site may feature cookies from third-party services for analytics and advertising purposes. These external cookies collect information separately and adhere to their own privacy policies. To understand how these third parties use cookies and manage your privacy, please review their respective privacy statements.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">What is a cookie?</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">A cookie is a small piece of data stored on your device by a website. It helps track your browsing activity, remember preferences, and enhance your experience. Cookies may hold information like login details or site settings, allowing the website to recognize you on return visits. While cookies are generally harmless, they can sometimes be used for tracking purposes, which is why understanding their function and managing them is crucial for your privacy and security.</p>
                        <p class="mst-6" data-animate="animate__fadeIn">Cookies are tiny data files placed on your device by websites. They improve user experience by storing your preferences and tracking activity.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Types of cookies on this site</h6>
                        <h6 class="p-number font-18 mst-20" data-animate="animate__fadeIn">Essential function cookies</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">These cookies are crucial for the website to function properly. They ensure that essential tasks such as login sessions, shopping cart contents, and site security are maintained. Without these cookies, the website might not work as intended, or you may encounter difficulties using certain features. They are often set automatically and are essential for providing a seamless and secure user experience.</p>
                        <h6 class="p-number font-18 mst-18" data-animate="animate__fadeIn">Analytics tracking cookies</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">These cookies help us analyze how visitors use our site and track performance metrics. They collect data on user interactions, such as pages visited, time spent on the site, and any errors encountered. This information helps us understand user behavior, identify areas for improvement, and enhance overall website functionality. They do not store personal data but aggregate usage statistics to optimize user experience.</p>
                        <h6 class="p-number font-18 mst-18" data-animate="animate__fadeIn">Feature enhancement cookies</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">These cookies are used to remember your preferences and settings to enhance your browsing experience. They enable features like language selection, theme preferences, and user-specific configurations. By storing your choices, these cookies ensure that you do not have to re-enter information or adjust settings each time you visit our site. They aim to provide a more personalized and convenient experience, improving site usability based on your individual needs and previous interactions.</p>
                        <h6 class="p-number font-18 mst-18" data-animate="animate__fadeIn">Ads and tracking cookies</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">These cookies are utilized to track your interactions with advertisements and to analyze your behavior across different websites. They help us understand the effectiveness of our marketing campaigns and tailor ads to your interests. By collecting data on how you engage with various ads, these cookies enable us to deliver more relevant advertising content and measure the success of our promotional strategies. They also help improve your browsing experience by showing ads that are more aligned with your preferences and needs.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Temporary and long-term cookies</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">We use both short-term and persistent cookies to enhance your browsing experience. Short-term cookies, also known as session cookies, are temporary and are erased once you close your browser. Persistent cookies, on the other hand, remain on your device for a set period even after you leave our site. They help us remember your preferences and login information for future visits, making your experience smoother and more personalized.</p>
                        <p class="mst-6" data-animate="animate__fadeIn">Session cookies are deleted when you end your browsing session, while persistent cookies stay on your device longer, allowing for consistent settings and information across multiple visits.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">External sites cookie usage</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">Some external websites may use their own cookies while you visit their pages. These cookies are not under our control, and we are not responsible for their usage. We advise you to check their privacy policies for details on how they handle cookies and data.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Cookies utilized on this website</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">Our site uses different types of cookies to enhance functionality and improve your browsing experience.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Managing your cookie settings</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">To manage your cookie settings, visit your browser's privacy options. From there, you can block or allow cookies as needed, clear existing cookies, and set preferences for different websites. This helps control what information is collected and how it's used during your browsing sessions.</p>
                        <p class="mst-6" data-animate="animate__fadeIn">You can change cookie settings in your browser's privacy or security settings.</p>
                        <div class="pst-30 mst-30 bst" data-animate="animate__fadeIn"></div>
                        <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Ways to reach us</h6>
                        <p class="mst-18" data-animate="animate__fadeIn">Get in touch with us easily via email at <a href="toyhavenbd@gmail.com" class="primary-link">toyhavenbd@gmail.com</a>, phone, or our online contact form. We're here to help.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cookie end -->
</main>
@endsection
