<?php
 if( !function_exists('avadanta_breadcrumbs') ): function avadanta_breadcrumbs() {
$image = get_header_image();
  ?>
<div class="banner banner-inner tc-light brdcrmbs">
        <div class="banner-block">
          <div class="container">
   <div class="row">
               <div class="col-md-12">
                <div class="banner-content avata-center">
                  <?php if(is_home()): ?>
                            <h1 class="banner-heading" ><?php bloginfo('name'); ?></h1>
                            <?php else: ?>
                              <h1 class="banner-heading">
                                <?php if ( is_archive() ) {
                                  the_archive_title( '<h1 class="banner-heading">', '</h1>' );
                                }
                                 elseif(is_search()){

                                  echo  esc_html__('Search Results For ', 'avadanta-industry') . ' " ' . get_search_query() . ' "';

                                 }elseif ( is_404() ) {
                                  echo  esc_html__('Nothing Found ', 'avadanta-industry');
                                 }
                                 else{
                                  
                                    echo esc_html( get_the_title() );
                                    
                                  } 
                                 ?>
                              </h1>
                            <?php endif; 
                            ?>
                </div>
              </div>
                <div class="col-md-12">
                     <?php
                      $avadanta_header_show_breadcrumb =  get_theme_mod( 'avadanta_header_show_breadcrumb', 0 );
                      if($avadanta_header_show_breadcrumb==0){
                        ?>
                        <div class="header-bennar-right avata-center">
                            <?php avadanta_breadcrumb_trail(); ?>
                        </div>
                      <?php } ?>
                    </div>
            </div>
          </div>
          <div class="bg-image header-bg-image">
            <img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php echo esc_attr__('banner','avadanta-industry'); ?>">
          </div>
        </div>
        
      </div>
      <div id="content"></div>
<?php } endif;

function avadanta_industry_enqueue_scripts()
  {

   $avadanta_typography_show = get_theme_mod('avadanta_show_typography', 0);
    If($avadanta_typography_show == 0) {
      wp_enqueue_style('avadanta-font', 'https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap'); 
    }
  wp_enqueue_style( 'avadanta-organization-style', get_template_directory_uri() . '/style.css',array('bootstrap'));  
  wp_enqueue_style('avadanta-custom', get_stylesheet_directory_uri(). '/assets/css/avadanta-custom.css');
  

  }
add_action('wp_enqueue_scripts','avadanta_industry_enqueue_scripts');




function avadanta_industry_inline_css(){

$avadanta_custom_css      = '';

$avadanta_color_scheme = get_theme_mod( 'avadanta_color_scheme', '#1b1b1b' );

$avadanta_custom_css      .= '.tc-light.footer-s1::after{background-color: ' . esc_attr( $avadanta_color_scheme) . ';}';

$avadanta_theme_color_scheme = get_theme_mod('avadanta_theme_color_scheme','#4aab3d');               

$avadanta_custom_css      .= '.btn,.btn-theme:hover,.dash::before, .dash::after,
       .comment-respond .form-submit input,
       .widget_tag_cloud .tagcloud a:hover,.main-header-area .main-menu-area nav ul li ul > li:hover, .main-header-area .main-menu-area nav ul li ul > li .active,
       .main-slider-three .owl-carousel .owl-nav .owl-next:hover,.comment-respond .form-submit input:hover,.widget_tag_cloud .tagcloud a:hover,.srvc .bg-darker,.project-area.project-call,.header-search .input-search:focus,.sub-modals,.dialog-content #save-dialog,.sidebar-widget .search-form .search-submit,.team-content,.project-item:hover .project-over
       {background-color: ' . esc_attr( $avadanta_theme_color_scheme) . ' !important;}';

$avadanta_custom_css      .= '.avadanta-agency-foot
       {background: ' . esc_attr( $avadanta_theme_color_scheme) . ' ;}';

$avadanta_custom_css      .= '.nav-links .page-numbers,.social li
       {
        background-color: ' . esc_attr( $avadanta_theme_color_scheme) . ';
        border: 1px solid '. esc_attr( $avadanta_theme_color_scheme) . '}';

$avadanta_custom_css      .= 'blockquote
       {
        border-left: 5px solid '. esc_attr( $avadanta_theme_color_scheme) . '}';

$avadanta_custom_css      .= '.comment-respond .form-submit input{border-color: ' . esc_attr( $avadanta_theme_color_scheme) . ';}';


$avadanta_custom_css      .= '
       .post-content h4 a:hover,.header-bennar-right ul li a,.wgs-sidebar ul li a:hover,.post-full .post-content h3 a:hover,.reply a,.logged-in-as a,.heading-xs.tc-primary,.copyright a,.nav-links .page-numbers.current,.error-text-large,.post-content-s2 .post-tag,.heading-xs,.tes-author .author-con-s2 .author-name,.readmre a,.srvc .feature-icon,.wgs-sidebar .wgs-heading,.menu .sub-menu li:hover > a, .menu .children li:hover > a, .avadanta-navigate .nav-menu>.page_item>a:hover,.section-head .heading-xs,.avadantaconslt-readmre a,.sidebar-widget h2,.wp-block-search .wp-block-search__label{
                     color: ' . esc_attr( $avadanta_theme_color_scheme) . '!important; ;
                }';

$avadanta_custom_css      .= '.avadanta-navigate ul ul
       {
        border-top: 4px solid '. esc_attr( $avadanta_theme_color_scheme) . '}';


$avadanta_custom_css      .= '.btn-read-more-fill{border-bottom: 1px solid ' . esc_attr( $avadanta_theme_color_scheme) . ' !important;}';


$avadanta_custom_css      .= ' .nav-links .page-numbers:hover{background-color:  #fff;
                     border-bottom: 1px solid ' . esc_attr( $avadanta_theme_color_scheme) . ' !important;
                     color:' . esc_attr( $avadanta_theme_color_scheme) . ' !important;}';

$avadanta_header_bg_color = get_theme_mod('avadanta_header_bg_color','#000');

$avadanta_custom_css      .= '.brdcrmbs .bg-image.overlay-fall::after{background: ' . esc_attr( $avadanta_header_bg_color) . ';}';

$avadanta_custom_css      .= '.contact-banner-area .color-theme, .projects-2-featured-area .featuredContainer .featured-box:hover .overlay,.sidebar-title:before{
    background-color: ' . esc_attr( $avadanta_theme_color_scheme) . ';opacity:0.8;}';

$avadanta_custom_css      .= '.bg-primary,.slick-dots li.slick-active,.post-full .post-date,.preloader.preloader-dalas:before,
.preloader.preloader-dalas:after,.back-to-top{background-color: ' . esc_attr( $avadanta_theme_color_scheme) . ' !important;}';

    wp_add_inline_style( 'avadanta-style', $avadanta_custom_css );
}

add_action( 'wp_enqueue_scripts', 'avadanta_industry_inline_css',20 );
