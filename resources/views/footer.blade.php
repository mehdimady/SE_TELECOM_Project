
<footer class="footer page-section-pt black-bg mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase text-center text-md-left">SE TELECOM</h6>
                    <ul class="footer-ul">
                        <li class="text-center text-md-left"><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="text-center text-md-left"><a href="{{ url('/#decouvrir') }}">A Propos</a></li>
                        <li class="text-center text-md-left"><a href="{{ url('/#prestations') }}">Nos Prestations</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase text-center text-md-left">Liens utiles</h6>
                    <ul class="footer-ul">
                        <li class="text-center text-md-left"><a href="{{route('shop')}}" target="_blank">Le Shop</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 xs-mb-30">
                <h6 class="text-white mb-30 mt-10 text-uppercase text-center text-md-left">Nous Contacter</h6>
                <ul class="addresss-info footer-ul">
                    <li class="text-center text-md-left d-flex justify-content-center d-md-block"><i class="fa fa-map-marker"></i>
                        <p>15, Rue Des Fusillés 59280 Armentières</p>
                    </li>
                    <li class="text-center text-md-left  d-flex justify-content-center d-md-block"
                        id="mail-contact"><i class="fa fa-envelope-o"></i>E-mail : wacomady@gmail.com</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6 ">
                <h6 class="text-white mb-30 mt-10 text-uppercase text-center text-md-left">Abonnez-vous à notre
                    Newsletter</h6>
                <p class="mb-30 text-center text-md-left">Inscrivez-vous avec votre adresse e-mail afin de recevoir
                    nos actualités.</p>
                <div class="footer-Newsletter">

                    <!-- Begin Mailchimp Signup Form -->


                    <div id="mc_embed_signup">
                        <form action="" method="POST">
                           



                            <div>


                                <div class="text-center">
                                    <div class="field-group">
                                        <input type="email" placeholder="Adresse E-mail" class="form-control footer-control"
                                            autocapitalize="off" autocorrect="off" name="newsletter" id="newsletter"
                                            size="25" value="">


                                    </div>

                                </div>

                            </div>
                            <div class="row justify-content-around">
                                <div class="submit_container col-6 clear text-center">
                                    <input type="submit"
                                        class=" button button-border mt-20 form-button "
                                        name="submit" value="SOUSCRIRE">
                                </div>
                        
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->

                </div>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="mt-15"> ©Copyright <span id="copyright">
                           
                        </span> <a class="footer-link" href=""> SE TELECOM </a> All Rights Reserved </p>
                </div>
                <div class="col-lg-6 col-md-6 text-left text-md-right">
                    <div class="social-icons color-hover mt-10">
                        <ul class="footer-ul">
                            <li class="social-linkedin"><a href="https://fr.linkedin.com/"
                                    target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
      </a>
</footer>
<script>
    document.getElementById('copyright').appendChild(document.createTextNode(new Date()
        .getFullYear()))
</script>
