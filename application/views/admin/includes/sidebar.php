<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'members') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/members') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Members</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'orders') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/orders') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Orders</span><span class="badge badge-info"><?=new_orders()?></span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'contact' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/contact') ?>">
                    <i class="fa fa-comments"></i>
                    <span class="title">Manage Contacts</span><span class="badge badge-success"><?=new_messages()?></span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about_us') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about_us') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'packages') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/packages') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Packages</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'testimonials') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/testimonials') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Testimonials</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'faq') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/faq') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Faq's</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'signin') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/signin') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Signin</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'signup') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/signup') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Signup</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'forgot_password') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/forgot_password') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Forgot Password</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'reset_password') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/reset_password') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Reset Password</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'terms_conditions') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/terms_conditions') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Terms & Conditions</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'privacy_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/privacy_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Privacy Policy</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'refund_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/refund_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Refund Policy</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'footer') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/footer') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Manage Footer</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'testimonials' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/testimonials') ?>">
                    <i class="fa fa-comments"></i>
                    <span class="title">Manage Testimonials</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'faq') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/faq') ?>">
                    <i class="fa fa-th-list"></i>
                    <span class="title">Manage FAQ's</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'newsletter') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/newsletter') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Newsletter</span><span class="badge badge-danger"><?=new_subscribers()?></span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'packages') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/packages') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Manage Packages</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/meta-info') ?>">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>