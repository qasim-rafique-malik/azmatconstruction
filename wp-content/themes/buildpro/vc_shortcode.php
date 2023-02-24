<?php 

// Slider Text
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Slider Text", 'buildpro'),
   "base" => "homepr",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'buildpro'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1: Slide Text Color', 'buildpro')   => 'style1',
                     esc_html__('Style 2: Slide Big Text', 'buildpro')     => 'style2',
                  ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Top Big Text", 'buildpro'),
         "param_name" => "btext",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'style1' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Top Very Big Text", 'buildpro'),
         "param_name" => "vbtext",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'style1' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Top Color Text", 'buildpro'),
         "param_name" => "ctext",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'style2' ),
      ),
      array(
          'type' => 'param_group',
          'heading' => esc_html__("Slider Text", 'buildpro'),
          'value' => '',
          'param_name' => 'slide',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Text',
                  'param_name' => 'text',
               ),
          )
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("More Details", 'buildpro'),
         "param_name" => "content",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'style1' ),
      ),
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button", 'buildpro'),
         "param_name" => "btn",
         "dependency"  => array( 'element' => 'style', 'value' => 'style2' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Link Scroll", 'buildpro'),
         "param_name" => "link",
         "value" => "",
      ),  
    )
    ));
}



// Background Video
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Background Video", 'buildpro'),
   "base" => "bgvideo",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Video Link (mp4)", 'buildpro'),
         "param_name" => "video",
         "value" => "",
      ),
      array(
          'type' => 'param_group',
          'heading' => esc_html__("Slider Text", 'buildpro'),
          'value' => '',
          'param_name' => 'slide',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Text',
                  'param_name' => 'text',
               ),
          )
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Link Scroll", 'buildpro'),
         "param_name" => "link",
         "value" => "",
      ),  
    )
    ));
}

// Button
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Button", 'buildpro'),
   "base" => "otbutton",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array( 
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button", 'buildpro'),
         "param_name" => "btn",
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Color", 'buildpro'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Dark', 'buildpro')   => 'btn-line-black',
                     esc_html__('Light', 'buildpro')   => 'btn-line-white',
                  ),
      ),
       array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Right Position", 'buildpro'),
         "param_name" => "float",
         "value" => "",
      ), 
    )));
}

// Icon box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Icon Box", 'buildpro'),
   "base" => "servicesbox",
   "class" => "",
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Type Box', 'buildpro'),
         "param_name" => "style",
         "value" => array(
            esc_html__('Icon', 'buildpro')     => 'icon', 
            esc_html__('Number', 'buildpro')   => 'number',
         ), 
      ),  
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'buildpro'),
         "param_name" => "icon",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'icon' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'buildpro'),
         "param_name" => "num",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => 'number' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title of box", 'buildpro')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'buildpro'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("content right.", 'buildpro')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Light Text", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ),   
    )
    ));
}

// Member Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Member Team", 'buildpro'),
   "base" => "member",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Photo", 'buildpro'),
         "param_name" => "photo",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Name", 'buildpro'),
         "param_name" => "name",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Job", 'buildpro'),
         "param_name" => "job",
         "value" => "",
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'buildpro'),
         "param_name" => "content",
         "value" => "",
      ),
      array(
          'type' => 'param_group',
          'heading' => esc_html__("Socials", 'buildpro'),
          'value' => '',
          'param_name' => 'social',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'iconpicker',
                  'value' => '',
                  'heading' => 'Social Icon',
                  'param_name' => 'icon',
               ),
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Social Link',
                  'param_name' => 'link',
               ),
          )
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Read More Link", 'buildpro'),
         "param_name" => "btn",         
      ),
    )
    ));
}

// Popup Video
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Popup Video Or Image", 'buildpro'),
   "base" => "popupvideo",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Video Link", 'buildpro'),
         "param_name" => "video",
         "value" => "",
         "description" => esc_html__("Example: https://www.youtube.com/watch?v=rwvmru5JmXk", 'buildpro')
      ),  
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image Thumnail", 'buildpro'),
         "param_name" => "photo",
         "value" => "",
      ), 
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Show Button", 'buildpro'),
         "param_name" => "show",
         "value" => "",
      ), 
    )
    ));
}


// Service Box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Service Box", 'buildpro'),
   "base" => "iconbox",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Video Link", 'buildpro'),
         "param_name" => "video",
         "value" => "",
         "description" => esc_html__("Example: https://www.youtube.com/watch?v=rwvmru5JmXk", 'buildpro')
      ),  
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image Thumnail", 'buildpro'),
         "param_name" => "photo",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Link of Image", 'buildpro'),
         "param_name" => "link",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
         "value" => "",
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Details", 'buildpro'),
         "param_name" => "content",
         "value" => "",
      ),
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button", 'buildpro'),
         "param_name" => "btn",
         "value" => "",
      ),
    )
    ));
}


// History
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT History", 'buildpro'),
   "base" => "history",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
          'type' => 'param_group',
          'heading' => esc_html__("History", 'buildpro'),
          'value' => '',
          'param_name' => 'his',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Year',
                  'param_name' => 'year',
               ),
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Title',
                  'param_name' => 'name',
               ),
               array(
                  'type' => 'textarea',
                  'value' => '',
                  'heading' => 'Description',
                  'param_name' => 'des',
               ),
          )
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Light", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ), 
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Animation", 'buildpro'),
         "param_name" => "ani",
         "value" => "",
      ),  
    )
    ));
}


// List Services
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT List Services", 'buildpro'),
   "base" => "listserv",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Services", 'buildpro'),
         "param_name" => "num",
         "value" => "",
         "description" => esc_html__("Enter number services. Recommend: 3", 'buildpro')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Label Button", 'buildpro'),
         "param_name" => "btn",
         "value" => "",
         "description" => esc_html__("Enter label button read more. Default: Read More", 'buildpro')
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Columns', 'buildpro'),
         "param_name" => "col",
         "value" => array(
                     esc_html__('3 Columns', 'buildpro')     => '3', 
                     esc_html__('4 Columns', 'buildpro')     => '4',
                     esc_html__('2 Columns', 'buildpro')     => '2',
                  ), 
      ),          
    )
    ));
}

// Process
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Process", 'buildpro'),
   "base" => "process",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
          'type' => 'param_group',
          'heading' => esc_html__("Process", 'buildpro'),
          'value' => '',
          'param_name' => 'proce',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => esc_html__('Title', 'buildpro'),
                  'param_name' => 'title',
               ),
               array(
                  'type' => 'textarea',
                  'value' => '',
                  'heading' => esc_html__('Details', 'buildpro'),
                  'param_name' => 'des',
               ),
          )
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Dark", 'buildpro'),
         "param_name" => "dark",
         "value" => "",
      ), 
    )));
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Testimonials", 'buildpro'),
   "base" => "testslide",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
          'type' => 'param_group',
          'heading' => esc_html__("Testimonial", 'buildpro'),
          'value' => '',
          'param_name' => 'testi',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textarea',
                  'value' => '',
                  'heading' => esc_html__('Text', 'buildpro'),
                  'param_name' => 'text',
               ),
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => esc_html__('Name', 'buildpro'),
                  'param_name' => 'name',
               ),
          )
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Light", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ), 
    )));
}


// Call To Action
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Call To Action", 'buildpro'),
   "base" => "call_to",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
         "value" => "",
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Button", 'buildpro'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'buildpro'),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Light", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ),     
    )
   ));
}



// Lastest Blog
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Latest Blog", 'buildpro'),
   "base" => "lastest_blog",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Visible", 'buildpro'),
         "param_name" => "cols",
         "value" => array(                        
                     esc_html__('3 Items', 'buildpro')   => '3',
                     esc_html__('2 Items', 'buildpro')   => '2',
                     esc_html__('4 Items', 'buildpro')   => '4',
                     ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts", 'buildpro'),
         "param_name" => "number",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Read More", 'buildpro'),
         "param_name" => "rm",
         "value" => "",
      ),
   )));
}

// Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Portfolio Filter", 'buildpro'),
   "base" => "portfoliof",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Show", 'buildpro'),
         "param_name" => "num",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Show All", 'buildpro'),
         "param_name" => "all",
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Column', 'buildpro'),
         "param_name" => "col",
         "value" => array(
                     esc_html__('3 Columns', 'buildpro')     => '3', 
                     esc_html__('4 Columns', 'buildpro')     => '4',
                     esc_html__('2 Columns', 'buildpro')     => '2',
                  ), 
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Popup", 'buildpro'),
         "param_name" => "popup",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Gutter", 'buildpro'),
         "param_name" => "gutter",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Width (px)", 'buildpro'),
         "param_name" => "gw",
         "dependency"  => array( 'element' => 'gutter', 'value' => 'true' ),
         "description" => esc_html__("Just enter number. Default: 10", 'buildpro'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Filter", 'buildpro'),
         "param_name" => "filter",
         "value" => array(
                     esc_html__('Default', 'buildpro')    => 'default', 
                     esc_html__('Center', 'buildpro')     => 'center',
                     esc_html__('Hidden', 'buildpro')     => 'none',
                  ), 
      ),
    )));
}


// Latest Project
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Slider Projects", 'buildpro'),
   "base" => "latestprj",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "heading" => esc_html__('Projects Number', 'buildpro'),
         "param_name" => "number",
         "value" => '',
         "description" => esc_html__('Default: all.', 'buildpro')
      ), 
      array(
         "type" => "textfield",
         "heading" => esc_html__('Visible Number', 'buildpro'),
         "param_name" => "visible",
         "value" => '',
         "description" => esc_html__('Recommend: 3, 4, 5. Default: 4.', 'buildpro')
      ),  
      array(
         "type" => "checkbox",
         "heading" => esc_html__('Hide Title?', 'buildpro'),
         "param_name" => "title",
         "value" => '',
      ),   
    )
    ));
}

// Projects Related
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Related Projects", 'buildpro'),
   "base" => "projrelated",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Column', 'buildpro'),
         "param_name" => "col",
         "value" => array(
                     esc_html__('4 Columns', 'buildpro')     => '4', 
                     esc_html__('3 Columns', 'buildpro')     => '3',
                     esc_html__('2 Columns', 'buildpro')     => '2',
                  ), 
      ),
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Related Projects", 'buildpro'),
         "param_name"=> "idpost",
         "value"     => "",
         "description" => esc_html__("Enter your projects.", 'buildpro')
      ),
      array(
         "type"      => "select_projects",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Related Project Categories", 'buildpro'),
         "param_name"=> "idcat",
         "value"     => "",
         "description" => esc_html__("Enter your categories.", 'buildpro')
      ),
    )));
}


if ( ! function_exists( 'is_plugin_active' ) ) {
   require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
   if ( function_exists( 'vc_add_shortcode_param' ) ) {
      vc_add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
   } elseif ( function_exists( 'add_shortcode_param' ) ) {
      add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
   }
   if ( function_exists( 'vc_add_shortcode_param' ) ) {
      vc_add_shortcode_param( 'select_projects', 'select_param_project', get_template_directory_uri() . '/framework/admin/js/select-field-project.js' );
   } elseif ( function_exists( 'add_shortcode_param' ) ) {
      add_shortcode_param( 'select_projects', 'select_param_project', get_template_directory_uri() . '/framework/admin/js/select-field-project.js' );
   }
}   

function select_param( $settings, $value ) {
   // Generate dependencies if there are any
   $dependency = $settings;
   $args = array(
     'numberposts' => -1,
     'post_type'   => 'portfolio'
   );
   $posts = get_posts( $args );
   $cat = array();
   foreach( $posts as $post ) {
      if( $post ) {
         $cat[] = sprintf('<option value="%s">%s</option>',
            esc_attr( $post->ID ),
            $post->post_title
         );
      }

   }

   return sprintf(
      '<input type="hidden" name="%s" value="%s" class="wpb-input-categories wpb_vc_param_value wpb-textinput %s %s_field" %s>
      <select class="select-categories-post">
      %s
      </select>',
      esc_attr( $settings['param_name'] ),
      esc_attr( $value ),
      esc_attr( $settings['param_name'] ),
      esc_attr( $settings['type'] ),
      $dependency,
      implode( '', $cat )
   );
}

function select_param_project( $settings, $value ) {
  $category_projects = get_terms( 'categories' );
  $cat_projects = array();
  foreach( $category_projects as $category ) {
     if( $category ) {
        $cat_projects[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }
  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-projects wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-projects-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_projects )
  );
}


// Gallery
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Gallery", 'buildpro'),
   "base" => "otgallery",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array( 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Display", 'buildpro'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Grid', 'buildpro')       => 's1',
                     esc_html__('Carousel', 'buildpro')   => 's2',
         ),
      ),
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Images", 'buildpro'),
         "param_name" => "gallery",
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Columns", 'buildpro'),
         "param_name" => "num",
         "value" => array(                        
                     esc_html__('1 Column', 'buildpro')    => '12',
                     esc_html__('2 Columns', 'buildpro')   => '6',
                     esc_html__('3 Columns', 'buildpro')   => '4',
                     esc_html__('4 Columns', 'buildpro')   => '3',
                     ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Show Title", 'buildpro'),
         "param_name" => "name",
      ),
   )));
}


// Our Facts
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Fun Facts", 'buildpro'),
   "base" => "facts",
   "class" => "",
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'buildpro'),
         "param_name" => "title",
      ),
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'buildpro'),
         "param_name" => "icon",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'buildpro'),
         "param_name" => "num",
         "description" => esc_html__("Number of box", 'buildpro')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Grey", 'buildpro'),
         "param_name" => "ico",
         "value" => "",
      ),
     
    )));
}


// Skills
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Skills", 'buildpro'),
   "base" => "skills",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array(
      array(
          'type' => 'param_group',
          'heading' => esc_html__("List Skills", 'buildpro'),
          'value' => '',
          'param_name' => 'skill',
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Title',
                  'param_name' => 'title',
               ),
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Percent',
                  'param_name' => 'per',
               ),
          )
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Light Text", 'buildpro'),
         "param_name" => "light",
         "value" => "",
      ),
    )));
}


// Logo Client
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Images Carousel", 'buildpro'),
   "base" => "clients",
   "class" => "",
   "category" => 'BuildPro Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Images', 'buildpro'),
         "param_name" => "gallery",
         "value" => "",
         "description" => esc_html__("Use link out for logo client by enter link input caption image, View guide here: http://vegatheme.com/images/add-link-logo.jpg , Recomended Size: 200 x 130. ", 'buildpro')
      ), 
      array(
         "type" => "textfield",
         "heading" => esc_html__('Visible Number', 'buildpro'),
         "param_name" => "num",
         "value" => '',
         "description" => esc_html__('Number columns each rows. Recommend: 4, 5 or 6. Default: 6.', 'buildpro')
      ), 
      array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Slider Speed',
          'param_name' => 'speed',
       ),    
    )
    ));
}

// Contact Tabs
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Contact Tabs", 'buildpro'),
   "base" => "ctinfo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'BuildPro Element',
   "params" => array(
      array(
          'type' => 'param_group',
          'value' => '',
          'param_name' => 'info',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  'type' => 'textfield',
                  'value' => '',
                  'heading' => 'Tab Name',
                  'param_name' => 'name',
               ),
               array(
                  'type' => 'textarea',
                  'value' => '',
                  'heading' => 'Map Iframe',
                  'param_name' => 'map',
               ),
               array(
                  'type' => 'textarea',
                  'value' => '',
                  'heading' => 'Details',
                  'param_name' => 'content',
               ),
          )
      )
      
    )));
}



//Add More Icons

$GLOBALS['icons'] = get_icons();

if ( function_exists( 'vc_add_shortcode_param' ) ) {
   vc_add_shortcode_param( 'icon', 'icon_param', get_template_directory_uri() . '/js/vc/icon-field.js' );
} elseif ( function_exists( 'add_shortcode_param' ) ) {
   add_shortcode_param( 'icon', 'icon_param', get_template_directory_uri() . '/js/vc/icon-field.js' );
}

function icon_param( $settings, $value ) {
  // Generate dependencies if there are any
   $icons = array();
  foreach( $GLOBALS['icons'] as $icon ) {
    $icons[] = sprintf(
      '<i data-icon="%1$s" class="%1$s %2$s"></i>',
      $icon,
      $icon == $value ? 'selected' : ''
    );
  }

  return sprintf(
    '<div class="icon_block">
      <span class="icon-preview"><i class="%s"></i></span>
      <input type="text" class="icons-search" placeholder="%s">
      <input type="hidden" name="%s" value="%s" class="wpb_vc_param_value wpb-textinput %s %s_field">
      <div class="icon-selector">%s</div>
    </div>',
    esc_attr( $value ),
    esc_attr__( 'Quick Search', 'buildpro' ),
    esc_attr( $settings['param_name'] ),
    esc_attr( $value ),
    esc_attr( $settings['param_name'] ),
    esc_attr( $settings['type'] ),
    implode( '', $icons )
  );
}

function get_icons() {
   $icons_ele = array('','arrow_up', 'arrow_down', 'arrow_left', 'arrow_right', 'arrow_left-up', 'arrow_right-up', 'arrow_right-down', 'arrow_left-down', 'arrow-up-down', 'arrow_up-down_alt', 'arrow_left-right_alt', 'arrow_left-right', 'arrow_expand_alt2', 'arrow_expand_alt', 'arrow_condense', 'arrow_expand', 'arrow_move', 'arrow_carrot-up', 'arrow_carrot-down', 'arrow_carrot-left', 'arrow_carrot-right', 'arrow_carrot-2up', 'arrow_carrot-2down', 'arrow_carrot-2left', 'arrow_carrot-2right', 'arrow_carrot-up_alt2', 'arrow_carrot-down_alt2', 'arrow_carrot-left_alt2', 'arrow_carrot-right_alt2', 'arrow_carrot-2up_alt2', 'arrow_carrot-2down_alt2', 'arrow_carrot-2left_alt2', 'arrow_carrot-2right_alt2', 'arrow_triangle-up', 'arrow_triangle-down', 'arrow_triangle-left', 'arrow_triangle-right', 'arrow_triangle-up_alt2', 'arrow_triangle-down_alt2', 'arrow_triangle-left_alt2', 'arrow_triangle-right_alt2', 'arrow_back', 'icon_minus-06', 'icon_plus', 'icon_close', 'icon_check', 'icon_minus_alt2', 'icon_plus_alt2', 'icon_close_alt2', 'icon_check_alt2', 'icon_zoom-out_alt', 'icon_zoom-in_alt', 'icon_search', 'icon_box-empty', 'icon_box-selected', 'icon_minus-box', 'icon_plus-box', 'icon_box-checked', 'icon_circle-empty', 'icon_circle-slelected', 'icon_stop_alt2', 'icon_stop', 'icon_pause_alt2', 'icon_pause', 'icon_menu', 'icon_menu-square_alt2', 'icon_menu-circle_alt2', 'icon_ul', 'icon_ol', 'icon_adjust-horiz', 'icon_adjust-vert', 'icon_document_alt', 'icon_documents_alt', 'icon_pencil', 'icon_pencil-edit_alt', 'icon_pencil-edit', 'icon_folder-alt', 'icon_folder-open_alt', 'icon_folder-add_alt', 'icon_info_alt', 'icon_error-oct_alt', 'icon_error-circle_alt', 'icon_error-triangle_alt', 'icon_question_alt2', 'icon_question', 'icon_comment_alt', 'icon_chat_alt', 'icon_vol-mute_alt', 'icon_volume-low_alt', 'icon_volume-high_alt', 'icon_quotations', 'icon_quotations_alt2', 'icon_clock_alt', 'icon_lock_alt', 'icon_lock-open_alt', 'icon_key_alt', 'icon_cloud_alt', 'icon_cloud-upload_alt', 'icon_cloud-download_alt', 'icon_image', 'icon_images', 'icon_lightbulb_alt', 'icon_gift_alt', 'icon_house_alt', 'icon_genius', 'icon_mobile', 'icon_tablet', 'icon_laptop', 'icon_desktop', 'icon_camera_alt', 'icon_mail_alt', 'icon_cone_alt', 'icon_ribbon_alt', 'icon_bag_alt', 'icon_creditcard', 'icon_cart_alt', 'icon_paperclip', 'icon_tag_alt', 'icon_tags_alt', 'icon_trash_alt', 'icon_cursor_alt', 'icon_mic_alt', 'icon_compass_alt', 'icon_pin_alt', 'icon_pushpin_alt', 'icon_map_alt', 'icon_drawer_alt', 'icon_toolbox_alt', 'icon_book_alt', 'icon_calendar', 'icon_film', 'icon_table', 'icon_contacts_alt', 'icon_headphones', 'icon_lifesaver', 'icon_piechart', 'icon_refresh', 'icon_link_alt', 'icon_link', 'icon_loading', 'icon_blocked', 'icon_archive_alt', 'icon_heart_alt', 'icon_star_alt', 'icon_star-half_alt', 'icon_star', 'icon_star-half', 'icon_tools', 'icon_tool', 'icon_cog', 'icon_cogs', 'arrow_up_alt', 'arrow_down_alt', 'arrow_left_alt', 'arrow_right_alt', 'arrow_left-up_alt', 'arrow_right-up_alt', 'arrow_right-down_alt', 'arrow_left-down_alt', 'arrow_condense_alt', 'arrow_expand_alt3', 'arrow_carrot_up_alt', 'arrow_carrot-down_alt', 'arrow_carrot-left_alt', 'arrow_carrot-right_alt', 'arrow_carrot-2up_alt', 'arrow_carrot-2dwnn_alt', 'arrow_carrot-2left_alt', 'arrow_carrot-2right_alt', 'arrow_triangle-up_alt', 'arrow_triangle-down_alt', 'arrow_triangle-left_alt', 'arrow_triangle-right_alt', 'icon_minus_alt', 'icon_plus_alt', 'icon_close_alt', 'icon_check_alt', 'icon_zoom-out', 'icon_zoom-in', 'icon_stop_alt', 'icon_menu-square_alt', 'icon_menu-circle_alt', 'icon_document', 'icon_documents', 'icon_pencil_alt', 'icon_folder', 'icon_folder-open', 'icon_folder-add', 'icon_folder_upload', 'icon_folder_download', 'icon_info', 'icon_error-circle', 'icon_error-oct', 'icon_error-triangle', 'icon_question_alt', 'icon_comment', 'icon_chat', 'icon_vol-mute', 'icon_volume-low', 'icon_volume-high', 'icon_quotations_alt', 'icon_clock', 'icon_lock', 'icon_lock-open', 'icon_key', 'icon_cloud', 'icon_cloud-upload', 'icon_cloud-download', 'icon_lightbulb', 'icon_gift', 'icon_house', 'icon_camera', 'icon_mail', 'icon_cone', 'icon_ribbon', 'icon_bag', 'icon_cart', 'icon_tag', 'icon_tags', 'icon_trash', 'icon_cursor', 'icon_mic', 'icon_compass', 'icon_pin', 'icon_pushpin', 'icon_map', 'icon_drawer', 'icon_toolbox', 'icon_book', 'icon_contacts', 'icon_archive', 'icon_heart', 'icon_profile', 'icon_group', 'icon_grid-2x2', 'icon_grid-3x3', 'icon_music', 'icon_pause_alt', 'icon_phone', 'icon_upload', 'icon_download', 'social_facebook', 'social_twitter', 'social_pinterest', 'social_googleplus', 'social_tumblr', 'social_tumbleupon', 'social_wordpress', 'social_instagram', 'social_dribbble', 'social_vimeo', 'social_linkedin', 'social_rss', 'social_deviantart', 'social_share', 'social_myspace', 'social_skype', 'social_youtube', 'social_picassa', 'social_googledrive', 'social_flickr', 'social_blogger', 'social_spotify', 'social_delicious', 'social_facebook_circle', 'social_twitter_circle', 'social_pinterest_circle', 'social_googleplus_circle', 'social_tumblr_circle', 'social_stumbleupon_circle', 'social_wordpress_circle', 'social_instagram_circle', 'social_dribbble_circle', 'social_vimeo_circle', 'social_linkedin_circle', 'social_rss_circle', 'social_deviantart_circle', 'social_share_circle', 'social_myspace_circle', 'social_skype_circle', 'social_youtube_circle', 'social_picassa_circle', 'social_googledrive_alt2', 'social_flickr_circle', 'social_blogger_circle', 'social_spotify_circle', 'social_delicious_circle', 'social_facebook_square', 'social_twitter_square', 'social_pinterest_square', 'social_googleplus_square', 'social_tumblr_square', 'social_stumbleupon_square', 'social_wordpress_square', 'social_instagram_square', 'social_dribbble_square', 'social_vimeo_square', 'social_linkedin_square', 'social_rss_square', 'social_deviantart_square', 'social_share_square', 'social_myspace_square', 'social_skype_square', 'social_youtube_square', 'social_picassa_square', 'social_googledrive_square', 'social_flickr_square', 'social_blogger_square', 'social_spotify_square', 'social_delicious_square', 'icon_printer', 'icon_calulator', 'icon_building', 'icon_floppy', 'icon_drive', 'icon_search-2', 'icon_id', 'icon_id-2', 'icon_puzzle', 'icon_like', 'icon_dislike', 'icon_mug', 'icon_currency', 'icon_wallet', 'icon_pens', 'icon_easel', 'icon_flowchart', 'icon_datareport', 'icon_briefcase', 'icon_shield', 'icon_percent', 'icon_globe', 'icon_globe-2', 'icon_target', 'icon_hourglass', 'icon_balance', 'icon_rook', 'icon_printer-alt', 'icon_calculator_alt', 'icon_building_alt', 'icon_floppy_alt', 'icon_drive_alt', 'icon_search_alt', 'icon_id_alt', 'icon_id-2_alt', 'icon_puzzle_alt', 'icon_like_alt', 'icon_dislike_alt', 'icon_mug_alt', 'icon_currency_alt', 'icon_wallet_alt', 'icon_pens_alt', 'icon_easel_alt', 'icon_flowchart_alt', 'icon_datareport_alt', 'icon_briefcase_alt', 'icon_shield_alt', 'icon_percent_alt', 'icon_globe_alt', 'icon_clipboard');
   $icons_etline = array('icon-mobile', 'icon-laptop', 'icon-desktop', 'icon-tablet', 'icon-phone', 'icon-document', 'icon-documents', 'icon-search', 'icon-clipboard', 'icon-newspaper', 'icon-notebook', 'icon-book-open', 'icon-browser', 'icon-calendar', 'icon-presentation', 'icon-picture', 'icon-pictures', 'icon-video', 'icon-camera', 'icon-printer', 'icon-toolbox', 'icon-briefcase', 'icon-wallet', 'icon-gift', 'icon-bargraph', 'icon-grid', 'icon-expand', 'icon-focus', 'icon-edit', 'icon-adjustments', 'icon-ribbon', 'icon-hourglass', 'icon-lock', 'icon-megaphone', 'icon-shield', 'icon-trophy', 'icon-flag', 'icon-map', 'icon-puzzle', 'icon-basket', 'icon-envelope', 'icon-streetsign', 'icon-telescope', 'icon-gears', 'icon-key', 'icon-paperclip', 'icon-attachment', 'icon-pricetags', 'icon-lightbulb', 'icon-layers', 'icon-pencil', 'icon-tools', 'icon-tools-2', 'icon-scissors', 'icon-paintbrush', 'icon-magnifying-glass', 'icon-circle-compass', 'icon-linegraph', 'icon-mic', 'icon-strategy', 'icon-beaker', 'icon-caution', 'icon-recycle', 'icon-anchor', 'icon-profile-male', 'icon-profile-female', 'icon-bike', 'icon-wine', 'icon-hotairballoon', 'icon-globe', 'icon-genius', 'icon-map-pin', 'icon-dial', 'icon-chat', 'icon-heart', 'icon-cloud', 'icon-upload', 'icon-download', 'icon-target', 'icon-hazardous', 'icon-piechart', 'icon-speedometer', 'icon-global', 'icon-compass', 'icon-lifesaver', 'icon-clock', 'icon-aperture', 'icon-quote', 'icon-scope', 'icon-alarmclock', 'icon-refresh', 'icon-happy', 'icon-sad', 'icon-facebook', 'icon-twitter', 'icon-googleplus', 'icon-rss', 'icon-tumblr', 'icon-linkedin', 'icon-dribbble');
   $icons_awesome = array('fa fa-adjust', 'fa fa-adn', 'fa fa-align-center', 'fa fa-align-justify', 'fa fa-align-left', 'fa fa-align-right', 'fa fa-ambulance', 'fa fa-anchor', 'fa fa-android', 'fa fa-angellist', 'fa fa-angle-double-down', 'fa fa-angle-double-left', 'fa fa-angle-double-right', 'fa fa-angle-double-up', 'fa fa-angle-down', 'fa fa-angle-left', 'fa fa-angle-right', 'fa fa-angle-up', 'fa fa-apple', 'fa fa-archive', 'fa fa-area-chart', 'fa fa-arrow-circle-down', 'fa fa-arrow-circle-left', 'fa fa-arrow-circle-o-down', 'fa fa-arrow-circle-o-left', 'fa fa-arrow-circle-o-right', 'fa fa-arrow-circle-o-up', 'fa fa-arrow-circle-right', 'fa fa-arrow-circle-up', 'fa fa-arrow-down', 'fa fa-arrow-left', 'fa fa-arrow-right', 'fa fa-arrow-up', 'fa fa-arrows', 'fa fa-arrows-alt', 'fa fa-arrows-h', 'fa fa-arrows-v', 'fa fa-asterisk', 'fa fa-at', 'fa fa-automobile', 'fa fa-backward', 'fa fa-ban', 'fa fa-bank', 'fa fa-bar-chart', 'fa fa-bar-chart-o', 'fa fa-barcode', 'fa fa-bars', 'fa fa-beer', 'fa fa-behance', 'fa fa-behance-square', 'fa fa-bell', 'fa fa-bell-o', 'fa fa-bell-slash', 'fa fa-bell-slash-o', 'fa fa-bicycle', 'fa fa-binoculars', 'fa fa-birthday-cake', 'fa fa-bitbucket', 'fa fa-bitbucket-square', 'fa fa-bitcoin', 'fa fa-bold', 'fa fa-bolt', 'fa fa-bomb', 'fa fa-book', 'fa fa-bookmark', 'fa fa-bookmark-o', 'fa fa-briefcase', 'fa fa-btc', 'fa fa-bug', 'fa fa-building', 'fa fa-building-o', 'fa fa-bullhorn', 'fa fa-bullseye', 'fa fa-bus', 'fa fa-cab', 'fa fa-calculator', 'fa fa-calendar', 'fa fa-calendar-o', 'fa fa-camera', 'fa fa-camera-retro', 'fa fa-car', 'fa fa-caret-down', 'fa fa-caret-left', 'fa fa-caret-right', 'fa fa-caret-square-o-down', 'fa fa-caret-square-o-left', 'fa fa-caret-square-o-right', 'fa fa-caret-square-o-up', 'fa fa-caret-up', 'fa fa-cc', 'fa fa-cc-amex', 'fa fa-cc-discover', 'fa fa-cc-mastercard', 'fa fa-cc-paypal', 'fa fa-cc-stripe', 'fa fa-cc-visa', 'fa fa-certificate', 'fa fa-chain', 'fa fa-chain-broken', 'fa fa-check', 'fa fa-check-circle', 'fa fa-check-circle-o', 'fa fa-check-square', 'fa fa-check-square-o', 'fa fa-chevron-circle-down', 'fa fa-chevron-circle-left', 'fa fa-chevron-circle-right', 'fa fa-chevron-circle-up', 'fa fa-chevron-down', 'fa fa-chevron-left', 'fa fa-chevron-right', 'fa fa-chevron-up', 'fa fa-child', 'fa fa-circle', 'fa fa-circle-o', 'fa fa-circle-o-notch', 'fa fa-circle-thin', 'fa fa-clipboard', 'fa fa-clock-o', 'fa fa-close', 'fa fa-cloud', 'fa fa-cloud-download', 'fa fa-cloud-upload', 'fa fa-cny', 'fa fa-code', 'fa fa-code-fork', 'fa fa-codepen', 'fa fa-coffee', 'fa fa-cog', 'fa fa-cogs', 'fa fa-columns', 'fa fa-comment', 'fa fa-comment-o', 'fa fa-comments', 'fa fa-comments-o', 'fa fa-compass', 'fa fa-compress', 'fa fa-copy', 'fa fa-copyright', 'fa fa-credit-card', 'fa fa-crop', 'fa fa-crosshairs', 'fa fa-css3', 'fa fa-cube', 'fa fa-cubes', 'fa fa-cut', 'fa fa-cutlery', 'fa fa-dashboard', 'fa fa-database', 'fa fa-dedent', 'fa fa-delicious', 'fa fa-desktop', 'fa fa-deviantart', 'fa fa-digg', 'fa fa-dollar', 'fa fa-dot-circle-o', 'fa fa-download', 'fa fa-dribbble', 'fa fa-dropbox', 'fa fa-drupal', 'fa fa-edit', 'fa fa-eject', 'fa fa-ellipsis-h', 'fa fa-ellipsis-v', 'fa fa-empire', 'fa fa-envelope', 'fa fa-envelope-o', 'fa fa-envelope-square', 'fa fa-eraser', 'fa fa-eur', 'fa fa-euro', 'fa fa-exchange', 'fa fa-exclamation', 'fa fa-exclamation-circle', 'fa fa-exclamation-triangle', 'fa fa-expand', 'fa fa-external-link', 'fa fa-external-link-square', 'fa fa-eye', 'fa fa-eye-slash', 'fa fa-eyedropper', 'fa fa-facebook', 'fa fa-facebook-square', 'fa fa-fast-backward', 'fa fa-fast-forward', 'fa fa-fax', 'fa fa-female', 'fa fa-fighter-jet', 'fa fa-file', 'fa fa-file-archive-o', 'fa fa-file-audio-o', 'fa fa-file-code-o', 'fa fa-file-excel-o', 'fa fa-file-image-o', 'fa fa-file-movie-o', 'fa fa-file-o', 'fa fa-file-pdf-o', 'fa fa-file-photo-o', 'fa fa-file-picture-o', 'fa fa-file-powerpoint-o', 'fa fa-file-sound-o', 'fa fa-file-text', 'fa fa-file-text-o', 'fa fa-file-video-o', 'fa fa-file-word-o', 'fa fa-file-zip-o', 'fa fa-files-o', 'fa fa-film', 'fa fa-filter', 'fa fa-fire', 'fa fa-fire-extinguisher', 'fa fa-flag', 'fa fa-flag-checkered', 'fa fa-flag-o', 'fa fa-flash', 'fa fa-flask', 'fa fa-flickr', 'fa fa-floppy-o', 'fa fa-folder', 'fa fa-folder-o', 'fa fa-folder-open', 'fa fa-folder-open-o', 'fa fa-font', 'fa fa-forward', 'fa fa-foursquare', 'fa fa-frown-o', 'fa fa-futbol-o', 'fa fa-gamepad', 'fa fa-gavel', 'fa fa-gbp', 'fa fa-ge', 'fa fa-gear', 'fa fa-gears', 'fa fa-gift', 'fa fa-git', 'fa fa-git-square', 'fa fa-github', 'fa fa-github-alt', 'fa fa-github-square', 'fa fa-gittip', 'fa fa-glass', 'fa fa-globe', 'fa fa-google', 'fa fa-google-plus', 'fa fa-google-plus-square', 'fa fa-google-wallet', 'fa fa-graduation-cap', 'fa fa-group', 'fa fa-h-square', 'fa fa-hacker-news', 'fa fa-hand-o-down', 'fa fa-hand-o-left', 'fa fa-hand-o-right', 'fa fa-hand-o-up', 'fa fa-hdd-o', 'fa fa-header', 'fa fa-headphones', 'fa fa-heart', 'fa fa-heart-o', 'fa fa-history', 'fa fa-home', 'fa fa-hospital-o', 'fa fa-html5', 'fa fa-ils', 'fa fa-image', 'fa fa-inbox', 'fa fa-indent', 'fa fa-info', 'fa fa-info-circle', 'fa fa-inr', 'fa fa-instagram', 'fa fa-institution', 'fa fa-ioxhost', 'fa fa-italic', 'fa fa-joomla', 'fa fa-jpy', 'fa fa-jsfiddle', 'fa fa-key', 'fa fa-keyboard-o', 'fa fa-krw', 'fa fa-language', 'fa fa-laptop', 'fa fa-lastfm', 'fa fa-lastfm-square', 'fa fa-leaf', 'fa fa-legal', 'fa fa-lemon-o', 'fa fa-level-down', 'fa fa-level-up', 'fa fa-life-bouy', 'fa fa-life-buoy', 'fa fa-life-ring', 'fa fa-life-saver', 'fa fa-lightbulb-o', 'fa fa-line-chart', 'fa fa-link', 'fa fa-linkedin', 'fa fa-linkedin-square', 'fa fa-linux', 'fa fa-list', 'fa fa-list-alt', 'fa fa-list-ol', 'fa fa-list-ul', 'fa fa-location-arrow', 'fa fa-lock', 'fa fa-long-arrow-down', 'fa fa-long-arrow-left', 'fa fa-long-arrow-right', 'fa fa-long-arrow-up', 'fa fa-magic', 'fa fa-magnet', 'fa fa-mail-forward', 'fa fa-mail-reply', 'fa fa-mail-reply-all', 'fa fa-male', 'fa fa-map-marker', 'fa fa-maxcdn', 'fa fa-meanpath', 'fa fa-medkit', 'fa fa-meh-o', 'fa fa-microphone', 'fa fa-microphone-slash', 'fa fa-minus', 'fa fa-minus-circle', 'fa fa-minus-square', 'fa fa-minus-square-o', 'fa fa-mobile', 'fa fa-mobile-phone', 'fa fa-money', 'fa fa-moon-o', 'fa fa-mortar-board', 'fa fa-music', 'fa fa-navicon', 'fa fa-newspaper-o', 'fa fa-openid', 'fa fa-outdent', 'fa fa-pagelines', 'fa fa-paint-brush', 'fa fa-paper-plane', 'fa fa-paper-plane-o', 'fa fa-paperclip', 'fa fa-paragraph', 'fa fa-paste', 'fa fa-pause', 'fa fa-paw', 'fa fa-paypal', 'fa fa-pencil', 'fa fa-pencil-square', 'fa fa-pencil-square-o', 'fa fa-phone', 'fa fa-phone-square', 'fa fa-photo', 'fa fa-picture-o', 'fa fa-pie-chart', 'fa fa-pied-piper', 'fa fa-pied-piper-alt', 'fa fa-pinterest', 'fa fa-pinterest-square', 'fa fa-plane', 'fa fa-play', 'fa fa-play-circle', 'fa fa-play-circle-o', 'fa fa-plug', 'fa fa-plus', 'fa fa-plus-circle', 'fa fa-plus-square', 'fa fa-plus-square-o', 'fa fa-power-off', 'fa fa-print', 'fa fa-puzzle-piece', 'fa fa-qq', 'fa fa-qrcode', 'fa fa-question', 'fa fa-question-circle', 'fa fa-quote-left', 'fa fa-quote-right', 'fa fa-ra', 'fa fa-random', 'fa fa-rebel', 'fa fa-recycle', 'fa fa-reddit', 'fa fa-reddit-square', 'fa fa-refresh', 'fa fa-remove', 'fa fa-renren', 'fa fa-reorder', 'fa fa-repeat', 'fa fa-reply', 'fa fa-reply-all', 'fa fa-retweet', 'fa fa-rmb', 'fa fa-road', 'fa fa-rocket', 'fa fa-rotate-left', 'fa fa-rotate-right', 'fa fa-rouble', 'fa fa-rss', 'fa fa-rss-square', 'fa fa-rub', 'fa fa-ruble', 'fa fa-rupee', 'fa fa-save', 'fa fa-scissors', 'fa fa-search', 'fa fa-search-minus', 'fa fa-search-plus', 'fa fa-send', 'fa fa-send-o', 'fa fa-share', 'fa fa-share-alt', 'fa fa-share-alt-square', 'fa fa-share-square', 'fa fa-share-square-o', 'fa fa-shekel', 'fa fa-sheqel', 'fa fa-shield', 'fa fa-shopping-cart', 'fa fa-sign-in', 'fa fa-sign-out', 'fa fa-signal', 'fa fa-sitemap', 'fa fa-skype', 'fa fa-slack', 'fa fa-sliders', 'fa fa-slideshare', 'fa fa-smile-o', 'fa fa-soccer-ball-o', 'fa fa-sort', 'fa fa-sort-alpha-asc', 'fa fa-sort-alpha-desc', 'fa fa-sort-amount-asc', 'fa fa-sort-amount-desc', 'fa fa-sort-asc', 'fa fa-sort-desc', 'fa fa-sort-down', 'fa fa-sort-numeric-asc', 'fa fa-sort-numeric-desc', 'fa fa-sort-up', 'fa fa-soundcloud', 'fa fa-space-shuttle', 'fa fa-spinner', 'fa fa-spoon', 'fa fa-spotify', 'fa fa-square', 'fa fa-square-o', 'fa fa-stack-exchange', 'fa fa-stack-overflow', 'fa fa-star', 'fa fa-star-half', 'fa fa-star-half-empty', 'fa fa-star-half-full', 'fa fa-star-half-o', 'fa fa-star-o', 'fa fa-steam', 'fa fa-steam-square', 'fa fa-step-backward', 'fa fa-step-forward', 'fa fa-stethoscope', 'fa fa-stop', 'fa fa-strikethrough', 'fa fa-stumbleupon', 'fa fa-stumbleupon-circle', 'fa fa-subscript', 'fa fa-suitcase', 'fa fa-sun-o', 'fa fa-superscript', 'fa fa-support', 'fa fa-table', 'fa fa-tablet', 'fa fa-tachometer', 'fa fa-tag', 'fa fa-tags', 'fa fa-tasks', 'fa fa-taxi', 'fa fa-tencent-weibo', 'fa fa-terminal', 'fa fa-text-height', 'fa fa-text-width', 'fa fa-th', 'fa fa-th-large', 'fa fa-th-list', 'fa fa-thumb-tack', 'fa fa-thumbs-down', 'fa fa-thumbs-o-down', 'fa fa-thumbs-o-up', 'fa fa-thumbs-up', 'fa fa-ticket', 'fa fa-times', 'fa fa-times-circle', 'fa fa-times-circle-o', 'fa fa-tint', 'fa fa-toggle-down', 'fa fa-toggle-left', 'fa fa-toggle-off', 'fa fa-toggle-on', 'fa fa-toggle-right', 'fa fa-toggle-up', 'fa fa-trash', 'fa fa-trash-o', 'fa fa-tree', 'fa fa-trello', 'fa fa-trophy', 'fa fa-truck', 'fa fa-try', 'fa fa-tty', 'fa fa-tumblr', 'fa fa-tumblr-square', 'fa fa-turkish-lira', 'fa fa-twitch', 'fa fa-twitter', 'fa fa-twitter-square', 'fa fa-umbrella', 'fa fa-underline', 'fa fa-undo', 'fa fa-university', 'fa fa-unlink', 'fa fa-unlock', 'fa fa-unlock-alt', 'fa fa-unsorted', 'fa fa-upload', 'fa fa-usd', 'fa fa-user', 'fa fa-user-md', 'fa fa-users', 'fa fa-video-camera', 'fa fa-vimeo-square', 'fa fa-vine', 'fa fa-vk', 'fa fa-volume-down', 'fa fa-volume-off', 'fa fa-volume-up', 'fa fa-warning', 'fa fa-wechat', 'fa fa-weibo', 'fa fa-weixin', 'fa fa-wheelchair', 'fa fa-wifi', 'fa fa-windows', 'fa fa-won', 'fa fa-wordpress', 'fa fa-wrench', 'fa fa-xing', 'fa fa-xing-square', 'fa fa-yahoo', 'fa fa-yelp', 'fa fa-yen', 'fa fa-youtube', 'fa fa-youtube-play', 'fa fa-youtube-square', );
   $icons = array_merge( $icons_ele, $icons_awesome, $icons_etline );
   return apply_filters( 'claudio_theme_icons', $icons );
}