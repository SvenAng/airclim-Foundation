<!--.page -->

<div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">
        
        <!-- Mobil-->
        <div id="mobilmeny" class="">
            <?php print render($page['mobilmeny']); ?>
        </div>
        <!-- end Mobil-->
        
        
        
        <div class="header-inner row">
            
            <div class="column small-9 medium-7">
                <!-- Title, slogan and menu -->
                <?php if ($alt_header): ?>
                <section class="row <?php print $alt_header_classes; ?>">
                    <?php if ($linked_logo): print $linked_logo; endif; ?>
                </section>
                <?php endif; ?>
                <!-- End title, slogan and menu -->
            </div>    
            <div class="column medium-5 show-for-medium-up">
                <nav class="top-meny">
                    <?php print render($page['top_meny']); ?>
                </nav>

                <div class="top-search">
                    <?php print render($page['top_search']); ?>
                </div>
            </div>
            
            <div class="m-btn column small-3 show-for-small-only">
                <a id="nav-toggle" href="#"><span></span></a>
<!--            
                <a href="#" class="mobile-nav-trigger">
                    <span class="line-wrapper">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        
                    </span>
                </a>
-->
            </div>
            
        </div>
        
        <section class="l-header-region show-for-medium-up">
            <div class="header-region-inner row">
                <div class="columns">
                    <?php print render($page['header']); ?>
                </div>
            </div>
        </section>
        
    
        
        
    </header>
    

    <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured row">
        <div class="columns">
            <?php print render($page['featured']); ?>
        </div>
    </section>
    <!--/.l-featured -->
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
        <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
        </div>
    </section>
    <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
        <div class="columns">
            <?php print render($page['help']); ?>
        </div>
    </section>
    <!--/.l-help -->
    <?php endif; ?>

    <!--.l-main -->
    <main role="main" class="row l-main">
        <!-- .l-main region -->
        <div class="<?php print $main_grid; ?> main columns">
            <?php if (!empty($page['highlighted'])): ?>
            <div class="highlight panel callout">
                <?php print render($page['highlighted']); ?>
            </div>
            <?php endif; ?>

            <a id="main-content"></a>

            <?php if ($breadcrumb): print $breadcrumb; endif; ?>

            <?php if ($title): ?>
            <?php print render($title_prefix); ?>
            <h1 id="page-title" class="title"><?php print $title; ?></h1>
            <?php print render($title_suffix); ?>
            <?php endif; ?>

            <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
            <?php endif; ?>

            <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
        </div>
        <!--/.l-main region -->

        <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
            <?php print render($page['sidebar_first']); ?>
        </aside>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
            <?php print render($page['sidebar_second']); ?>
        </aside>
        <?php endif; ?>
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
            <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
            <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
            <?php print render($page['triptych_last']); ?>
        </div>
    </section>
    <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-3 columns">
            <?php print render($page['footer_firstcolumn']); ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-3 columns">
            <?php print render($page['footer_secondcolumn']); ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third medium-3 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
        </div>
        <?php endif; ?>
    </section>
    <!--/.footer-columns-->
    <?php endif; ?>

    <!--.l-footer -->
    <footer class="l-footer panel row" role="contentinfo">
        <?php if (!empty($page['footer'])): ?>
        <div class="footer columns">
            <?php print render($page['footer']); ?>
        </div>
        <?php endif; ?>

        <?php if ($site_name) : ?>
        <div class="copyright columns">
            &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
        </div>
        <?php endif; ?>
    </footer>
    <!--/.l-footer -->

    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
