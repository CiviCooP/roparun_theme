<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<?php
$theme_path = drupal_get_path('theme', 'roparun');
?>
<div id="mobile-menu" class="page-loading">

            <ul>
                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11"><a href="https://www.roparun.nl/nl/over-roparun/">Over Roparun</a>
<ul  class="sub-menu">
	<li id="menu-item-11511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11511"><a href="https://www.roparun.nl/nl/over-roparun/geschiedenis-roparun/">Geschiedenis van de Roparun</a></li>
	<li id="menu-item-11512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11512"><a href="https://www.roparun.nl/nl/over-roparun/het-goede-doel/">Het goede doel</a></li>
	<li id="menu-item-11514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11514"><a href="https://www.roparun.nl/nl/over-roparun/het-evenement/">Het evenement</a></li>
	<li id="menu-item-11515" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11515"><a href="https://www.roparun.nl/nl/over-roparun/de-organisatie/">De organisatie</a></li>
	<li id="menu-item-11513" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11513"><a href="https://www.roparun.nl/nl/over-roparun/verantwoording/">Verantwoording</a></li>
</ul>
</li>
<li id="menu-item-543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-543"><a href="https://www.roparun.nl/nl/nieuws/">Nieuws</a></li>
<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23"><a href="https://www.roparun.nl/nl/steun-ons/">Steun ons</a>
<ul  class="sub-menu">
	<li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="https://donaties.roparun.nl/doneren">Doneer nu</a></li>
	<li id="menu-item-11579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11579"><a href="https://www.roparun.nl/nl/steun-ons/sponsoren/">Sponsor Roparun</a></li>
	<li id="menu-item-11578" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11578"><a href="https://www.roparun.nl/nl/steun-ons/vrijwilligers/">Vrijwilligers</a></li>
	<li id="menu-item-11741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11741"><a href="https://www.roparun.nl/nl/steun-ons/verkoopartikelen/">Verkoopartikelen</a></li>
</ul>
</li>
<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-39"><a href="https://www.roparun.nl/nl/doelen/">Doelen</a>
<ul  class="sub-menu">
	<li id="menu-item-11597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11597"><a href="https://www.roparun.nl/nl/doelen/gesteunde-doelen/">Gesteunde doelen</a></li>
	<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="https://www.roparun.nl/nl/doelen/vraag-ondersteuning-aan/">Vraag ondersteuning aan</a></li>
	<li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902"><a href="https://www.roparun.nl/nl/doelen/doel-uitgelicht/">Doel uitgelicht</a></li>
	<li id="menu-item-1291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1291"><a href="https://www.roparun.nl/nl/doelen/vakantiebungalows/">Vakantiebungalows</a></li>
</ul>
</li>
<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-54"><a href="https://www.roparun.nl/nl/teams/">Teams</a>
<ul  class="sub-menu">
	<li id="menu-item-11636" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11636"><a href="https://www.roparun.nl/nl/teams/deelnemers-2018/">Deelnemers 2018 (inschrijving geopend)</a></li>
	<li id="menu-item-11635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11635"><a href="https://www.roparun.nl/nl/teams/deelnemersinformatie/">Deelnemersinformatie</a></li>
	<li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="https://www.roparun.nl/nl/teams/acties-van-teams/">Teamacties</a></li>
	<li id="menu-item-3718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3718"><a href="https://www.roparun.nl/nl/teams/uitleen/">Ondersteuning voor teams</a></li>
</ul>
</li>
<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-53"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/">Op de route</a>
<ul  class="sub-menu">
	<li id="menu-item-8187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8187"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/route-2017/">Route 2018</a></li>
	<li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/doorkomsten/">Doorkomsten</a></li>
	<li id="menu-item-8169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8169"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/moedig-teams-aan/">Toeschouwers</a></li>
</ul>
</li>
<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-52"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/">Uitslagen &#038; Opbrengsten</a>
<ul  class="sub-menu">
	<li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-226"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/resultaten-tot-nu-toe/">Resultaten tot nu toe</a></li>
	<li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/status-opbrengsten/">Status opbrengsten 2018</a></li>
	<li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/loterij/">Loterij</a></li>
</ul>
</li>
<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-51"><a href="https://www.roparun.nl/nl/roparun-in-beeld/">Volg Roparun!</a>
<ul  class="sub-menu">
	<li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="https://www.roparun.nl/nl/roparun-in-beeld/fotos/">Foto&#8217;s &#038; Video&#8217;s</a></li>
	<li id="menu-item-11769" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11769"><a href="https://www.roparun.nl/nl/roparun-in-beeld/roparun-radio/">Roparunradio</a></li>
	<li id="menu-item-11774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11774"><a href="https://www.roparun.nl/nl/roparun-in-beeld/social-media/">Social media</a></li>
</ul>
</li>
<li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-60"><a href="https://www.roparun.nl/nl/contact/">Contact</a>
<ul  class="sub-menu">
	<li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-233"><a href="https://www.roparun.nl/nl/contact/contactgegevens/">Contactgegevens</a></li>
	<li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a href="https://www.roparun.nl/nl/contact/vacatures/">Vacatures</a></li>
	<li id="menu-item-11990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11990"><a href="https://www.roparun.nl/nl/contact/perspagina/">Perspagina</a></li>
</ul>
</li>
            </ul>

            
                                    <div class="language_selector">

                        <div class="active">
                                                            <a href="javascript:void(0);">
                                    <img class="language_flag" src="<?php echo $theme_path; ?>/img/nl.png">
                                    <span>Nederlands</span>
                                </a>
                                                    </div>

                        <div class="languages">
                            
                                <a href="https://www.roparun.nl/en/">
                                    <img class="language_flag" src="<?php echo $theme_path; ?>/img/en.png">
                                    <span>English</span>
                                </a>

                            
                                <a href="https://www.roparun.nl/de/">
                                    <img class="language_flag" src="<?php echo $theme_path; ?>/img/de.png">
                                    <span>Deutsch</span>
                                </a>

                            
                                <a href="https://www.roparun.nl/fr/">
                                    <img class="language_flag" src="<?php echo $theme_path; ?>/img/fr.png">
                                    <span>Français</span>
                                </a>

                                                    </div>
                    </div>
                
            
        </div>

<div class="mm-page mm-slideout">
	<div id="website-container">
		<header>
    	<nav id="nav-top">
                <ul id="top-menu">
                    <li class="menu-top-search">
                        <form role="search" method="get" action="https://www.roparun.nl/nl/" id="menu-top-search-form">
                            <input type="text" value="" name="s" id="s1" placeholder="Zoeken..."/>
                            <input type="submit" value="" name="menu-top-search-submit" id="menu-top-search-submit"/>
                            <div class="clearfix"></div>
                        </form>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-60"><a href="https://www.roparun.nl/nl/contact/">Contact</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-233"><a href="https://www.roparun.nl/nl/contact/contactgegevens/">Contactgegevens</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a href="https://www.roparun.nl/nl/contact/vacatures/">Vacatures</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11990"><a href="https://www.roparun.nl/nl/contact/perspagina/">Perspagina</a></li>
</ul>
</li>

                    
                                                    <ul class="language_selector">

                                                                <li class="active">
                                    <a href="javascript:void(0);">
                                        <img class="language_flag" src="<?php echo $theme_path; ?>/img/nl.png">
                                        <span>Nederlands</span>
                                    </a>
                                </li>
                                
                                <ul class="languages">
                                                                            <li>
                                            <a href="https://www.roparun.nl/en/">
                                                <img class="language_flag" src="<?php echo $theme_path; ?>/img/en.png">
                                                <span>English</span>
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://www.roparun.nl/de/">
                                                <img class="language_flag" src="<?php echo $theme_path; ?>/img/de.png">
                                                <span>Deutsch</span>
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://www.roparun.nl/fr/">
                                                <img class="language_flag" src="<?php echo $theme_path; ?>/img/fr.png">
                                                <span>Français</span>
                                            </a>
                                        </li>
                                                                    </ul>
                            </ul>
                        
                                    </ul>
            </nav>

            <nav id="nav-bottom">
                <ul id="main-menu" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11"><a href="https://www.roparun.nl/nl/over-roparun/">Over Roparun</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11511"><a href="https://www.roparun.nl/nl/over-roparun/geschiedenis-roparun/">Geschiedenis van de Roparun</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11512"><a href="https://www.roparun.nl/nl/over-roparun/het-goede-doel/">Het goede doel</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11514"><a href="https://www.roparun.nl/nl/over-roparun/het-evenement/">Het evenement</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11515"><a href="https://www.roparun.nl/nl/over-roparun/de-organisatie/">De organisatie</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11513"><a href="https://www.roparun.nl/nl/over-roparun/verantwoording/">Verantwoording</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-543"><a href="https://www.roparun.nl/nl/nieuws/">Nieuws</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23"><a href="https://www.roparun.nl/nl/steun-ons/">Steun ons</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="https://donaties.roparun.nl/doneren">Doneer nu</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11579"><a href="https://www.roparun.nl/nl/steun-ons/sponsoren/">Sponsor Roparun</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11578"><a href="https://www.roparun.nl/nl/steun-ons/vrijwilligers/">Vrijwilligers</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11741"><a href="https://www.roparun.nl/nl/steun-ons/verkoopartikelen/">Verkoopartikelen</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-39"><a href="https://www.roparun.nl/nl/doelen/">Doelen</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11597"><a href="https://www.roparun.nl/nl/doelen/gesteunde-doelen/">Gesteunde doelen</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="https://www.roparun.nl/nl/doelen/vraag-ondersteuning-aan/">Vraag ondersteuning aan</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902"><a href="https://www.roparun.nl/nl/doelen/doel-uitgelicht/">Doel uitgelicht</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1291"><a href="https://www.roparun.nl/nl/doelen/vakantiebungalows/">Vakantiebungalows</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-54"><a href="https://www.roparun.nl/nl/teams/">Teams</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11636"><a href="https://www.roparun.nl/nl/teams/deelnemers-2018/">Deelnemers 2018 (inschrijving geopend)</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11635"><a href="https://www.roparun.nl/nl/teams/deelnemersinformatie/">Deelnemersinformatie</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="https://www.roparun.nl/nl/teams/acties-van-teams/">Teamacties</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3718"><a href="https://www.roparun.nl/nl/teams/uitleen/">Ondersteuning voor teams</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-53"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/">Op de route</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8187"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/route-2017/">Route 2018</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/doorkomsten/">Doorkomsten</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8169"><a href="https://www.roparun.nl/nl/onderweg-op-de-route/moedig-teams-aan/">Toeschouwers</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-52"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/">Uitslagen &#038; Opbrengsten</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-226"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/resultaten-tot-nu-toe/">Resultaten tot nu toe</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/status-opbrengsten/">Status opbrengsten 2018</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="https://www.roparun.nl/nl/uitslagen-en-opbrengsten/loterij/">Loterij</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-51"><a href="https://www.roparun.nl/nl/roparun-in-beeld/">Volg Roparun!</a>
<ul  class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="https://www.roparun.nl/nl/roparun-in-beeld/fotos/">Foto&#8217;s &#038; Video&#8217;s</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11769"><a href="https://www.roparun.nl/nl/roparun-in-beeld/roparun-radio/">Roparunradio</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11774"><a href="https://www.roparun.nl/nl/roparun-in-beeld/social-media/">Social media</a></li>
</ul>
</li>
</ul>
                                                            <a href="https://donaties.roparun.nl/doneren" title="Doneer nu" class="btn btn-primary menu-cta-btn">Doneer nu</a>
                                    
                <div class="menu-bottom-search">
                    <form role="search" method="get" action="https://www.roparun.nl/nl/" id="menu-bottom-search-form">
                        <input type="text" value="" name="s" id="s2" placeholder="Zoeken..."/>
                        <input type="submit" value="" name="menu-top-search-submit" id="menu-bottom-search-submit"/>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </nav>

    <a href="https://www.roparun.nl" title="Roparun" id="logo"><img src="<?php echo $theme_path; ?>/img/logo-roparun.jpg" alt="Roparun" data-pin-no-hover="true"/></a>
    <a href="#mobile-menu" id="nav-mobile-menu-btn"><span></span><span></span><span></span></a>
</header>

<div class="main-container <?php print $container_class; ?>">

<div class="clearfix"></div>
<div class="website-content">


<div class="container">
  <div class="row padding-top-bottom-sm">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
</div></div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-1" id="footer-logo">
                <img src="<?php echo $theme_path; ?>/img/logo-roparun-rond.png" alt="Roparun"/><br class="hidden-sm hidden-xs">
                <img src="<?php echo $theme_path; ?>/img/logo-CBF-keurmerk-rond.png" alt="CBF Keurmerk"/>
            </div>
<div class="col-md-2 hidden-xs hidden-sm">
    <nav>
        <ul id="menu-footermenu-1" class="menu"><li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="https://www.roparun.nl/nl/over-roparun/">Over Roparun</a></li>
<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="https://www.roparun.nl/nl/steun-ons/">Steun ons</a></li>
<li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="https://www.roparun.nl/nl/doelen/">Doelen</a></li>
<li id="menu-item-11745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11745"><a href="https://www.roparun.nl/nl/over-roparun/verantwoording/">Verantwoording</a></li>
<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="https://www.roparun.nl/nl/teams/">Teams</a></li>
</ul>    </nav>
</div>
<div class="col-md-2 hidden-xs hidden-sm">
    <nav>
        <ul id="menu-footermenu-2" class="menu"><li id="menu-item-11748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11748"><a href="https://www.roparun.nl/nl/roparun-in-beeld/roparun-radio/">Roparunradio</a></li>
<li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="https://www.roparun.nl/nl/contact/">Contact</a></li>
<li id="menu-item-11796" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11796"><a href="https://www.roparun.nl/nl/contact/vacatures/">Vacatures</a></li>
</ul>    </nav>
</div>
<div class="col-md-2 hidden-xs hidden-sm">
    <nav>
        <ul id="menu-footermenu-3" class="menu"><li id="menu-item-11746" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11746"><a href="https://www.roparun.nl/nl/teams/deelnemers-2018/">Inschrijven</a></li>
<li id="menu-item-11747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11747"><a href="https://www.roparun.nl/nl/steun-ons/doneren/">Doneren</a></li>
<li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a href="https://www.roparun.nl/nl/steun-ons/verkoopartikelen/">Verkoopartikelen</a></li>
</ul>    </nav>
</div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
                        <div class="row">

                            <div class="col-sm-6 col-md-12">
                                <b>Stichting Roparun</b><br/>
                                Jan van Galenstraat 40<br/>
                                3115 JG Schiedam
                            </div>

                            <div class="col-sm-6 col-md-12">
                                &nbsp;<br/>
                                (+31)10 4341165<br/>
                                <script type="text/javascript">
                                    var emailriddlerarray = [105, 110, 102, 111, 64, 114, 111, 112, 97, 114, 117, 110, 46, 110, 108];
                                    var encryptedemail_id15 = '';
                                    for (var i = 0; i < emailriddlerarray.length; i++) {
                                        encryptedemail_id15 += String.fromCharCode(emailriddlerarray[i]);
                                    }
                                    document.write('<a href="mailto:' + encryptedemail_id15 + '">' + encryptedemail_id15 + '</a>')
                                </script><br/>
                                &nbsp;
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-7 col-md-8" id="footer-copyright">
                        &copy; 2017 Stichting Roparun | Alle rechten voorbehouden                    </div>

                    <div class="col-sm-5 col-md-4">
                        <div id="footer-social-icons">
                            <a href="https://instagram.com/roparun/" title="Roparun op Instagram" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-instagram.png" alt="Roparun op Instagram"/></a>
                            <a href="https://twitter.com/#!/stg_roparun" title="Roparun op Twitter" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-twitter.png" alt="Roparun op Twitter"/></a>
                            <a href="https://www.facebook.com/Roparun" title="Roparun op Facebook" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-facebook.png" alt="Roparun op Facebook"/></a>
                            <a href="https://nl.linkedin.com/company/stichting-roparun" title="Roparun op Linkedin" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-linkedin.png" alt="Roparun op Linkedin"/></a>
                            <a href="https://nl.pinterest.com/stgroparun/" title="Roparun op Pinterest" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-pinterest.png" alt="Roparun op Pinterest"/></a>
                            <a href="https://www.youtube.com/user/stichtingroparun" title="Roparun op YouTube" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-youtube.png" alt="Roparun op YouTube"/></a>
                            <a href="https://www.roparun.nl/nl/feed/rss/" title="RSS" target="_blank"><img src="<?php echo $theme_path; ?>/img/icon-rss.png" alt="RSS" class=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</div></div>
