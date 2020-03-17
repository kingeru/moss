<?php
/**
 * Kirki Config
 */
Kirki::add_config( 'moss', [
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
] );
Kirki::add_section( 'moss_menu', [
	'title'          => __( 'Menus' , 'moss'),
	'panel'          => '',
	'priority'       => 20,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
] );

Kirki::add_section( 'moss_content', [
	'title'          => __( 'Content' , 'moss'),
	'panel'          => '',
	'priority'       => 50,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
] );

/* SITE IDENTITY */
Kirki::add_field( 'moss', [
	'type'        => 'toggle',
	'settings'    => 'title_hide',
	'label'       => esc_html__( 'Hide Site Title?', 'moss' ),
	'section'     => 'title_tagline',
	'default'     => '0',
] );
Kirki::add_field( 'moss', [
	'type'        => 'toggle',
	'settings'    => 'title_align_center',
	'label'       => esc_html__( 'Align Center?', 'moss' ),
	'section'     => 'title_tagline',
	'default'     => '0',
] );
Kirki::add_field( 'moss', [
	'type'        => 'toggle',
	'settings'    => 'hide_seedthemes_credit',
	'label'       => esc_html__( 'Hide SeedThemes Credit?', 'moss' ),
	'section'     => 'title_tagline',
	'default'     => '0',
	'priority'    => 100,
] );






/* MENU ICONS */

/* will support soon
Kirki::add_field( 'moss', [
	'type'        => 'radio-buttonset',
	'settings'    => 'menu_type',
	'label'       => esc_html__( 'Style', 'moss' ),
	'section'     => 'menu_icons',
	'default'     => 'icon',
	'choices'     => [
		'icon'   => esc_html__( 'Icon', 'moss' ),
		'image' => esc_html__( 'Image', 'moss' ),
	],
] );
*/

Kirki::add_field( 'moss', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Menu', 'moss' ),
	'section'     => 'moss_menu',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'MENU', 'moss' ),
		'field' => 'menu_label',
	],
	'button_label' => esc_html__('Add New Menu', 'moss' ),
	'settings'     => 'menu_icon_repeater',
	'default'      => [
		[
			'menu_icon' 		=> 'home',
			'menu_label'  		=> esc_html__( 'Home', 'moss' ),
			'menu_url'  		=> '/',
			'menu_active_class' => ''
		],
		[
			'menu_icon' 		=> 'info',
			'menu_label'  		=> esc_html__( 'About', 'moss' ),
			'menu_url'  		=> '/sample-page/',
			'menu_active_class' => ''
		],

	],
	'fields' => [
		'menu_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Icon', 'moss' ),
			'default'     => '',
			'choices'     => [
				'activity' => 'activity',
				'airplay' => 'airplay',
				'alert-circle' => 'alert-circle',
				'alert-octagon' => 'alert-octagon',
				'alert-triangle' => 'alert-triangle',
				'align-center' => 'align-center',
				'align-justify' => 'align-justify',
				'align-left' => 'align-left',
				'align-right' => 'align-right',
				'anchor' => 'anchor',
				'aperture' => 'aperture',
				'archive' => 'archive',
				'arrow-down-circle' => 'arrow-down-circle',
				'arrow-down-left' => 'arrow-down-left',
				'arrow-down-right' => 'arrow-down-right',
				'arrow-down' => 'arrow-down',
				'arrow-left-circle' => 'arrow-left-circle',
				'arrow-left' => 'arrow-left',
				'arrow-right-circle' => 'arrow-right-circle',
				'arrow-right' => 'arrow-right',
				'arrow-up-circle' => 'arrow-up-circle',
				'arrow-up-left' => 'arrow-up-left',
				'arrow-up-right' => 'arrow-up-right',
				'arrow-up' => 'arrow-up',
				'at-sign' => 'at-sign',
				'award' => 'award',
				'bar-chart-2' => 'bar-chart-2',
				'bar-chart' => 'bar-chart',
				'battery-charging' => 'battery-charging',
				'battery' => 'battery',
				'bell-off' => 'bell-off',
				'bell' => 'bell',
				'bluetooth' => 'bluetooth',
				'bold' => 'bold',
				'book-open' => 'book-open',
				'book' => 'book',
				'bookmark' => 'bookmark',
				'box' => 'box',
				'briefcase' => 'briefcase',
				'calendar' => 'calendar',
				'camera-off' => 'camera-off',
				'camera' => 'camera',
				'cast' => 'cast',
				'check-circle' => 'check-circle',
				'check-square' => 'check-square',
				'check' => 'check',
				'chevron-down' => 'chevron-down',
				'chevron-left' => 'chevron-left',
				'chevron-right' => 'chevron-right',
				'chevron-up' => 'chevron-up',
				'chevrons-down' => 'chevrons-down',
				'chevrons-left' => 'chevrons-left',
				'chevrons-right' => 'chevrons-right',
				'chevrons-up' => 'chevrons-up',
				'chrome' => 'chrome',
				'circle' => 'circle',
				'clipboard' => 'clipboard',
				'clock' => 'clock',
				'cloud-drizzle' => 'cloud-drizzle',
				'cloud-lightning' => 'cloud-lightning',
				'cloud-off' => 'cloud-off',
				'cloud-rain' => 'cloud-rain',
				'cloud-snow' => 'cloud-snow',
				'cloud' => 'cloud',
				'code' => 'code',
				'codepen' => 'codepen',
				'codesandbox' => 'codesandbox',
				'coffee' => 'coffee',
				'columns' => 'columns',
				'command' => 'command',
				'compass' => 'compass',
				'copy' => 'copy',
				'corner-down-left' => 'corner-down-left',
				'corner-down-right' => 'corner-down-right',
				'corner-left-down' => 'corner-left-down',
				'corner-left-up' => 'corner-left-up',
				'corner-right-down' => 'corner-right-down',
				'corner-right-up' => 'corner-right-up',
				'corner-up-left' => 'corner-up-left',
				'corner-up-right' => 'corner-up-right',
				'cpu' => 'cpu',
				'credit-card' => 'credit-card',
				'crop' => 'crop',
				'crosshair' => 'crosshair',
				'database' => 'database',
				'delete' => 'delete',
				'disc' => 'disc',
				'dollar-sign' => 'dollar-sign',
				'download-cloud' => 'download-cloud',
				'download' => 'download',
				'droplet' => 'droplet',
				'edit-2' => 'edit-2',
				'edit-3' => 'edit-3',
				'edit' => 'edit',
				'external-link' => 'external-link',
				'eye-off' => 'eye-off',
				'eye' => 'eye',
				'facebook' => 'facebook',
				'fast-forward' => 'fast-forward',
				'feather' => 'feather',
				'figma' => 'figma',
				'file-minus' => 'file-minus',
				'file-plus' => 'file-plus',
				'file-text' => 'file-text',
				'file' => 'file',
				'film' => 'film',
				'filter' => 'filter',
				'flag' => 'flag',
				'folder-minus' => 'folder-minus',
				'folder-plus' => 'folder-plus',
				'folder' => 'folder',
				'framer' => 'framer',
				'frown' => 'frown',
				'gift' => 'gift',
				'git-branch' => 'git-branch',
				'git-commit' => 'git-commit',
				'git-merge' => 'git-merge',
				'git-pull-request' => 'git-pull-request',
				'github' => 'github',
				'gitlab' => 'gitlab',
				'globe' => 'globe',
				'grid' => 'grid',
				'hard-drive' => 'hard-drive',
				'hash' => 'hash',
				'headphones' => 'headphones',
				'heart' => 'heart',
				'help-circle' => 'help-circle',
				'hexagon' => 'hexagon',
				'home' => 'home',
				'image' => 'image',
				'inbox' => 'inbox',
				'info' => 'info',
				'instagram' => 'instagram',
				'italic' => 'italic',
				'key' => 'key',
				'layers' => 'layers',
				'layout' => 'layout',
				'life-buoy' => 'life-buoy',
				'link-2' => 'link-2',
				'link' => 'link',
				'linkedin' => 'linkedin',
				'list' => 'list',
				'loader' => 'loader',
				'lock' => 'lock',
				'log-in' => 'log-in',
				'log-out' => 'log-out',
				'mail' => 'mail',
				'map-pin' => 'map-pin',
				'map' => 'map',
				'maximize-2' => 'maximize-2',
				'maximize' => 'maximize',
				'meh' => 'meh',
				'menu' => 'menu',
				'message-circle' => 'message-circle',
				'message-square' => 'message-square',
				'mic-off' => 'mic-off',
				'mic' => 'mic',
				'minimize-2' => 'minimize-2',
				'minimize' => 'minimize',
				'minus-circle' => 'minus-circle',
				'minus-square' => 'minus-square',
				'minus' => 'minus',
				'monitor' => 'monitor',
				'moon' => 'moon',
				'more-horizontal' => 'more-horizontal',
				'more-vertical' => 'more-vertical',
				'mouse-pointer' => 'mouse-pointer',
				'move' => 'move',
				'music' => 'music',
				'navigation-2' => 'navigation-2',
				'navigation' => 'navigation',
				'octagon' => 'octagon',
				'package' => 'package',
				'paperclip' => 'paperclip',
				'pause-circle' => 'pause-circle',
				'pause' => 'pause',
				'pen-tool' => 'pen-tool',
				'percent' => 'percent',
				'phone-call' => 'phone-call',
				'phone-forwarded' => 'phone-forwarded',
				'phone-incoming' => 'phone-incoming',
				'phone-missed' => 'phone-missed',
				'phone-off' => 'phone-off',
				'phone-outgoing' => 'phone-outgoing',
				'phone' => 'phone',
				'pie-chart' => 'pie-chart',
				'play-circle' => 'play-circle',
				'play' => 'play',
				'plus-circle' => 'plus-circle',
				'plus-square' => 'plus-square',
				'plus' => 'plus',
				'pocket' => 'pocket',
				'power' => 'power',
				'printer' => 'printer',
				'radio' => 'radio',
				'refresh-ccw' => 'refresh-ccw',
				'refresh-cw' => 'refresh-cw',
				'repeat' => 'repeat',
				'rewind' => 'rewind',
				'rotate-ccw' => 'rotate-ccw',
				'rotate-cw' => 'rotate-cw',
				'rss' => 'rss',
				'save' => 'save',
				'scissors' => 'scissors',
				'search' => 'search',
				'send' => 'send',
				'server' => 'server',
				'settings' => 'settings',
				'share-2' => 'share-2',
				'share' => 'share',
				'shield-off' => 'shield-off',
				'shield' => 'shield',
				'shopping-bag' => 'shopping-bag',
				'shopping-cart' => 'shopping-cart',
				'shuffle' => 'shuffle',
				'sidebar' => 'sidebar',
				'skip-back' => 'skip-back',
				'skip-forward' => 'skip-forward',
				'slack' => 'slack',
				'slash' => 'slash',
				'sliders' => 'sliders',
				'smartphone' => 'smartphone',
				'smile' => 'smile',
				'speaker' => 'speaker',
				'square' => 'square',
				'star' => 'star',
				'stop-circle' => 'stop-circle',
				'sun' => 'sun',
				'sunrise' => 'sunrise',
				'sunset' => 'sunset',
				'tablet' => 'tablet',
				'tag' => 'tag',
				'target' => 'target',
				'terminal' => 'terminal',
				'thermometer' => 'thermometer',
				'thumbs-down' => 'thumbs-down',
				'thumbs-up' => 'thumbs-up',
				'toggle-left' => 'toggle-left',
				'toggle-right' => 'toggle-right',
				'tool' => 'tool',
				'trash-2' => 'trash-2',
				'trash' => 'trash',
				'trello' => 'trello',
				'trending-down' => 'trending-down',
				'trending-up' => 'trending-up',
				'triangle' => 'triangle',
				'truck' => 'truck',
				'tv' => 'tv',
				'twitch' => 'twitch',
				'twitter' => 'twitter',
				'type' => 'type',
				'umbrella' => 'umbrella',
				'underline' => 'underline',
				'unlock' => 'unlock',
				'upload-cloud' => 'upload-cloud',
				'upload' => 'upload',
				'user-check' => 'user-check',
				'user-minus' => 'user-minus',
				'user-plus' => 'user-plus',
				'user-x' => 'user-x',
				'user' => 'user',
				'users' => 'users',
				'video-off' => 'video-off',
				'video' => 'video',
				'voicemail' => 'voicemail',
				'volume-1' => 'volume-1',
				'volume-2' => 'volume-2',
				'volume-x' => 'volume-x',
				'volume' => 'volume',
				'watch' => 'watch',
				'wifi-off' => 'wifi-off',
				'wifi' => 'wifi',
				'wind' => 'wind',
				'x-circle' => 'x-circle',
				'x-octagon' => 'x-octagon',
				'x-square' => 'x-square',
				'x' => 'x',
				'youtube' => 'youtube',
				'zap-off' => 'zap-off',
				'zap' => 'zap',
				'zoom-in' => 'zoom-in',
				'zoom-out' => 'zoom-out',
			],
		],
		'menu_label' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Label', 'moss' ),
			'default'     => '',
		],
		'menu_url'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'URL', 'moss' ),
			'default'     => '',
		],
		'menu_active_class' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Active Body Class (Optional)', 'moss' ),
			'default'     => '',
		],
		
	],
	'choices' => [
		'limit' => 5
	],
	'active_callback' => [
		[
			'setting'  => 'menu_type',
			'operator' => '==',
			'value'    => 'icon',
		]
	],
] );

Kirki::add_field( 'moss', [
	'type'        => 'multicolor',
    'settings'    => 'menu_colors',
    'label'       => esc_html__( 'Colors', 'moss' ),
    'section'     => 'moss_menu',
    'priority'    => 10,
	'alpha' 	=> true,
    'choices'     => [
		'background'=> esc_html__( 'Background', 'moss' ),
        'text'    	=> esc_html__( 'Icon and Text', 'moss' ),
        'accent'   	=> esc_html__( 'Accent', 'moss' ),
    ],
    'default'     => [
		'background'=> 'rgba(255,255,255,0.8)',
        'text'    	=> '#878f9d',
        'accent'   	=> '#00b9ae',
    ],
	
	'output' => [
		[
			'choice'   => 'background',
			'element'  => '.site-header',
			'property' => 'background-color',
        ],
		[
			'choice'   => 'text',
			'element'  => '.main-navigation a',
			'property' => 'color',
        ],
		[
			'choice'   => 'accent',
			'element'  => '.main-navigation a:active, .main-navigation a.active',
			'property' => 'color',
        ],
	],
] );

Kirki::add_field( 'moss', [
	'type'        => 'toggle',
	'settings'    => 'menu_hide_text',
	'label'       => esc_html__( 'Hide Label?', 'moss' ),
	'section'     => 'moss_menu',
	'default'     => '0',
] );





/* CONTENT SETTINGS */

Kirki::add_field( 'moss', [
	'type'        => 'multicolor',
    'settings'    => 'content_colors',
    'label'       => esc_html__( 'Colors', 'moss' ),
    'section'     => 'moss_content',
    'priority'    => 10,
    'choices'     => [
		'background'=> esc_html__( 'Background', 'moss' ),
        'text'    	=> esc_html__( 'Text', 'moss' ),
        'accent'   	=> esc_html__( 'Accent', 'moss' ),
        'link'  	=> esc_html__( 'General Link', 'moss' ),
    ],
    'default'     => [
		'background'=> '#ffffff',
        'text'    	=> '#1a1a1a',
        'accent'   	=> '#00b9ae',
        'link'  	=> '#878F9D',
    ],
	'output' => [
		[
			'choice'   => 'background',
			'element'  => '.site-mobile',
			'property' => 'background-color',
        ],
		[
			'choice'   => 'text',
			'element'  => '.site-mobile, h1 a, .site-title a, .entry-meta a',
			'property' => 'color',
        ],
		[
			'choice'   => 'accent',
			'element'  => 'h2 a, h3 a, h4 a',
			'property' => 'color',
        ],
		
		[
			'choice'   => 'link',
			'element'  => 'a',
			'property' => 'color',
        ],
	],
] );


Kirki::add_field( 'moss', [
	'type'        => 'switch',
	'settings'    => 'content_featured_image',
	'label'       => esc_html__( 'Featured Image on Page/Post', 'moss' ),
	'section'     => 'moss_content',
	'default'     => '1',
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
] );