<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
global $user;
 global $language ;
 $lang = $language->language;
  if ($lang == 'uk') { $lang = 'ua'; }
?>
<div id="page">
    <!--(bake parts/header.php)-->
    
    <div id="mcw">
        <div class="main-container">
        
          <header role="banner" id="page-header">
        
            <?php print render($page['header']); ?>
          </header> <!-- /#page-header -->
        
          <div class="">
              <div class="region region-content">
                <section id="azpLocation">

                    <div class="azp-location">
                        <div class="azp-location-wrap">
                            <div class="c">
                                <p>Total square of «Art-zavod Platforma» – <b>120 000 м<sup>2</sup></b><br>.
                                    Work/business space (offices, coworking) – <b>25 000 м<sup>2</sup></b><br>.
                                    Closed exhibition areas, shops, galleries, art spaces – <b>16 000 м<sup>2</sup></b><br>.
                                    Event spaces for festivals, conferences, hackathons, concerts and markets – <b>60 000 м<sup>2</sup></b><br>.
                                    Space for entertainment and recreation – <b>10 000 м<sup>2</sup></b><br>.
                                </p>
                            </div>
                            <div class="links">
                                <a href="#mapImage" class="azp-button">Details</a>
                                <a href="/sites/default/files/Loft_presentation_mini.pdf" target="_blank">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <div id="mapImage">
                        <div class="imgContainer">
                            <img class="mapImage" src="/sites/default/files/map.jpg" />
                            <a href="#" data-toggle="modal" data-target="#modalPlace1"><span data-x="810" data-y="170" class="mapDot badge">1</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace2"><span data-x="600" data-y="237" class="mapDot badge">2</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace31"><span data-x="1104" data-y="211" class="mapDot badge">3.1</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace32"><span data-x="1245" data-y="136" class="mapDot badge">3.2</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace33"><span data-x="1365" data-y="84" class="mapDot badge">3.3</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace34"><span data-x="1477" data-y="412" class="mapDot badge">3.4</span></a>
                                       
                            <a href="#" data-toggle="modal" data-target="#modalPlace4"><span data-x="1218" data-y="475" class="mapDot badge">ART-DOM</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace6"><span data-x="994" data-y="404" class="mapDot badge">6</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace7"><span data-x="1005" data-y="300" class="mapDot badge">7</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace8"><span data-x="1500" data-y="588" class="mapDot badge">Coworking «Platforma»</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace91"><span data-x="1186" data-y="202" class="mapDot badge">9.1</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace92"><span data-x="1312" data-y="153" class="mapDot badge">9.2</span></a>
                            <a href="#" data-toggle="modal" data-target="#modalPlace21"><span data-x="799" data-y="64" class="mapDot badge">21</span></a>

                            <a href="#" data-toggle="modal" data-target="#modalPlaceLB"><span data-x="633" data-y="123" class="mapDot badge">B</span></a>

                            <a href="#" data-toggle="modal" data-target="#modalPlaceLoft"><span data-x="1190" data-y="615" class="mapDot badge">LOFT</span></a>
                        </div>
                    </div>
                </section> 
              </div> 
          </div>
        </div>
    </div>
</div>

<!--(bake parts/footer.php)-->

<div id="mapLegend">
    <div class="myModal normal modal fade" id="modalPlace1" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabel">
      <div class="modal-dialog container" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            <h4 class="modal-title" id="modalPlace1">Парк</h4>
          </div>
          <div class="modal-body">
            <div class="place place1">
                <?php $nnode = node_load(559); ?>
                <h3><?php print $nnode->title; ?></h3>
                <?php
                    $prepared_node = node_view($nnode, 'teaser');
                    $rendered_teaser = render($prepared_node);
                    print $rendered_teaser;
                 ?>
               </div>
            </div>
        </div>
      </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace2" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe2">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace2">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place2">
                        <?php $nnode = node_load(560); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace31" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe31">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace31">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place31">
                        <?php $nnode = node_load(561); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace32" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe32">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace32">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place32">
                        <?php $nnode = node_load(564); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace33" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe33">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace33">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place33">
                        <?php $nnode = node_load(563); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace34" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe34">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace34">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place34">
                        <?php $nnode = node_load(562); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace4" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe4">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace4">Галерея Арт-Дом</h4>
                </div>
                <div class="modal-body">
                    <div class="place place4">
                        <?php $nnode = node_load(565); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace6" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe6">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace6">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place6">
                        <?php $nnode = node_load(1085); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace7" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe7">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace7">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place7">
                        <?php $nnode = node_load(567); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace8" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe8">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace8">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place8">
                        <?php $nnode = node_load(568); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace91" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe91">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace91">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place91">
                        <?php $nnode = node_load(569); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace92" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe92">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace92">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place92">
                        <?php $nnode = node_load(570); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlace21" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabe21">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlace21">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place21">
                        <?php $nnode = node_load(571); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                            $prepared_node = node_view($nnode, 'teaser');
                            $rendered_teaser = render($prepared_node);
                            print $rendered_teaser;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlaceLB" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabeLB">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlaceLB">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place21">
                        <?php $nnode = node_load(1080); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                        $prepared_node = node_view($nnode, 'teaser');
                        $rendered_teaser = render($prepared_node);
                        print $rendered_teaser;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="myModal normal modal fade" id="modalPlaceLoft" tabindex="-1" role="dialog" aria-labelledby="modalPlacelLabeLoft">
        <div class="modal-dialog container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title" id="modalPlaceLoft">Pop-Up Beach</h4>
                </div>
                <div class="modal-body">
                    <div class="place place21">
                        <?php $nnode = node_load(566); ?>
                        <h3><?php print $nnode->title; ?></h3>
                        <?php
                        $prepared_node = node_view($nnode, 'teaser');
                        $rendered_teaser = render($prepared_node);
                        print $rendered_teaser;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>