<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'content-management' => [		'title' => 'Content management',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Pages',		'fields' => [			'title' => 'Title',			'category-id' => 'Categories',			'tag-id' => 'Tags',			'page-text' => 'Text',			'excerpt' => 'Excerpt',			'featured-image' => 'Featured image',		],	],
		'settings' => [		'title' => 'Settings',		'fields' => [		],	],
		'site-settings' => [		'title' => 'Site settings',		'fields' => [			'site-title' => 'Site title',			'admin-email' => 'Admin email',			'your-copyright-message' => 'Your copyright message',			'delete-auctions-older-than' => 'Delete auctions older than',			'created-by' => 'Created by',			'results-shown-per-page' => 'Results shown per page',			'users-confirmation-method' => 'Users confirmation method',			'default-country' => 'Default country',			'default-language' => 'Default language',		],	],
		'auction-settings' => [		'title' => 'Auction settings',		'fields' => [			'allow-custom-increments' => 'Allow custom increments',			'hours-until-auction-ends-count-down' => 'Hours until auction ends count down',			'enable-featured-items' => 'Enable featured items',			'enable-auctions-auto-extension' => 'Enable auctions auto extension',			'extend-auction-by' => 'Extend auction by',			'during-the-last' => 'During the last',			'activate-picture-gallery' => 'Activate picture gallery',			'max-number-of-pictures' => 'Max number of pictures',			'max-pictures-size' => 'Max pictures size',			'thumbnails-size' => 'Thumbnails size',			'created-by' => 'Created by',			'bidder-privacy' => 'Activate Bidder Privacy?',		],	],
		'currency-settings' => [		'title' => 'Currency settings',		'fields' => [			'site-currency' => 'Site currency',			'money-format' => 'Money format',			'decimal-digits' => 'Decimal digits',			'symbol-position' => 'Symbol position',			'created-by' => 'Created by',		],	],
		'time-settings' => [		'title' => 'Time settings',		'fields' => [			'date-format' => 'Date format',			'time-zone' => 'Time zone',			'created-by' => 'Created by',		],	],
		'seo-settings' => [		'title' => 'Seo settings',		'fields' => [			'meta-description-tag' => 'Meta description tag',			'meta-keywords-tag' => 'Meta keywords tag',			'created-by' => 'Created by',		],	],
		'fee-settings' => [		'title' => 'Fee settings',		'fields' => [		],	],
		'payment-gateways' => [		'title' => 'Payment gateways',		'fields' => [		],	],
		'paypal' => [		'title' => 'Paypal',		'fields' => [			'is-enabled' => 'Enable/Disable',			'paypal-email-address' => 'Paypal email address',			'mode' => 'Mode',			'created-by' => 'Created by',		],	],
		'categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'category' => [		'title' => 'Category',		'fields' => [			'category' => 'Category',			'created-by' => 'Created by',		],	],
		'sub-catogories' => [		'title' => 'Sub catogories',		'fields' => [			'category' => 'Category ',			'sub-category' => 'Sub category',			'created-by' => 'Created by',		],	],
		'auctions' => [		'title' => 'Auctions',		'fields' => [		],	],
		'create' => [		'title' => 'Create',		'fields' => [			'title' => 'Title',			'category' => 'Category id',			'sub-category' => 'Sub category ',			'description' => 'Description',			'start-date' => 'Start date',			'end-date' => 'End date',			'minimum-bid' => 'Minimum bid',			'reserve-price' => 'Reserve price',			'buy-now-price' => 'Buy now price',			'bid-increment' => 'Bid increment',			'shipping-conditions' => 'Shipping conditions',			'international-shipping' => 'International shipping',			'shipping-terms' => 'Shipping terms',			'make-featured' => 'Make featured',			'status' => 'Status',			'created-by' => 'Created by',			'user' => 'Seller ID',			'images' => 'Images',		],	],
		'testmonies' => [		'title' => 'Testmonies',		'fields' => [		],	],
		'testmony' => [		'title' => 'Testmony',		'fields' => [			'user' => 'User id',			'testmony' => 'Testmony',			'status' => 'Status',			'created-by' => 'Created by',		],	],
		'social-logins' => [		'title' => 'Social logins',		'fields' => [			'facebook-client-id' => 'Facebook client id',			'facebook-client-secret' => 'Facebook client secret',			'facebook-redirect-url' => 'Facebook redirect url',			'facebook-login-enable' => 'Facebook login enable',			'google-client-id' => 'Google client id',			'google-client-secret' => 'Google client secret',			'google-redirect-url' => 'Google redirect url',			'google-login-enable' => 'Google login enable ?',			'created-by' => 'Created by',		],	],
		'email-settings' => [		'title' => 'Email settings',		'fields' => [		],	],
		'templates' => [		'title' => 'Templates',		'fields' => [			'key' => 'Key',			'type' => 'Type',			'subject' => 'Subject',			'from-email' => 'From email',			'from-name' => 'From name',			'content' => 'Content',			'created-by' => 'Created by',		],	],
		'news-letter' => [		'title' => 'News letter',		'fields' => [		],	],
		'create-letter' => [		'title' => 'Create letter',		'fields' => [			'to' => 'To',			'title' => 'Title',			'message' => 'Message',			'created-by' => 'Created by',		],	],
		'social-networks' => [		'title' => 'Social networks',		'fields' => [		],	],
		'location-master' => [		'title' => 'Location master',		'fields' => [		],	],
		'countries' => [		'title' => 'Countries',		'fields' => [			'shortcode' => 'Shortcode',			'title' => 'Title',			'created-by' => 'Created by',		],	],
		'states' => [		'title' => 'States',		'fields' => [			'state' => 'State',			'country' => 'Country',			'created-by' => 'Created by',		],	],
		'cities' => [		'title' => 'Cities',		'fields' => [			'city' => 'City',			'country' => 'Country',			'state' => 'State',			'created-by' => 'Created by',		],	],
	'global_title' => 'E-Auction',
];