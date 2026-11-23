@php
$f_adm   = ['Admission 2026-27', 'How To Apply', 'List of Courses', 'Scholarship', 'Brochure', 'FAQ'];
$f_imp   = ['Anti-Ragging Committee', 'MDU Rohtak', 'UGC', 'AICTE Link for LOA and EOA', 'IGNOU', 'IREED', 'Privacy Policy'];
$f_use   = ['Subject Combinations', 'How to Reach Us', 'Committees', 'Student Feedback', 'Faculty Feedback', 'Online Grievance', 'Grievance & Redressal Cell', 'Internal Complaint Committee'];
$f_con   = ['Contact Us', 'ERP Login', 'Information Corner', 'Examination', 'IQAC', 'NAAC'];
$f_grow  = ['Placements', 'Alumni', 'Achievements', 'Photo Gallery', 'Feedback'];
$f_learn = ['Research', 'Infrastructure', 'E-Learning', 'IGNOU Study Center', 'ITEP', 'NIRF Data'];
@endphp
<footer class="dpg-footer">
    <div class="container">
        <div class="dpg-footer__news">
            <div><h3>Subscribe to our newsletter</h3><p>Get the latest news and updates from DPG Degree College.</p></div>
            <form class="dpg-footer__form" onsubmit="return false">
                <input type="email" placeholder="Enter your email" aria-label="Email address">
                <button type="submit">Subscribe</button>
            </form>
        </div>

        <div class="dpg-footer__grid">
            @foreach([['Admissions', $f_adm], ['Important Links', $f_imp], ['Useful Links', $f_use], ['Connect With Us', $f_con], ['Grow With Us', $f_grow], ['Learn With Us', $f_learn]] as $col)
            <div>
                <h3 class="dpg-footer__title">{{ $col[0] }}</h3>
                <ul class="dpg-footer__list">@foreach($col[1] as $l)<li><a href="#">{{ $l }}</a></li>@endforeach</ul>
            </div>
            @endforeach
            <div class="dpg-footer__contact">
                <div class="dpg-footer__item"><i><svg class="dpg-i"><use href="#i-pin"/></svg></i><div>D.P.G. Degree College, 70A, Delhi-Jaipur Expy, Block A, Sector 34, Gurugram, Haryana<br><a href="#">Campus Map</a> &nbsp;|&nbsp; <a href="#">Get Directions</a></div></div>
                <div class="dpg-footer__item"><i><svg class="dpg-i"><use href="#i-phone"/></svg></i><div>For admission inquiry: <a href="tel:+919250008494">+91-92500-08494</a><br>For Admin/IGNOU: <a href="tel:+919717217335">+91-971-721-7335</a></div></div>
                <div class="dpg-footer__map"><iframe src="https://www.google.com/maps?q=DPG+Degree+College+Gurugram&output=embed" title="DPG Degree College location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>

        <div class="dpg-footer__brand">
            <div class="dpg-footer__logo"><img src="/assets/logo.webp" alt="DPG Degree College" loading="lazy"><span>"NAAC Accredited College" · Affiliated to State University</span></div>
            <div class="dpg-footer__social">
                <a href="#" aria-label="Facebook"><svg class="dpg-i"><use href="#i-fb"/></svg></a>
                <a href="#" aria-label="Instagram"><svg class="dpg-i"><use href="#i-ig"/></svg></a>
                <a href="#" aria-label="YouTube"><svg class="dpg-i"><use href="#i-yt"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg class="dpg-i"><use href="#i-in"/></svg></a>
            </div>
        </div>
    </div>
    <div class="dpg-footer__bar">
        <div class="container d-flex flex-wrap justify-content-between gap-2">
            <span>Copyrights &copy; {{ date('Y') }} D.P.G. Degree College, Gurugram. All Rights Reserved.</span>
            <span>Website Designed By : <a href="https://inkadvertising.in/" target="_blank">INK Advertising Pvt. Ltd.</a></span>
        </div>
    </div>
</footer>

