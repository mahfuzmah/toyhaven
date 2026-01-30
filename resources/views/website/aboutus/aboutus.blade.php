@extends('website.master')

@section('body')

    <div class="about-section">

        <!-- Left Side Image -->
        <div class="about-image">
            <img src="{{asset('/')}}website/assets/image/other/baby.png">
        </div>

        <!-- Right Side Text -->
        <div class="about-content">

            <h3>About Us</h3>

            <div class="text-wrapper" id="textWrapper">
                <p>
                    ToyHavenBD.com is a premium educational toy brand dedicated to creating a joyful, safe, and
                    intellectually enriching world for children. We believe that every child deserves toys that inspire
                    learning, spark imagination, and support healthy brain development. That’s why our entire product range
                    is thoughtfully designed to enhance cognitive skills, boost creativity, and make early learning a fun
                    and meaningful experience for babies and young children.
                </p>

                <p>
                    At ToyHavenBD, safety and quality always come first. Each toy is carefully curated to meet international
                    safety standards, ensuring parents can trust that their little ones are engaging with products that are
                    both durable and child-friendly.
                </p>

                <p>
                    More than just toys, we offer moments of happiness. Understanding how special a child’s birthday can be,
                    we provide instant birthday delivery services to make your celebrations stress-free and memorable.
                    Whether it’s a last-minute gift or a surprise for your little one, ToyHavenBD is always ready to deliver
                    smiles right on time.
                </p>

                <p>
                    Driven by love, learning, and creativity, ToyHavenBD.com continues to bring parents the best tools for
                    nurturing bright young minds. We are proud to be your trusted partner in your child’s early growth and
                    playful exploration.
                </p>

                <p>
                    To ensure complete transparency and customer trust, ToyHavenBD.com operates under an officially approved trade license issued by the Bangladesh Government.
                    <span class="text-success">Trade License No: TRAD/DNCC/023403/2025</span>
                </p>
            </div>

            <button class="read-more-btn" id="readMoreBtn">Read More</button>

        </div>


    </div>

@endsection
