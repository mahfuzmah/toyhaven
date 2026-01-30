@extends('website.master')
@section('body')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="{{asset('/')}}website/assets/image/other/Untitled-1-01.png">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Blog</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Blog Stories</h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main start -->
    <main id="main">
        <!-- blog-news start -->
        <section class="blog-news section-pt">
            <div class="container">
                <div class="row row-mtm">
                    <!-- article-img start -->
                    <div class="article-img banner-hover" data-animate="animate__fadeIn">
                        <img src="{{asset('/')}}website/assets/image/article/1.jpg"
                             class="w-100 img-fluid border-radius" alt="article-main">
                    </div>
                    <!-- article-img end -->
                    <!-- article-title start -->
                    <div class="article-title" data-animate="animate__fadeIn">
                        <span class="d-block meb-19">20 October, 2025 / By Dr. Shamim Arman Khan </span>
                        <h2 class="font-24">বাচ্চাদের মস্তিষ্কের পরিচর্যা</h2>
                    </div>
                    <!-- article-title end -->
                    <!-- article-description start -->
                    <div class="article-description" data-animate="animate__fadeIn">
                        <div class="row row-mtm">
                            <div class="article-desc">
                                <div class="article-detail p-mtm30">
                                    <p>শিশুর মস্তিষ্ক জন্মের পর থেকেই দ্রুত বিকশিত হতে থাকে। জন্মের প্রথম পাঁচ বছরেই তার
                                        মস্তিষ্কের প্রায় ৯০% বৃদ্ধি ঘটে। তাই এই সময়টা শুধু খাবার ও ঘুমের নয় — বরং মানসিক
                                        ও বুদ্ধিবৃত্তিক যত্নের সময়। বাচ্চার চিন্তা, শেখা, অনুভব করা এবং সিদ্ধান্ত নেওয়ার
                                        ক্ষমতা গড়ে ওঠে তার আশপাশের পরিবেশ, ভালোবাসা এবং পরিচর্যার মাধ্যমে।</p>
                                    <p>একটি শিশুর সবচেয়ে বড় প্রয়োজন নিরাপত্তা ও ভালোবাসা। যখন মা-বাবা নিয়মিত হাসিমুখে
                                        কথা বলেন, কোলে নেন, গান শোনান — তখন শিশুর মস্তিষ্কে অক্সিটোসিন ও ডোপামিন নামের
                                        “হ্যাপিনেস হরমোন” নিঃসৃত হয়। এগুলো তার স্মৃতিশক্তি, মনোযোগ ও শেখার আগ্রহ বাড়ায়।
                                        💡 তাই নিয়মিত শিশুর সঙ্গে কথা বলো, চোখে চোখ রেখে হাসো, তাকে গল্প বলো — এগুলোই
                                        তার মানসিক বিকাশের ভিত্তি।</p>
                                </div>
                            </div>
                            <div class="article-blockquote">
                                <div class="article-blockquote">
                                    <blockquote class="m-0">
                                        <span class="article-icon float-start primary-color icon-24 mer-15"><i
                                                class="ri-double-quotes-l d-block lh-1"></i></span>
                                        <h6 class="font-20 section-heading-family section-heading-text section-heading-weight">
                                            খেলাই শিশুর সবচেয়ে প্রাকৃতিক শেখার উপায়। ব্লক, পাজল, রং করা, গল্প সাজানো— এসব খেলা তার সমস্যা সমাধান, মনোযোগ ও সৃজনশীল চিন্তা বাড়ায়।
                                            যেসব খেলায় হাত ও চোখ একসাথে কাজ করে (যেমন ব্লক দিয়ে ঘর বানানো, বল ছোড়া), সেগুলো মস্তিষ্কের সংযোগ আরও শক্ত করে।
                                            এছাড়া বাইরে খেলা, দৌড়ানো বা প্রকৃতির মাঝে সময় কাটানো শিশুর মানসিক শান্তি ও ফোকাস বাড়ায়।</h6>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="article-banner">
                                <div class="row row-mtm">
                                    <div class="col-12 col-md-6">
                                        <img src="assets/image/article/article-banner1.jpg"
                                             class="w-100 img-fluid border-radius" alt="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <img src="assets/image/article/article-banner2.jpg"
                                             class="w-100 img-fluid border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="article-desc">
                                <div class="article-detail p-mtm30">
                                    <p>বাচ্চার সামনে বই রাখো, রঙিন গল্প শোনাও, তাকে প্রশ্ন করতে দাও।
                                        যখন সে নতুন কিছু শেখার আগ্রহ প্রকাশ করে, তাকে প্রশংসা করো — এতে আত্মবিশ্বাস বাড়ে।
                                        স্কুলের পড়াশোনার পাশাপাশি জিজ্ঞাসু মন বজায় রাখাটাই সবচেয়ে গুরুত্বপূর্ণ। মনে রেখো, শিশু শেখে “কীভাবে শেখা যায়” সেটি পর্যবেক্ষণের মাধ্যমে।</p>
                                    <br>
                                    <p class="justify-content-center text-center">চিৎকার, রাগ, চাপ বা ভয় — এগুলো শিশুর মস্তিষ্কে নেতিবাচক প্রভাব ফেলে।
                                        শান্ত, ভালোবাসায় ভরা পরিবেশে শিশু নিরাপদ বোধ করে, ফলে তার শেখার ক্ষমতা বেড়ে যায়।
                                        প্রতিদিন কিছু সময় পরিবারের সবাই মিলে হাসিখুশি কাটাও — গান শোনা, গল্প বলা, একসাথে খাওয়া— এগুলোই শিশুর মানসিক শক্তি গড়ে তোলে।</p>
                                    <br>
                                    <p class="justify-content-center">শিশুর মস্তিষ্কের যত্ন মানে শুধু তার পড়াশোনা নয় — বরং তার অনুভূতি, খাবার, ঘুম, খেলাধুলা ও সম্পর্ক— সব কিছুর যত্ন।
                                        প্রথম পাঁচ বছর তার ভবিষ্যতের ভিত্তি তৈরি করে।
                                        তাই এখন থেকেই শুরু করো ছোট ছোট পদক্ষেপ —
                                        ভালোবাসা, নিরাপত্তা, শেখার আনন্দ আর একটুখানি যত্নই পারে তোমার শিশুর মস্তিষ্ককে সঠিকভাবে বিকশিত করতে।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- article-description end -->

                    <!-- article-prev-next start -->
                    <div class="article-prev-next" data-animate="animate__fadeIn">
                        <div class="article-pn ptb-15 bst beb">
                            <ul class="article-pn-ul d-flex align-items-center justify-content-between">
                                <li class="article-pn-li">
                                    <a href="{{route("blog3")}}" class="primary-link font-14 d-flex align-items-center"><i
                                            class="ri-arrow-left-line icon-16 mer-5"></i><span
                                            class="text-uppercase heading-weight">Prev post</span></a>
                                </li>
                                <li class="article-pn-li">
                                    <a href="{{route("blog2")}}" class="primary-link font-14 d-flex align-items-center"><span
                                            class="text-uppercase heading-weight">Next post</span><i
                                            class="ri-arrow-right-line icon-16 mer-5"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- article-prev-next end -->
                    <!-- article-comments start -->
{{--                    <div class="article-comments" data-animate="animate__fadeIn">--}}
{{--                        <form method="post" action="javascript:void(0)" id="comment_form" class="article-form">--}}
{{--                            <div class="row row-mtm">--}}
{{--                                <div class="article-cmt">--}}
{{--                                    <h6 class="font-18">Comment <span class="article-cmt-count">(3)</span></h6>--}}
{{--                                    <div class="article-cmt-wrap mst-25">--}}
{{--                                        <div class="row row-mtm">--}}
{{--                                            <div class="article-cmt-wrapper">--}}
{{--                                                <div class="row row-mtm">--}}
{{--                                                    <div class="article-cmt-content">--}}
{{--                                                        <div class="article-cmt-cii d-flex flex-wrap">--}}
{{--                                                            <div class="article-cmt-img width-80"><img--}}
{{--                                                                    src="assets/image/article/article-cmt1.jpg"--}}
{{--                                                                    class="img-fluid border-radius" alt="article-cmt1">--}}
{{--                                                            </div>--}}
{{--                                                            <div--}}
{{--                                                                class="article-cmt-info width-calc-80 d-flex flex-column justify-content-center psl-15">--}}
{{--                                                                <span--}}
{{--                                                                    class="heading-color heading-weight">Ashley rosa</span>--}}
{{--                                                                <span class="mst-7">Dec 23, 2023</span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="article-cmt-desc mst-8">What is Lorem Ipsum Lorem--}}
{{--                                                            Ipsum is simply dummy text of the printing and typesetting--}}
{{--                                                            industry Lorem Ipsum has been the industry’s standard dummy--}}
{{--                                                            text ever since.</p>--}}
{{--                                                        <div class="article-cmt-text d-none mst-15">--}}
{{--                                                            <textarea id="ashley-rosa-edit-message"--}}
{{--                                                                      name="ashley-rosa-edit-message" class="w-100"--}}
{{--                                                                      placeholder="Edit your comment..."--}}
{{--                                                                      autocomplete="off">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry’s standard dummy text ever since.</textarea>--}}
{{--                                                            <div class="article-edit-reply mst-11 meb-26">--}}
{{--                                                                <ul class="ul-mt15">--}}
{{--                                                                    <li>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="link-primary-color article-edit-post">--}}
{{--                                                                            Post--}}
{{--                                                                        </button>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="link-secondary-color article-edit-cancel">--}}
{{--                                                                            Cancel--}}
{{--                                                                        </button>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="article-cmt-red mst-19">--}}
{{--                                                            <ul class="ul-mt30 align-items-end">--}}
{{--                                                                <li>--}}
{{--                                                                    <button type="button"--}}
{{--                                                                            class="article-reply-btn link-btn"--}}
{{--                                                                            aria-label="Reply comment">Reply--}}
{{--                                                                    </button>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <div class="article-edit-reply d-flex flex-wrap">--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="article-cmt-edit body-primary-color icon-16"--}}
{{--                                                                                aria-label="Edit comment"><i--}}
{{--                                                                                class="ri-edit-2-line d-block lh-1"></i>--}}
{{--                                                                        </button>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="article-cmt-delete body-primary-color icon-16"--}}
{{--                                                                                aria-label="Remove comment"><i--}}
{{--                                                                                class="ri-delete-bin-line d-block lh-1"></i>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="article-reply-form d-none mst-25">--}}
{{--                                                            <div class="article-post-form">--}}
{{--                                                                <h6 class="font-18">Leave a reply</h6>--}}
{{--                                                                <div class="article-form-wrap mst-21">--}}
{{--                                                                    <div class="row field-row">--}}
{{--                                                                        <div class="col-12 col-md-6 field-col">--}}
{{--                                                                            <label for="ashley-rosa-name"--}}
{{--                                                                                   class="field-label">Name</label>--}}
{{--                                                                            <input type="text" id="ashley-rosa-name"--}}
{{--                                                                                   name="ashley-rosa-name" class="w-100"--}}
{{--                                                                                   placeholder="Full name"--}}
{{--                                                                                   autocomplete="name">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 col-md-6 field-col">--}}
{{--                                                                            <label for="ashley-rosa-email"--}}
{{--                                                                                   class="field-label">Email</label>--}}
{{--                                                                            <input type="email" id="ashley-rosa-email"--}}
{{--                                                                                   name="ashley-rosa-email"--}}
{{--                                                                                   class="w-100" placeholder="Email"--}}
{{--                                                                                   autocomplete="email">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 field-col">--}}
{{--                                                                            <label for="ashley-rosa-message"--}}
{{--                                                                                   class="field-label">Message</label>--}}
{{--                                                                            <textarea rows="5" id="ashley-rosa-message"--}}
{{--                                                                                      name="ashley-rosa-message"--}}
{{--                                                                                      class="w-100"--}}
{{--                                                                                      placeholder="Reply to Ashley rosa..."--}}
{{--                                                                                      autocomplete="off"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="article-cmt-post mst-15 mst-md-30">--}}
{{--                                                                    <div class="row btn-row">--}}
{{--                                                                        <div class="col-12 col-md-6 col-xxl-3">--}}
{{--                                                                            <button type="submit"--}}
{{--                                                                                    class="w-100 btn-style quaternary-btn article-reply-post">--}}
{{--                                                                                Post reply--}}
{{--                                                                            </button>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 col-md-6 col-xxl-3">--}}
{{--                                                                            <button type="submit"--}}
{{--                                                                                    class="w-100 btn-style secondary-btn article-cancel-post">--}}
{{--                                                                                Cancel--}}
{{--                                                                            </button>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="article-reply-content">--}}
{{--                                                        <div class="article-cmt-reply psl-15 psl-md-40">--}}
{{--                                                            <div class="row row-mtm">--}}
{{--                                                                <div class="article-cmt-content">--}}
{{--                                                                    <div class="article-cmt-cii d-flex flex-wrap">--}}
{{--                                                                        <div class="article-cmt-img width-80"><img--}}
{{--                                                                                src="assets/image/article/article-cmt2.jpg"--}}
{{--                                                                                class="img-fluid border-radius"--}}
{{--                                                                                alt="article-cmt2"></div>--}}
{{--                                                                        <div--}}
{{--                                                                            class="article-cmt-info width-calc-80 d-flex flex-column justify-content-center psl-15">--}}
{{--                                                                            <span class="heading-color heading-weight">Paul smith</span>--}}
{{--                                                                            <span class="mst-7">Dec 23, 2023</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <p class="article-cmt-desc mst-8">What is Lorem--}}
{{--                                                                        Ipsum Lorem Ipsum is simply dummy text of the--}}
{{--                                                                        printing and typesetting industry Lorem Ipsum--}}
{{--                                                                        has been the industry’s standard dummy text ever--}}
{{--                                                                        since.</p>--}}
{{--                                                                    <div class="article-cmt-text d-none mst-15">--}}
{{--                                                                        <textarea id="paul-smith-edit-message"--}}
{{--                                                                                  name="paul-smith-edit-message"--}}
{{--                                                                                  class="w-100"--}}
{{--                                                                                  placeholder="Reply to Ashley rosa..."--}}
{{--                                                                                  autocomplete="off">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry’s standard dummy text ever since.</textarea>--}}
{{--                                                                        <div class="article-edit-reply mst-11 meb-26">--}}
{{--                                                                            <ul class="ul-mt15">--}}
{{--                                                                                <li>--}}
{{--                                                                                    <button type="button"--}}
{{--                                                                                            class="link-primary-color article-edit-post">--}}
{{--                                                                                        Post--}}
{{--                                                                                    </button>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li>--}}
{{--                                                                                    <button type="button"--}}
{{--                                                                                            class="link-secondary-color article-edit-cancel">--}}
{{--                                                                                        Cancel--}}
{{--                                                                                    </button>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="article-cmt-red mst-19">--}}
{{--                                                                        <ul class="ul-mt30 align-items-end">--}}
{{--                                                                            <li>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="article-edit-reply d-flex flex-wrap">--}}
{{--                                                                                    <button type="button"--}}
{{--                                                                                            class="article-cmt-edit body-primary-color icon-16"--}}
{{--                                                                                            aria-label="Edit comment"><i--}}
{{--                                                                                            class="ri-edit-2-line d-block lh-1"></i>--}}
{{--                                                                                    </button>--}}
{{--                                                                                    <button type="button"--}}
{{--                                                                                            class="article-cmt-delete body-primary-color icon-16"--}}
{{--                                                                                            aria-label="Remove comment">--}}
{{--                                                                                        <i class="ri-delete-bin-line d-block lh-1"></i>--}}
{{--                                                                                    </button>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="article-cmt-wrapper">--}}
{{--                                                <div class="row row-mtm">--}}
{{--                                                    <div class="article-cmt-content">--}}
{{--                                                        <div class="article-cmt-cii d-flex flex-wrap">--}}
{{--                                                            <div class="article-cmt-img width-80"><img--}}
{{--                                                                    src="assets/image/article/article-cmt3.jpg"--}}
{{--                                                                    class="img-fluid border-radius" alt="article-cmt3">--}}
{{--                                                            </div>--}}
{{--                                                            <div--}}
{{--                                                                class="article-cmt-info width-calc-80 d-flex flex-column justify-content-center psl-15">--}}
{{--                                                                <span--}}
{{--                                                                    class="heading-color heading-weight">Alycia gordan</span>--}}
{{--                                                                <span class="mst-7">Dec 23, 2023</span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="article-cmt-desc mst-8">What is Lorem Ipsum Lorem--}}
{{--                                                            Ipsum is simply dummy text of the printing and typesetting--}}
{{--                                                            industry Lorem Ipsum has been the industry’s standard dummy--}}
{{--                                                            text ever since.</p>--}}
{{--                                                        <div class="article-cmt-text d-none mst-15">--}}
{{--                                                            <textarea id="alycia-gordan-edit-message"--}}
{{--                                                                      name="alycia-gordan-edit-message" class="w-100"--}}
{{--                                                                      placeholder="Edit your comment..."--}}
{{--                                                                      autocomplete="off">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry’s standard dummy text ever since.</textarea>--}}
{{--                                                            <div class="article-edit-reply mst-11 meb-26">--}}
{{--                                                                <ul class="ul-mt15">--}}
{{--                                                                    <li>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="link-primary-color article-edit-post">--}}
{{--                                                                            Post--}}
{{--                                                                        </button>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="link-secondary-color article-edit-cancel">--}}
{{--                                                                            Cancel--}}
{{--                                                                        </button>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="article-cmt-red mst-19">--}}
{{--                                                            <ul class="ul-mt30 align-items-end">--}}
{{--                                                                <li>--}}
{{--                                                                    <button type="button"--}}
{{--                                                                            class="article-reply-btn link-btn"--}}
{{--                                                                            aria-label="Reply comment">Reply--}}
{{--                                                                    </button>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <div class="article-edit-reply d-flex flex-wrap">--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="article-cmt-edit body-primary-color icon-16"--}}
{{--                                                                                aria-label="Edit comment"><i--}}
{{--                                                                                class="ri-edit-2-line d-block lh-1"></i>--}}
{{--                                                                        </button>--}}
{{--                                                                        <button type="button"--}}
{{--                                                                                class="article-cmt-delete body-primary-color icon-16"--}}
{{--                                                                                aria-label="Remove comment"><i--}}
{{--                                                                                class="ri-delete-bin-line d-block lh-1"></i>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="article-reply-form d-none mst-25">--}}
{{--                                                            <div class="article-post-form">--}}
{{--                                                                <h6 class="font-18">Leave a reply</h6>--}}
{{--                                                                <div class="article-form-wrap mst-21">--}}
{{--                                                                    <div class="row field-row">--}}
{{--                                                                        <div class="col-12 col-md-6 field-col">--}}
{{--                                                                            <label for="alycia-gordan-name"--}}
{{--                                                                                   class="field-label">Name</label>--}}
{{--                                                                            <input type="text" id="alycia-gordan-name"--}}
{{--                                                                                   name="alycia-gordan-name"--}}
{{--                                                                                   class="w-100" placeholder="Full name"--}}
{{--                                                                                   autocomplete="name">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 col-md-6 field-col">--}}
{{--                                                                            <label for="alycia-gordan-email"--}}
{{--                                                                                   class="field-label">Email</label>--}}
{{--                                                                            <input type="email" id="alycia-gordan-email"--}}
{{--                                                                                   name="alycia-gordan-email"--}}
{{--                                                                                   class="w-100" placeholder="Email"--}}
{{--                                                                                   autocomplete="email">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 field-col">--}}
{{--                                                                            <label for="alycia-gordan-message"--}}
{{--                                                                                   class="field-label">Message</label>--}}
{{--                                                                            <textarea rows="5"--}}
{{--                                                                                      id="alycia-gordan-message"--}}
{{--                                                                                      name="alycia-gordan-message"--}}
{{--                                                                                      class="w-100"--}}
{{--                                                                                      placeholder="Reply to David williams..."--}}
{{--                                                                                      autocomplete="off"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="article-cmt-post mst-15 mst-md-30">--}}
{{--                                                                    <div class="row btn-row">--}}
{{--                                                                        <div class="col-12 col-md-6 col-xxl-3">--}}
{{--                                                                            <button type="submit"--}}
{{--                                                                                    class="w-100 btn-style quaternary-btn article-reply-post">--}}
{{--                                                                                Post reply--}}
{{--                                                                            </button>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 col-md-6 col-xxl-3">--}}
{{--                                                                            <button type="submit"--}}
{{--                                                                                    class="w-100 btn-style secondary-btn article-cancel-post">--}}
{{--                                                                                Cancel--}}
{{--                                                                            </button>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="article-post-form">--}}
{{--                                    <h6 class="font-18">Leave a comment</h6>--}}
{{--                                    <div class="article-form-wrap mst-21">--}}
{{--                                        <div class="row field-row">--}}
{{--                                            <div class="col-12 col-md-6 field-col">--}}
{{--                                                <label for="name" class="field-label">Name</label>--}}
{{--                                                <input type="text" id="name" name="name" class="w-100"--}}
{{--                                                       placeholder="Full name" autocomplete="name" required>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 field-col">--}}
{{--                                                <label for="email" class="field-label">Email</label>--}}
{{--                                                <input type="email" id="email" name="email" class="w-100"--}}
{{--                                                       placeholder="Email" autocomplete="email" required>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 field-col">--}}
{{--                                                <label for="message" class="field-label">Message</label>--}}
{{--                                                <textarea rows="5" id="message" name="message" class="w-100"--}}
{{--                                                          placeholder="Message" autocomplete="off" required></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="article-cmt-post mst-15 mst-md-30">--}}
{{--                                        <div class="row btn-row">--}}
{{--                                            <div class="col-12 col-md-6 col-xxl-3">--}}
{{--                                                <button type="submit"--}}
{{--                                                        class="w-100 btn-style secondary-btn article-reply-post">Post--}}
{{--                                                    comment--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <!-- article-comments end -->
                </div>
            </div>
        </section>
        <!-- blog-news start -->
        <!-- related-blog start -->
{{--        <section class="related-blog section-ptb">--}}
{{--            <div class="container">--}}
{{--                <div class="blog-category">--}}
{{--                    <div class="section-capture text-center" data-animate="animate__fadeIn">--}}
{{--                        <div class="section-title">--}}
{{--                            <h2 class="section-heading">Related post</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-wrap">--}}
{{--                        <div class="blog-slider swiper" id="blog-slider">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                <div class="swiper-slide" data-animate="animate__fadeIn">--}}
{{--                                    <div class="blog-post banner-hover">--}}
{{--                                        <div class="blog-main-img">--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-none d-xl-block position-relative banner-img br-hidden">--}}
{{--                                                <span--}}
{{--                                                    class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>--}}
{{--                                                <img src="assets/image/index/article/a-1.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-1">--}}
{{--                                            </a>--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-block d-xl-none banner-img br-hidden">--}}
{{--                                                <img src="assets/image/index/article/a-1.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-1">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="blog-post-content pst-25">--}}
{{--                                            <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1">--}}
{{--                                                <i class="ri-calendar-line primary-color fw-normal"></i> 23 Dec, 2023 <i--}}
{{--                                                    class="ri-chat-3-line primary-color fw-normal"></i> 3 Comment--}}
{{--                                            </div>--}}
{{--                                            <h6 class="font-18">Flared skirt essentials</h6>--}}
{{--                                            <p class="mst-8">Twirl in classic skirts styled for grace, flow, and--}}
{{--                                                feminine appeal in every step</p>--}}
{{--                                            <div class="d-xl-none mst-9">--}}
{{--                                                <a href="article-without.html" class="link-btn">Read more</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide" data-animate="animate__fadeIn">--}}
{{--                                    <div class="blog-post banner-hover">--}}
{{--                                        <div class="blog-main-img">--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-none d-xl-block position-relative banner-img br-hidden">--}}
{{--                                                <span--}}
{{--                                                    class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>--}}
{{--                                                <img src="assets/image/index/article/a-2.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-2">--}}
{{--                                            </a>--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-block d-xl-none banner-img br-hidden">--}}
{{--                                                <img src="assets/image/index/article/a-2.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-2">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="blog-post-content pst-25">--}}
{{--                                            <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1">--}}
{{--                                                <i class="ri-calendar-line primary-color fw-normal"></i> 10, Jan 2024 <i--}}
{{--                                                    class="ri-chat-3-line primary-color fw-normal"></i> 5 Comment--}}
{{--                                            </div>--}}
{{--                                            <h6 class="font-18">Sharp mens blazer cut</h6>--}}
{{--                                            <p class="mst-8">Elevate your look with sharply tailored blazers that--}}
{{--                                                balance structure, comfort, and polish</p>--}}
{{--                                            <div class="d-xl-none mst-9">--}}
{{--                                                <a href="article-without.html" class="link-btn">Read more</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide" data-animate="animate__fadeIn">--}}
{{--                                    <div class="blog-post banner-hover">--}}
{{--                                        <div class="blog-main-img">--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-none d-xl-block position-relative banner-img br-hidden">--}}
{{--                                                <span--}}
{{--                                                    class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>--}}
{{--                                                <img src="assets/image/index/article/a-3.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-3">--}}
{{--                                            </a>--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-block d-xl-none banner-img br-hidden">--}}
{{--                                                <img src="assets/image/index/article/a-3.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-3">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="blog-post-content pst-25">--}}
{{--                                            <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1">--}}
{{--                                                <i class="ri-calendar-line primary-color fw-normal"></i> 18, Jan 2024 <i--}}
{{--                                                    class="ri-chat-3-line primary-color fw-normal"></i> 3 Comment--}}
{{--                                            </div>--}}
{{--                                            <h6 class="font-18">Playful girl ruffle top</h6>--}}
{{--                                            <p class="mst-8">Let kids express joy with frilled tops made from gentle--}}
{{--                                                cotton, designed for color and comfort</p>--}}
{{--                                            <div class="d-xl-none mst-9">--}}
{{--                                                <a href="article-without.html" class="link-btn">Read more</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide" data-animate="animate__fadeIn">--}}
{{--                                    <div class="blog-post banner-hover">--}}
{{--                                        <div class="blog-main-img">--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-none d-xl-block position-relative banner-img br-hidden">--}}
{{--                                                <span--}}
{{--                                                    class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>--}}
{{--                                                <img src="assets/image/index/article/a-4.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-4">--}}
{{--                                            </a>--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-block d-xl-none banner-img br-hidden">--}}
{{--                                                <img src="assets/image/index/article/a-4.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-4">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="blog-post-content pst-25">--}}
{{--                                            <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1">--}}
{{--                                                <i class="ri-calendar-line primary-color fw-normal"></i> 20, Jan 2024 <i--}}
{{--                                                    class="ri-chat-3-line primary-color fw-normal"></i> 3 Comment--}}
{{--                                            </div>--}}
{{--                                            <h6 class="font-18">Everyday cotton tees</h6>--}}
{{--                                            <p class="mst-8">Discover versatile cotton tees perfect for daily wear,--}}
{{--                                                styled for comfort and effortless layering</p>--}}
{{--                                            <div class="d-xl-none mst-9">--}}
{{--                                                <a href="article-without.html" class="link-btn">Read more</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide" data-animate="animate__fadeIn">--}}
{{--                                    <div class="blog-post banner-hover">--}}
{{--                                        <div class="blog-main-img">--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-none d-xl-block position-relative banner-img br-hidden">--}}
{{--                                                <span--}}
{{--                                                    class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>--}}
{{--                                                <img src="assets/image/index/article/a-5.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-5">--}}
{{--                                            </a>--}}
{{--                                            <a href="article-without.html"--}}
{{--                                               class="d-block d-xl-none banner-img br-hidden">--}}
{{--                                                <img src="assets/image/index/article/a-5.jpg" class="w-100 img-fluid"--}}
{{--                                                     alt="a-5">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="blog-post-content pst-25">--}}
{{--                                            <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1">--}}
{{--                                                <i class="ri-calendar-line primary-color fw-normal"></i> 28, Jan 2024 <i--}}
{{--                                                    class="ri-chat-3-line primary-color fw-normal"></i> 2 Comment--}}
{{--                                            </div>--}}
{{--                                            <h6 class="font-18">Crisp linen shirt edit</h6>--}}
{{--                                            <p class="mst-8">Explore breathable linen shirts tailored for warm days and--}}
{{--                                                styled for smart or relaxed occasions</p>--}}
{{--                                            <div class="d-xl-none mst-9">--}}
{{--                                                <a href="article-without.html" class="link-btn">Read more</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-buttons">--}}
{{--                            <div class="swiper-buttons-wrap">--}}
{{--                                <button type="button" class="swiper-prev swiper-prev-blog" aria-label="Arrow previous">--}}
{{--                                    <i class="ri-arrow-left-line d-block lh-1"></i></button>--}}
{{--                                <button type="button" class="swiper-next swiper-next-blog" aria-label="Arrow next"><i--}}
{{--                                        class="ri-arrow-right-line d-block lh-1"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-dots" data-animate="animate__fadeIn">--}}
{{--                            <div class="swiper-pagination swiper-pagination-blog"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- related-blog end -->
    </main>


@endsection
