@extends('templates.front.main')
@section('metainfo')
<title>DPG Degree College</title>
<meta name="description" content="DPG Degree College">
<meta name="keywords" content="DPG Degree College">
<meta name="author" content="DPG Degree College">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="DPG Degree College" />
<meta property="og:description" content="DPG Degree College" />
<meta property="og:url" content="https://www.dpgdegreecollege.com" />
<meta property="og:site_name" content="DPG Degree College" />
<meta property="og:image" content="https://www.dpgdegreecollege.com/assets/front/imgs/banners/1.jpg" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://www.dpgdegreecollege.com" />
<link rel="preload" href="/assets/logo.webp" as="image" type="image/webp">
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="/assets/front/css/preloader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endsection
@section('body')
<div id="dp" aria-hidden="true">
    <div class="dp-lid dp-lt"></div>
    <div class="dp-lid dp-lb"></div>
    <div class="dp-stage">
        <div class="dp-logo-wrap">
            <div class="dp-ring"></div>
            <div class="dp-glow"></div>
            <img class="dp-logo" src="/assets/logo.webp" alt="DPG Degree College" fetchpriority="high" loading="eager"/>
        </div>
        <div class="dp-bar"><i></i></div>
    </div>
</div>
<?php 
$banners=[
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/1.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/3.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/4.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/5.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/6.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/7.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/8.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/9.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/10.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/32.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/12.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/13.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/14.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/15.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/16.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/17.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/18.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/19.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/20.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/21.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/22.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/33.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/24.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/25.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/34.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/27.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/28.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/29.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/30.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/31.jpg"
    ],
];
?>

<section class="first-hero-section">
    @foreach($banners as $banners)
    <picture>
        <source media="(max-width: 767px)" srcset="{{$banners['img']}}">
        <source media="(min-width: 768px)" srcset="{{$banners['img']}}">
        <img src="{{$banners['img']}}" alt="Banner" width="100%">
    </picture>
    @endforeach
</section>

<section class="dpg-marquee bg-white">
    <div class="dpg-marquee__bar py-3">
        <div class="dpg-marquee__track d-flex align-items-center flex-nowrap">

            <!-- Group 1 -->
            <div class="dpg-marquee__group d-flex align-items-center flex-shrink-0">
                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Admission Open</span>
                    <span class="dpg-marquee__title">Session 2026-27</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Admissions are now open</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1">Apply Now</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Ph.D Admission</span>
                    <span class="dpg-marquee__title">Session 2026-27</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Ph.D programme admissions open</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Rankings</span>
                    <span class="dpg-marquee__title">NIRF Data</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Check our NIRF submission</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Our School</span>
                    <span class="dpg-marquee__title">DPG School of Technology &amp; Management</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>
            </div>

            <!-- Group 2 (exact copy of Group 1, seamless loop ke liye - isko mat hatana) -->
            <div class="dpg-marquee__group d-flex align-items-center flex-shrink-0" aria-hidden="true">
                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Admission Open</span>
                    <span class="dpg-marquee__title">Session 2026-27</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Admissions are now open</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1" tabindex="-1">Apply Now</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Ph.D Admission</span>
                    <span class="dpg-marquee__title">Session 2026-27</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Ph.D programme admissions open</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1" tabindex="-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Rankings</span>
                    <span class="dpg-marquee__title">NIRF Data</span>
                    <span class="dpg-marquee__star">✦</span>
                    <span class="dpg-marquee__text">Check our NIRF submission</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1" tabindex="-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>

                <div class="dpg-marquee__item d-flex align-items-center gap-3 mx-3 px-4 py-2 rounded-3">
                    <span class="dpg-marquee__tag rounded-pill px-3 py-1">Our School</span>
                    <span class="dpg-marquee__title">DPG School of Technology &amp; Management</span>
                    <a href="#" class="dpg-marquee__link rounded-pill px-3 py-1" tabindex="-1">View More</a>
                </div>
                <span class="dpg-marquee__divider"></span>
            </div>

        </div>
    </div>
</section>

<section class="dpg-stats py-5">
    <div class="container">
        <div class="dpg-stats__grid">
            <div class="dpg-stats__tile dpg-stats__tile--a" style="--bg: url('/assets/front/imgs/banners/7.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="20">20</span><span class="plus">+</span></div>
                    <p class="dpg-stats__label">Programs Offered</p>
                </div>
            </div>
            <div class="dpg-stats__tile dpg-stats__tile--b" style="--bg: url('/assets/front/imgs/banners/6.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="5">5</span></div>
                    <p class="dpg-stats__label">Colleges &amp; Schools</p>
                </div>
            </div>
            <div class="dpg-stats__tile dpg-stats__tile--c" style="--bg: url('/assets/front/imgs/banners/14.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="5000">5000</span><span class="plus">+</span></div>
                    <p class="dpg-stats__label">Students Enrolled</p>
                </div>
            </div>
            <div class="dpg-stats__tile dpg-stats__tile--d" style="--bg: url('/assets/front/imgs/banners/21.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="100">100</span><span class="plus">+</span></div>
                    <p class="dpg-stats__label">Research &amp; Publications</p>
                </div>
            </div>
            <div class="dpg-stats__tile dpg-stats__tile--e" style="--bg: url('/assets/front/imgs/banners/41.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="10000">10000</span><span class="plus">+</span></div>
                    <p class="dpg-stats__label">Books in Library</p>
                </div>
            </div>
            <div class="dpg-stats__tile dpg-stats__tile--f" style="--bg: url('/assets/front/imgs/banners/19.jpg')">
                <div class="dpg-stats__content">
                    <div class="dpg-stats__num"><span class="count" data-count="2000">2000</span><span class="plus">+</span></div>
                    <p class="dpg-stats__label">Alumni Network</p>
                </div>
            </div>

        </div>
    </div>
</section>


@php
    $b = function ($n) { return '/assets/front/imgs/banners/' . $n . '.jpg'; };

    // ---------------- EDITABLE DATA (sample jagah par apna real data daalna) ----------------
    $disc = [  // Disciplines coverflow + Schools
        ['Commerce', 8], ['Management', 9], ['Computer Applications', 10], ['Arts & Humanities', 13], ['Science', 15],
    ];

    $career = [ // icon, prefix, number, suffix, label   (SAMPLE numbers)
        ['i-award', '₹', 12,  ' LPA', 'Highest Package'],
        ['i-file',  '₹', 4,   ' LPA', 'Average Package'],
        ['i-users', '',  500, '+',    'Students Placed'],
        ['i-globe', '',  100, '+',    'Recruiting Partners'],
        ['i-check', '',  85,  '%',    'Placement Rate'],
    ];

    $recruiters = [ // naam, logo file (/assets/front/imgs/recruiters/<file>)
        ['Amazon', 'amazon.png'], ['Deloitte', 'deloitte.png'], ['TCS', 'tcs.png'], ['Wipro', 'wipro.png'],
        ['Accenture', 'accenture.png'], ['HDFC Bank', 'hdfc.png'], ['ICICI Bank', 'icici.png'], ['Infosys', 'infosys.png'],
        ['HCL', 'hcl.png'], ['Axis Bank', 'axis.png'], ['Tech Mahindra', 'techm.png'], ['Paytm', 'paytm.png'],
    ];

    $stories = [ // tab => [highlight, organisation]
        'Placements'     => ['₹ XX LPA', 'Company Name'],
        'Higher Studies' => ['University Name', 'Pursuing Master\'s'],
        'Entrepreneurs'  => ['Venture Name', 'Founder'],
    ];
    $courses = ['B.Com · 2021', 'BBA · 2022', 'BCA · 2020', 'B.A. · 2019', 'B.Sc · 2023'];

    $happen = [ // image, title, text
        [$b(1),  'Budget Manthan 2.0 – One day seminar by Prof. (Dr) Sunil Kumar Roy', 'A one-day seminar on the Union Budget organised at DPG Degree College, bringing students and faculty together for an insightful discussion.'],
        [$b(3),  'Republic Day and Veteran\'s Day Celebration 2026', 'Glimpses from the celebration held on campus, honouring our nation and its veterans.'],
        [$b(4),  'Sports event in collaboration with NSS committee 2025', 'Students took part in a spirited sports event organised together with the NSS committee.'],
    ];
    $press = [ // outlet, headline
        ['Newspaper Name', 'DPG Degree College hosts Budget Manthan 2.0 seminar'],
        ['Newspaper Name', 'Press headline goes here'],
        ['Newspaper Name', 'Press headline goes here'],
        ['Newspaper Name', 'Press headline goes here'],
    ];

    $events = [ // day, month, title, venue  (SAMPLE dates)
        ['24', 'NOV', 'SPARDHA – Annual Sports Meet 2026', 'College Sports Ground'],
        ['02', 'DEC', 'Career Counselling Workshop', 'Seminar Hall'],
        ['15', 'DEC', 'Cultural Fest', 'Main Auditorium'],
        ['10', 'JAN', 'National Seminar', 'Conference Hall'],
    ];

    $research = [ // icon, number, suffix, label  (SAMPLE)
        ['i-file',  100,   '+', 'Research & Publications'],
        ['i-users', 20,    '+', 'Ph.D Scholars'],
        ['i-book',  10000, '+', 'Books in Library'],
        ['i-award', 50,    '+', 'Seminars & Conferences'],
    ];

    $star = [
        'name' => 'Alumni Name', 'dept' => 'Department / Programme', 'role' => 'Designation, Organisation',
        'img'  => '/assets/front/imgs/alumni/star.jpg',
        'quote' => 'Being a part of DPG Degree College, Gurugram, has truly been a wonderful journey. I received immense support from the entire department. I will always be grateful for these opportunities and blessings!',
    ];

    $tourVideoId = 'KtfpuHYNkJg';  // 360° video ki YouTube ID
    $voices = [ // name, designation, thumb, youtube id
        ['Guest Name', 'Designation, Organisation', $b(5),  'KtfpuHYNkJg'],
        ['Guest Name', 'Designation, Organisation', $b(6),  'KtfpuHYNkJg'],
        ['Guest Name', 'Designation, Organisation', $b(7),  'KtfpuHYNkJg'],
    ];

    $testimonials = [
        ['Priya Kataria', 'B.A - 1st Year',  'The environment of the college is serene and tranquil. Faculty is approachable and the overall experience has been delightful.', '/assets/front/imgs/testimonials/1.jpg'],
        ['Gavia',         'B.Sc - 2nd Year', 'DPG Degree College teachers make us love our subjects. Infrastructure is amazing and the environment is excellent.', '/assets/front/imgs/testimonials/2.jpg'],
        ['Student Name',  'B.Com - 3rd Year', 'Add your student feedback here.', '/assets/front/imgs/testimonials/3.jpg'],
    ];

    $collabs = [ ['Partner Institution', 27], ['Partner Institution', 28], ['Partner Institution', 29], ['Partner Institution', 30], ['Partner Institution', 31] ];

    $eco = [ ['Infrastructure', 'Modern classrooms, labs and a well-stocked library.', 29], ['Campus Life', 'Clubs, cultural fests and a vibrant student community.', 28], ['Sports', 'Playgrounds and annual sports meets for every student.', 30] ];

    $blogs = [ ['Career Opportunities After B.Com', 18], ['How to Choose the Right Course After 12th', 20], ['Why NAAC Accreditation Matters', 22], ['Scholarship Schemes for Students', 24] ];

    $universe = [ 'Technology', 'Management', 'DPG Institution', 'DPG Institution', 'DPG Institution' ];

    $faqs = [
        ['Is DPG Degree College recognised?', 'DPG Degree College is an autonomous college approved by AICTE and NCTE, affiliated to MDU Rohtak, recognised under 2(f) by UGC and accredited with "A" grade by NAAC.'],
        ['How can I apply for admission?', 'Click the "Apply Now" button on this page, or call our admission helpline at +91-92500-08494.'],
        ['Where is the college located?', 'D.P.G. Degree College, 70A, Delhi-Jaipur Expy, Block A, Sector 34, Gurugram, Haryana.'],
        ['Does the college offer Ph.D programmes?', 'Yes, admissions for the Ph.D programme are open for Session 2026-27. Please check the notice section for details.'],
        ['Can I take a virtual tour of the campus?', 'Yes, you can explore the campus through our 360° virtual tour video on this page.'],
    ];

@endphp

<section class="dpg-sec dpg-about">
    <div class="container">
        <div class="dpg-about__grid">
            <div class="dpg-about__media">
                <img src="/assets/front/imgs/welcome2.jpg" alt="DPG Degree College campus" loading="lazy">
                <span class="dpg-about__badge"><strong>NAAC</strong> 'A' Grade</span>
            </div>
            <div>
                <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Welcome</span>
                <h2 class="dpg-about__title">About DPG Degree College</h2>
                <p class="dpg-about__text">At DPG Degree College, we pride ourselves on our unwavering commitment to academic excellence and holistic development, as evidenced by our esteemed Grade "A" accreditation from NAAC. An autonomous college approved by AICTE and NCTE, affiliated to MDU Rohtak and recognised under 2(f) by UGC.</p>
                <div class="dpg-about__pills"><span>Autonomous</span><span>UGC 2(f)</span><span>AICTE &amp; NCTE</span><span>MDU Rohtak</span></div>
                <a href="#" class="btn-dpg d-inline-flex align-items-center gap-2 mt-4">Read More <svg class="dpg-i"><use href="#i-arrow"/></svg></a>
            </div>
        </div>
    </div>
</section>

<?php 
$deparmentswithname=[
    [
        "name" => "Physical Science Department",
        "img" => "/assets/front/imgs/departments/1.jpeg"
    ],
    [
        "name" => "Life Science Department",
        "img" => "/assets/front/imgs/departments/2.jpeg"
    ],
    [
        "name" => "Computer Science Department",
        "img" => "/assets/front/imgs/departments/3.jpeg"
    ],
    [
        "name" => "Management Department",
        "img" => "/assets/front/imgs/departments/4.jpeg"
    ],
    [
        "name" => "Arts & Humanities Department",
        "img" => "/assets/front/imgs/departments/5.jpeg"
    ],
    [
        "name" => "Commerce Department",
        "img" => "/assets/front/imgs/departments/6.jpeg"
    ],
    [
        "name" => "Department of Journalism and Mass Communication",
        "img" => "/assets/front/imgs/departments/7.jpeg"
    ],

];
?>

<section class="dpg-sec dpg-flow">
    <div class="container">
        <div class="dpg-head dpg-head--light">
            <h2 class="dpg-head__title dpg-head__title--serif">Multiple Disciplines, Infinite Possibilities</h2>
            <p class="dpg-head__sub">With {{ count($deparmentswithname) }} dynamic schools and departments, DPG empowers students with endless opportunities.</p>
        </div>
        <div class="dpg-flow__wrap">
            <button type="button" class="dpg-flow__arrow dpg-flow__arrow--prev" data-flow="prev" aria-label="Previous"><svg class="dpg-i"><use href="#i-left"/></svg></button>
            <div class="dpg-flow__stage">
                @foreach($deparmentswithname as $deparmentswithname)
                <div class="dpg-flow__item">
                    <img src="{{ $deparmentswithname['img'] }}" alt="{{ $deparmentswithname['name'] }}" loading="lazy">
                    <span class="dpg-flow__cap">{{ $deparmentswithname['name'] }}</span>
                </div>
                @endforeach
            </div>
            <button type="button" class="dpg-flow__arrow dpg-flow__arrow--next" data-flow="next" aria-label="Next"><svg class="dpg-i"><use href="#i-right"/></svg></button>
        </div>
        <div class="text-center mt-4"><a href="#" class="btn-dpg">View all Courses</a></div>
    </div>
</section>

<?php
$recruiters=[
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/1.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/2.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/3.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/4.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/5.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/6.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/7.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/8.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/9.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/10.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/11.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/12.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/13.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/14.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/15.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/16.jpeg"
    ],
    [
        "name" => "Recruiters",
        "img" => "/assets/front/imgs/recruiters/17.jpeg"
    ]
];
?>

<section class="dpg-sec dpg-sec--soft dpg-place" id="placements">
    <div class="container">
        <div class="dpg-head">
            <span class="dpg-head__eyebrow">Placements</span>
            <h2 class="dpg-head__title">Career Outcomes</h2>
            <p class="dpg-head__sub">DPG graduates continue to attract opportunities from leading recruiters.</p>
        </div>

        <div class="dpg-career">
            @foreach($career as $c)
            <div class="dpg-career__card">
                <span class="dpg-career__icon"><svg class="dpg-i"><use href="#{{ $c[0] }}"/></svg></span>
                <div class="dpg-career__num">{{ $c[1] }}<span class="dpg-count" data-count="{{ $c[2] }}">{{ $c[2] }}</span>{{ $c[3] }}</div>
                <p class="dpg-career__label">{{ $c[4] }}</p>
            </div>
            @endforeach
        </div>

        <div class="dpg-place__top">
            <a href="#" class="dpg-place__tile" style="--bg: url('{{ $b(16) }}')">
                <h3>Centre for Career Advancement</h3>
                <span class="dpg-place__know"><i><svg class="dpg-i"><use href="#i-arrow"/></svg></i> Know more</span>
            </a>
            <div class="dpg-fade dpg-place__photos" data-auto="3500">
                <div class="dpg-fade__slides">
                    @foreach([17, 20, 21] as $n)
                    <div class="dpg-fade__slide"><img src="{{ $b($n) }}" alt="Placement drive" loading="lazy"></div>
                    @endforeach
                </div>
                <div class="dpg-fade__dots dpg-fade__dots--over">@foreach([1,2,3] as $k)<button type="button" class="dpg-fade__dot" aria-label="Slide {{ $k }}"></button>@endforeach</div>
            </div>
        </div>

        <div class="dpg-strip">
            <div class="dpg-strip__track">
                <div class="dpg-strip__group">
                    @foreach($recruiters as $recruiters)
                    <div class="dpg-strip__logo">
                        <img src="{{$recruiters['img']}}" alt="{{$recruiters['name']}}" loading="lazy">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$reviews=[
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/1.jpg"
    ],
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/2.jpg"
    ],
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/3.jpg"
    ],
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/4.jpg"
    ],
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/5.jpg"
    ],
    [
        "name" => "reviews",
        "img" => "/assets/front/imgs/reviews/6.jpg"
    ],
];
?>

<section class="dpg-sec dpg-stories">
    <div class="container dpg-tabs">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Success Stories</span>
            <h2 class="dpg-head__title">Meet Our Top Achievers</h2>
            <p class="dpg-head__sub">From ambition to achievement — real stories of DPG alumni who made it big.</p>
        </div>
        <div class="dpg-tabs__nav">
            @foreach(array_keys($stories) as $i => $tab)
            <button type="button" class="dpg-tabs__btn {{ $i == 0 ? 'is-active' : '' }}" data-tab="{{ $i }}">{{ $tab }}</button>
            @endforeach
        </div>
        @foreach(array_values($stories) as $i => $s)
        <div class="dpg-tabs__panel dpg-slider {{ $i == 0 ? 'is-active' : '' }}" data-panel="{{ $i }}">
            <div class="dpg-slider__track">
                @foreach($courses as $k => $course)
                <article class="dpg-slider__item dpg-acard">
                    <div class="dpg-acard__img">
                        <span class="dpg-avatar" data-i="A">
                           <img src="/assets/front/imgs/alumni/{{ $i + 1 }}-{{ $k + 1 }}.jpeg" alt="Alumni" loading="lazy">
                        </span>
                    </div>
                    <div class="dpg-acard__body">
                        <h4 class="dpg-acard__name">Alumni Name</h4>
                        <p class="dpg-acard__meta">{{ $course }}</p>
                        <div class="dpg-acard__hl">{{ $s[0] }}</div>
                        <div class="dpg-acard__org">{{ $s[1] }}</div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="dpg-slider__nav">
                <button type="button" class="dpg-slider__btn" data-dir="prev" aria-label="Previous"><svg class="dpg-i"><use href="#i-left"/></svg></button>
                <button type="button" class="dpg-slider__btn" data-dir="next" aria-label="Next"><svg class="dpg-i"><use href="#i-right"/></svg></button>
            </div>
        </div>
        @endforeach
    </div>
</section>

<?php 
$newsltters=[
    [
        "name" => "Physical Science Department",
        "img" => "/assets/front/imgs/newsletters/1.webp"
    ],
    [
        "name" => "Life Science Department",
        "img" => "/assets/front/imgs/newsletters/2.webp"
    ],
    [
        "name" => "Computer Science Department",
        "img" => "/assets/front/imgs/newsletters/3.webp"
    ],
    [
        "name" => "Management Department",
        "img" => "/assets/front/imgs/newsletters/4.webp"
    ],
    [
        "name" => "Arts & Humanities Department",
        "img" => "/assets/front/imgs/newsletters/5.webp"
    ],

];
?>

<section class="dpg-sec dpg-sec--blue dpg-happen">
    <div class="container">
        <div class="dpg-happen__grid">
            <div>
                <h2 class="dpg-bar-title">Latest Happenings</h2>
                <div class="dpg-fade" data-auto="6000">
                    <div class="dpg-fade__slides">
                        @foreach($happen as $h)
                        <div class="dpg-fade__slide">
                            <img class="dpg-happen__img" src="{{ $h[0] }}" alt="{{ $h[1] }}" loading="lazy">
                            <h3 class="dpg-happen__title">{{ $h[1] }}</h3>
                            <p class="dpg-happen__text">{{ $h[2] }}</p>
                            <div class="dpg-happen__btns"><a href="#" class="dpg-btn-sm">Read more</a><a href="#" class="dpg-btn-sm dpg-btn-sm--line">View all</a></div>
                        </div>
                        @endforeach
                    </div>
                    <div class="dpg-fade__nav">
                        <button type="button" class="dpg-round" data-dir="prev" aria-label="Previous"><svg class="dpg-i"><use href="#i-left"/></svg></button>
                        <button type="button" class="dpg-round" data-dir="next" aria-label="Next"><svg class="dpg-i"><use href="#i-right"/></svg></button>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="dpg-bar-title">In the Press</h2>
                <ul class="dpg-press">
                    @foreach($newsltters as $newsltters)
                    <li>
                        <a href="#">
                            <img src="{{$newsltters['img']}}" alt="{{$newsltters['name']}}" class="dpg-press__logo" />
                            <span class="dpg-press__text">{{$newsltters['name']}}</span>
                        </a></li>
                    @endforeach
                </ul>
                <div class="text-end"><a href="#" class="dpg-btn-sm">View all</a></div>
            </div>
        </div>
    </div>
</section>

<section class="dpg-sec dpg-buzz">
    <div class="container">
        <div class="dpg-buzz__grid">
            <a href="#" class="dpg-buzz__a" style="--bg: url('{{ $b(18) }}')"></a>
            <div class="dpg-buzz__card">
                <h2>Campus Buzz</h2>
                <a href="#" class="dpg-place__know"><i><svg class="dpg-i"><use href="#i-arrow"/></svg></i> Life in Pictures</a>
            </div>
            <a href="#" class="dpg-buzz__c" style="--bg: url('{{ $b(20) }}')"></a>
            <a href="#" class="dpg-buzz__d" style="--bg: url('{{ $b(22) }}')"></a>
            <a href="#" class="dpg-buzz__e" style="--bg: url('{{ $b(24) }}')"></a>
        </div>
    </div>
</section>

<section class="dpg-sec dpg-tour">
    <div class="container position-relative">
        <div class="dpg-tour__grid">
            <div>
                <div class="dpg-head dpg-head--left dpg-head--light">
                    <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Virtual Campus Tour</span>
                    <h2 class="dpg-head__title">Experience Our Campus in 360°</h2>
                </div>
                <p class="dpg-tour__text">Can't visit in person? Step inside DPG Degree College from anywhere. Explore classrooms, labs, library and more with an immersive 360° view.</p>
                <ul class="dpg-tour__chips"><li>Classrooms</li><li>Library</li><li>Computer Labs</li><li>Auditorium</li><li>Sports</li></ul>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <button type="button" class="btn-dpg dpg-tour__cta">Start Virtual Tour</button>
                    <a href="#" class="btn-dpg-ghost">Book a Campus Visit</a>
                </div>
            </div>
            <div class="dpg-vid dpg-vid--tour" id="dpgTour" data-video="{{ $tourVideoId }}">
                <img src="{{ $b(12) }}" alt="360 degree campus tour of DPG Degree College" loading="lazy">
                <div class="dpg-vid__shade"></div>
                <span class="dpg-vid__badge">360° VIEW</span>
                <button type="button" class="dpg-vid__play" aria-label="Play 360 degree campus tour"><svg class="dpg-i"><use href="#i-play"/></svg></button>
            </div>
        </div>
    </div>
</section>

<section class="dpg-sec dpg-schools">
    <div class="container">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Academics</span>
            <h2 class="dpg-head__title">Explore Our Schools</h2>
            <p class="dpg-head__sub">Diverse disciplines, one shared promise — excellence that meets the global standards of education.</p>
        </div>
        <div class="dpg-schools__grid">
            <div class="dpg-fade dpg-schools__card" data-auto="4500">
                <div class="dpg-fade__slides">
                    @foreach($disc as $d)
                    <div class="dpg-fade__slide dpg-schools__slide" style="--bg: url('{{ $b($d[1]) }}')">
                        <div>
                            <h3>School of {{ $d[0] }}</h3>
                            <p>Explore programmes, faculty and facilities of the {{ $d[0] }} department.</p>
                            <a href="#" class="dpg-place__know"><i><svg class="dpg-i"><use href="#i-arrow"/></svg></i> Explore</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="dpg-fade__dots dpg-fade__dots--over">@foreach($disc as $k => $d)<button type="button" class="dpg-fade__dot" aria-label="Slide {{ $k + 1 }}"></button>@endforeach</div>
            </div>
            <aside class="dpg-events">
                <h3>Upcoming Events</h3>
                <ul>
                    @foreach($events as $e)
                    <li><span class="dpg-events__date"><b>{{ $e[0] }}</b>{{ $e[1] }}</span><span><strong>{{ $e[2] }}</strong><em>{{ $e[3] }}</em></span></li>
                    @endforeach
                </ul>
                <div class="text-end"><a href="#" class="dpg-btn-sm">View all</a></div>
            </aside>
        </div>
    </div>
</section>

<section class="dpg-sec dpg-sec--soft dpg-research">
    <div class="container">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Research</span>
            <h2 class="dpg-head__title">Research Excellence</h2>
            <p class="dpg-head__sub">Turning knowledge and ideas into discoveries, innovation and real-world impact.</p>
        </div>
        <div class="dpg-research__grid">
            @foreach($research as $r)
            <div class="dpg-research__card">
                <span class="dpg-research__icon"><svg class="dpg-i"><use href="#{{ $r[0] }}"/></svg></span>
                <div class="dpg-research__num"><span class="dpg-count" data-count="{{ $r[1] }}">{{ $r[1] }}</span>{{ $r[2] }}</div>
                <p>{{ $r[3] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<?php 
$ourteam=[
    [
        "name" => "Name Surname",
        "position" => "Chairman",
        "img" => "/assets/front/imgs/ourteams/1-1.jpeg"
    ],
    [
        "name" => "Name Surname",
        "position" => "Director",
        "img" => "/assets/front/imgs/ourteams/1-2.jpeg"
    ],
    [
        "name" => "Name Surname",
        "position" => "Principal",
        "img" => "/assets/front/imgs/ourteams/1-3.jpeg"
    ],
    [
        "name" => "Name Surname",
        "position" => "Vice Principal",
        "img" => "/assets/front/imgs/ourteams/1-4.jpeg"
    ],
    [
        "name" => "Name Surname",
        "position" => "Dean Academics",
        "img" => "/assets/front/imgs/ourteams/1-5.jpeg"
    ],
    [
        "name" => "Name Surname",
        "position" => "Head, Training & Placement",
        "img" => "/assets/front/imgs/ourteams/1-1.jpeg"
    ],

];
?>

<section class="dpg-sec dpg-people">
    <div class="container">
        <div class="dpg-head dpg-head--light">
            <h2 class="dpg-head__title dpg-head__title--gold">Distinguished Personalities</h2>
        </div>
        <div class="dpg-people__grid">
            @foreach($ourteam as $ourteam)
            <article class="dpg-people__card">
                <div class="dpg-people__img">
                    <span class="dpg-avatar">
                        <img src="{{ $ourteam['img'] }}" alt="{{ $ourteam['name'] }}" loading="lazy">
                    </span>
                </div>
                <div class="dpg-people__info">
                    <h3>{{ $ourteam['name'] }}</h3>
                    <span>{{ $ourteam['position'] }}</span>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="dpg-sec dpg-star">
    <div class="container">
        <div class="dpg-star__grid">
            <div class="dpg-star__photo"><span class="dpg-avatar" data-i="{{ mb_substr($star['name'], 0, 1) }}"><img src="{{ $star['img'] }}" alt="{{ $star['name'] }}" loading="lazy" onerror="this.remove()"></span></div>
            <div>
                <h2 class="dpg-bar-title"><span>Star Alumni</span> of the Week</h2>
                <div class="dpg-star__quote">
                    <p>{{ $star['quote'] }}</p>
                    <h3>{{ $star['name'] }}</h3>
                    <span>{{ $star['dept'] }}</span><span>{{ $star['role'] }}</span>
                </div>
            </div>
        </div>
        <div class="text-center mt-4"><a href="#" class="btn-dpg">Alumni Registration</a></div>
    </div>
</section>

<section class="dpg-sec dpg-voices">
    <div class="container">
        <div class="dpg-head dpg-head--light">
            <h2 class="dpg-head__title dpg-head__title--serif">Expert Voices: Industry Leaders at DPG Campus</h2>
        </div>
        <div class="dpg-voices__grid">
            @foreach($voices as $v)
            <div>
                <div class="dpg-vid" data-video="{{ $v[3] }}">
                    <img src="{{ $v[2] }}" alt="{{ $v[0] }}" loading="lazy">
                    <div class="dpg-vid__shade"></div>
                    <button type="button" class="dpg-vid__play dpg-vid__play--sm" aria-label="Play video"><svg class="dpg-i"><use href="#i-play"/></svg></button>
                </div>
                <h4>{{ $v[0] }}</h4><p>{{ $v[1] }}</p>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4"><a href="#" class="btn-dpg-ghost">View All Expert Voices</a></div>
    </div>
</section>

<section class="dpg-sec dpg-sec--soft dpg-testi">
    <div class="container">
        <div class="dpg-head">
            <span class="dpg-head__eyebrow">Voices</span>
            <h2 class="dpg-head__title">Student Testimonials</h2>
            <p class="dpg-head__sub">Real experiences, perspectives, and stories from our students.</p>
        </div>
        <div class="dpg-testi__grid">
            @foreach($testimonials as $t)
            <article class="dpg-testi__card">
                <div class="dpg-testi__avatar"><span class="dpg-avatar" data-i="{{ mb_substr($t[0], 0, 1) }}"><img src="{{ $t[3] }}" alt="{{ $t[0] }}" loading="lazy" onerror="this.remove()"></span></div>
                <h4 class="dpg-testi__name">{{ $t[0] }}</h4>
                <p class="dpg-testi__course">{{ $t[1] }}</p>
                <p class="dpg-testi__text">{{ $t[2] }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="dpg-sec dpg-collab">
    <div class="container">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Partnerships</span>
            <h2 class="dpg-head__title">Academic Collaborations</h2>
            <p class="dpg-head__sub">Partnerships that expand horizons through exchange, programmes and research.</p>
        </div>
        <div class="dpg-slider">
            <div class="dpg-slider__track">
                @foreach($collabs as $c)
                <article class="dpg-slider__item dpg-collab__card" style="--bg: url('{{ $b($c[1]) }}')"><span>{{ $c[0] }}</span></article>
                @endforeach
            </div>
            <div class="dpg-slider__nav">
                <button type="button" class="dpg-slider__btn" data-dir="prev" aria-label="Previous"><svg class="dpg-i"><use href="#i-left"/></svg></button>
                <button type="button" class="dpg-slider__btn" data-dir="next" aria-label="Next"><svg class="dpg-i"><use href="#i-right"/></svg></button>
            </div>
        </div>
    </div>
</section>

<section class="dpg-sec dpg-eco">
    <div class="container">
        <div class="dpg-head dpg-head--light">
            <span class="dpg-head__eyebrow">Campus</span>
            <h2 class="dpg-head__title">Discover The <span>DPG</span> Ecosystem</h2>
            <p class="dpg-head__sub">A campus built for immersive learning and living.</p>
        </div>
        <div class="dpg-eco__grid">
            @foreach($eco as $e)
            <a href="#" class="dpg-eco__card" style="--bg: url('{{ $b($e[2]) }}')">
                <div><h3>{{ $e[0] }}</h3><p>{{ $e[1] }}</p></div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section class="dpg-sec dpg-sec--soft dpg-blog">
    <div class="container">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">Insights</span>
            <h2 class="dpg-head__title">Latest Blogs</h2>
            <p class="dpg-head__sub">Hear it directly from the people who live the experience.</p>
        </div>
        <div class="dpg-blog__grid">
            <a href="#" class="dpg-blog__feat">
                <img src="{{ $b(32) }}" alt="Featured blog" loading="lazy">
                <div><span class="dpg-blog__tag">Featured</span>
                <h3>Top Courses After 12th at DPG Degree College: Eligibility and Career Scope</h3>
                <p>A complete guide to choosing the right undergraduate programme and the careers it leads to.</p></div>
            </a>
            <aside class="dpg-blog__list">
                <h3>Trending Blogs</h3>
                @foreach($blogs as $bl)
                <a href="#"><img src="{{ $b($bl[1]) }}" alt="" loading="lazy"><span>{{ $bl[0] }}</span></a>
                @endforeach
                <div class="text-end"><a href="#" class="dpg-btn-sm">View all</a></div>
            </aside>

        </div>
    </div>
</section>

<section class="dpg-sec dpg-legacy">
    <div class="container">
        <div class="dpg-legacy__grid">
            <div>
                <span class="dpg-head__eyebrow dpg-head__eyebrow--left dpg-head__eyebrow--gold">Our Legacy</span>
                <h2 class="dpg-legacy__title">A Legacy of Learning &amp; Leadership</h2>
                <p>For years, DPG Degree College has been shaping young minds with quality education, strong values and a commitment to community. Our NAAC "A" accreditation reflects the trust students and parents place in us.</p>
                <p>At DPG Degree College, we pride ourselves on our unwavering commitment to academic excellence and holistic development, as evidenced by our esteemed Grade "A" accreditation from NAAC. An autonomous college approved by AICTE and NCTE, affiliated to MDU Rohtak and recognised under 2(f) by UGC.</p>
                <a href="#" class="btn-dpg mt-4 d-inline-block">Read Our Story</a>
            </div>
            <div class="dpg-legacy__img"><img src="/assets/front/imgs/Artboard-1.webp" alt="DPG Degree College building" loading="lazy"></div>
        </div>
        <div class="dpg-universe">
            <h3>House of <span>DPG Universe</span></h3>
            <div class="dpg-universe__grid">
                @foreach($universe as $u)<div class="dpg-universe__item">{{ $u }}</div>@endforeach
            </div>
        </div>
    </div>
</section>

{{-- 18 ===================== FAQ (Bennett) ===================== --}}
<section class="dpg-sec dpg-faq">
    <div class="container">
        <div class="dpg-head dpg-head--left">
            <span class="dpg-head__eyebrow dpg-head__eyebrow--left">FAQs</span>
            <h2 class="dpg-head__title">Frequently Asked Questions</h2>
            <p class="dpg-head__sub">Everything you need to know about DPG Degree College.</p>
        </div>
        <div class="dpg-faq__list">
            @foreach($faqs as $i => $f)
            <details class="dpg-faq__item" @if($i == 0) open @endif>
                <summary>{{ $f[0] }}</summary>
                <p>{{ $f[1] }}</p>
            </details>
            @endforeach
        </div>
    </div>
</section>

{{-- 19 ===================== ADMISSION CTA ===================== --}}
<section class="dpg-cta">
    <div class="container dpg-cta__in">
        <div><h2>Admissions Open · Session 2026-27</h2><p>Begin your journey with DPG Degree College today.</p></div>
        <div class="d-flex flex-wrap gap-3">
            <a href="#" class="dpg-cta__btn">Apply Now</a>
            <a href="tel:+919250008494" class="dpg-cta__btn dpg-cta__btn--line"><svg class="dpg-i"><use href="#i-phone"/></svg> +91-92500-08494</a>
        </div>
    </div>
</section>

<script>
(function () {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    function each(sel, fn) { Array.prototype.forEach.call(document.querySelectorAll(sel), fn); }

    // 1) Counters
    var counters = document.querySelectorAll('.dpg-career .dpg-count, .dpg-research .dpg-count');
    if (counters.length && !reduce && 'IntersectionObserver' in window) {
        var run = function (el) {
            var target = parseInt(el.getAttribute('data-count'), 10) || 0, start = null;
            requestAnimationFrame(function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / 1600, 1), e = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.floor(e * target).toLocaleString('en-IN');
                if (p < 1) requestAnimationFrame(step); else el.textContent = target.toLocaleString('en-IN');
            });
        };
        var io = new IntersectionObserver(function (en) {
            en.forEach(function (x) { if (x.isIntersecting) { run(x.target); io.unobserve(x.target); } });
        }, { threshold: 0.5 });
        Array.prototype.forEach.call(counters, function (el) { el.textContent = '0'; io.observe(el); });
    }

    // 2) Scroll sliders
    each('.dpg-slider', function (w) {
        var track = w.querySelector('.dpg-slider__track');
        function step() {
            var it = track.querySelector('.dpg-slider__item');
            return it ? it.getBoundingClientRect().width + (parseFloat(getComputedStyle(track).columnGap) || 20) : 300;
        }
        each2(w, '.dpg-slider__btn', function (b) {
            b.addEventListener('click', function () {
                track.scrollBy({ left: (b.getAttribute('data-dir') === 'next' ? 1 : -1) * step(), behavior: 'smooth' });
            });
        });
    });
    function each2(root, sel, fn) { Array.prototype.forEach.call(root.querySelectorAll(sel), fn); }

    // 3) Fade sliders (career photos, happenings, schools)
    each('.dpg-fade', function (box) {
        var slides = [].slice.call(box.querySelectorAll('.dpg-fade__slide'));
        var dots = [].slice.call(box.querySelectorAll('.dpg-fade__dot'));
        var i = 0, t, ms = parseInt(box.getAttribute('data-auto'), 10) || 0;
        function go(n) {
            i = (n + slides.length) % slides.length;
            slides.forEach(function (s, k) { s.classList.toggle('is-active', k === i); });
            dots.forEach(function (d, k) { d.classList.toggle('is-active', k === i); });
        }
        function restart() { clearInterval(t); if (ms && !reduce) t = setInterval(function () { go(i + 1); }, ms); }
        each2(box, '[data-dir]', function (b) {
            b.addEventListener('click', function () { go(i + (b.getAttribute('data-dir') === 'next' ? 1 : -1)); restart(); });
        });
        dots.forEach(function (d, k) { d.addEventListener('click', function () { go(k); restart(); }); });
        box.addEventListener('mouseenter', function () { clearInterval(t); });
        box.addEventListener('mouseleave', restart);
        go(0); restart();
    });

    // 4) Coverflow
    each('.dpg-flow', function (f) {
    var stage = f.querySelector('.dpg-flow__stage');
    var items = [].slice.call(f.querySelectorAll('.dpg-flow__item'));
    var n = items.length, a = Math.floor(n / 2), t;

    function render() {
    var w = items[0].offsetWidth;
    var sw = stage.offsetWidth;
    var gap = w * 0.78;
    var lim = Math.max(1, Math.ceil((sw / 2) / gap));

    items.forEach(function (it, i) {
        var d = i - a;
        if (d > n / 2) d -= n;
        if (d < -n / 2) d += n;
        var ad = Math.abs(d);
        it.style.transform = 'translateX(' + (d * gap) + 'px) translateZ(' + (-ad * 140) + 'px) rotateY(' + (-d * 16) + 'deg)';
        it.style.zIndex = 100 - ad;
        it.style.opacity = ad > lim ? 0 : 1;
        it.style.pointerEvents = ad > lim ? 'none' : 'auto';
        it.classList.toggle('is-active', d === 0);
    });
    }

    function go(k) { a = (k + n) % n; render(); }
    function restart() { clearInterval(t); if (!reduce) t = setInterval(function () { go(a + 1); }, 3500); }

    items.forEach(function (it, i) { it.addEventListener('click', function () { go(i); restart(); }); });
    each2(f, '[data-flow]', function (b) {
        b.addEventListener('click', function () { go(a + (b.getAttribute('data-flow') === 'next' ? 1 : -1)); restart(); });
    });
    f.addEventListener('mouseenter', function () { clearInterval(t); });
    f.addEventListener('mouseleave', restart);
    window.addEventListener('resize', render);
    render(); restart();
    });

    // 5) Tabs (success stories)
    each('.dpg-tabs', function (box) {
        var btns = box.querySelectorAll('.dpg-tabs__btn'), panels = box.querySelectorAll('.dpg-tabs__panel');
        Array.prototype.forEach.call(btns, function (b) {
            b.addEventListener('click', function () {
                var k = b.getAttribute('data-tab');
                Array.prototype.forEach.call(btns, function (x) { x.classList.toggle('is-active', x === b); });
                Array.prototype.forEach.call(panels, function (p) { p.classList.toggle('is-active', p.getAttribute('data-panel') === k); });
            });
        });
    });

    // 6) Videos: iframe sirf click par load hota hai
    function loadVideo(v) {
        var id = v.getAttribute('data-video');
        if (!id || id.indexOf('YOUR_') === 0) return;
        v.innerHTML = '<iframe src="https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&modestbranding=1" ' +
            'title="DPG Degree College video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen" allowfullscreen></iframe>';
    }
    each('.dpg-vid', function (v) {
        var p = v.querySelector('.dpg-vid__play');
        if (p) p.addEventListener('click', function () { loadVideo(v); });
    });
    var cta = document.querySelector('.dpg-tour__cta'), tour = document.getElementById('dpgTour');
    if (cta && tour) cta.addEventListener('click', function () { tour.scrollIntoView({ behavior: 'smooth', block: 'center' }); loadVideo(tour); });
})();
</script>


<script>
    (function () {
        var counters = document.querySelectorAll('.dpg-stats .count');
        if (!counters.length) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) return;

        function animate(el) {
            var target = parseInt(el.getAttribute('data-count'), 10) || 0;
            var duration = 1600, start = null;
            function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / duration, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.floor(eased * target).toLocaleString('en-IN');
                if (p < 1) requestAnimationFrame(step);
                else el.textContent = target.toLocaleString('en-IN');
            }
            requestAnimationFrame(step);
        }

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { animate(e.target); io.unobserve(e.target); }
            });
        }, { threshold: 0.4 });

        counters.forEach(function (el) { el.textContent = '0'; io.observe(el); });
    })();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$('.first-hero-section').slick({
    slidesToShow: 1,
    arrows: true,
    dots: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            arrows: false,
            dots: false,
        }
    }]
});
</script>

<script>
(function () {
  var MIN_MS = 2600;   
  var MAX_MS = 8000;   
  var el = document.getElementById('dp');
  if (!el) return;

  var root = document.documentElement;
  var done = false;
  var t0 = Date.now();

  root.classList.add('dp-lock');

  function removeEl() {
    if (el && el.parentNode) el.parentNode.removeChild(el);
  }

  function finish() {
    if (done) return;
    done = true;
    el.classList.add('dp-out');
    root.classList.remove('dp-lock');
    setTimeout(removeEl, 1000);
  }

  function ready() {
    var wait = Math.max(0, MIN_MS - (Date.now() - t0));
    setTimeout(finish, wait);
  }

  if (document.readyState === 'complete') ready();
  else window.addEventListener('load', ready);

  setTimeout(finish, MAX_MS);

  // Back/forward button (bfcache) se aane par preloader atak na jaye
  window.addEventListener('pageshow', function (e) {
    if (e.persisted) {
      done = true;
      root.classList.remove('dp-lock');
      removeEl();
    }
  });
})();
</script>
@endsection