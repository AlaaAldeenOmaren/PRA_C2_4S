<footer class="bg-dark text-light mt-auto">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="mb-2">Over ons</h5>
                <p class="small mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque esse,
                    reprehenderit illum ad culpa nobis rerum animi earum.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="mb-2">Contact</h5>
                <ul class="list-unstyled small mb-0">
                    <li>Adres: Straat 123, 1000 AA Stad</li>
                    <li>Telefoon: +31 6 12 34 56 78</li>
                    <li>Email: info@example.com</li>
                    <li class="mt-2">
                        <a class="nav-link contact-btn {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="mb-2">Volg ons</h5>
                <div class="d-flex gap-2">
                    <a href="#" class="text-light">Facebook</a>
                    <a href="#" class="text-light">Twitter</a>
                    <a href="#" class="text-light">Instagram</a>
                    <a href="#" class="text-light">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="border-top border-secondary mt-4 pt-3 text-center small">
            © {{ __('misc.copyright', ['year' => date('Y')]) }}
        </div>
    </div>
</footer>



<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30506707-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<script language="Javascript" type="text/javascript">
    if (top.location != self.location) {
        top.location = self.location.href
    }
</script>
