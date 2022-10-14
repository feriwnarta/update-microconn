<!-- Section Home -->
<section id="home">
    <div class="container d-flex justify-content-center">
        <div class="row ">
            <div class="col-lg-7">
                <div class="title">
                    <h1>Welcome To Microconn</h1>
                    <h5>
                        Ignite your passion through digitalization,<br />
                        Let's Start Your Business.
                    </h5>
                    <button class="btn btn-home col-12 col-lg-3" width="120px" height="32px">
                        Let's Talk
                    </button>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= BASE_URL; ?>/assets/img/icon.svg" alt="" width="548px" height="396px" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<!-- End OF Section Home -->

<!-- Section What We Do -->
<section id="wedo" style="margin-top: 164px">
    <div class="container  text-center">
        <div class="row ms-0">
            <div class="col title-section">What We Do</div>
        </div>
        <div class="row text-center what-we-do ms-0">
            <div class="col-12 col-lg-3">
                <img src="assets/img/Product-Design.svg" alt="" class="mt-3" />
                <div class="body-card">
                    <div class="title-card">Product Design</div>
                    <div class="text-card">
                        UI/UX Design, Prototype, Micro Interaction, Landing Pages,
                        Visual Design, Design System
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <img src="assets/img/Development.svg" alt="" />
                <div class="body-card">
                    <div class="title-card">Development</div>
                    <div class="text-card">
                        Web Development, Mobile App Flutter Development, HTML / CSS
                        Responsive Website, ERP System
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <img src="assets/img/Digital-Marketing.svg" alt="" />
                <div class="body-card">
                    <div class="title-card">Digital Marketing</div>
                    <div class="text-card">
                        SEO, Social Media Marketing Optimization, Visual Content
                        Production, Copy Writing
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <img src="assets/img/Branding.svg" alt="" />
                <div class="body-card">
                    <div class="title-card">Branding</div>
                    <div class="text-card">
                        Icon & Logos, Character Design, Marketing Materials Digital
                        Content
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Section What We Do -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open modal for @mdo</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-block" style="width: auto;">
                    <div class="form-group mb-3">
                        <label for="labelname">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="What's Your Name ?">
                    </div>
                    <div class="form-group mb-3">
                        <label for="labelemail">Email Address</label>
                        <input type="text" class="form-control" id="labelemail" placeholder="Input Your Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Project Detail</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell about your great project"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-modal-cancel" data-bs-dismiss="modal" class="col-lg-6">Cancel</button>
                <button type="button" class="btn btn-modal-lets-talk " class="col-lg-6">Send message</button>
            </div>
        </div>
    </div>
</div>