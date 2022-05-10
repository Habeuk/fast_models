<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 * F_News Footer Section 
 * 
 * @Layout (
 *  id = "f_news_footer",
 *  label = @Translation("f_news footer"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_footer",
 *  library = "fast_models/f_news_footer",
 *  default_region = "content",
 *  regions = {
 *      "top_title" = {
 *          "label" = @Translation("top_title"),
 *      },
 *      "top_title_one" = {
 *          "label" = @Translation("top_title_one"),     
 *      },
 *      "top_title_two" = {
 *          "label" = @Translation("top_title_two"),
 *      },
 *      "top_date" = {
 *          "label" = @Translation("top_date"),     
 *      },
 *      "top_date_one" = {
 *          "label" = @Translation("top_date_one"),     
 *      },
 *      "top_date_two" = {
 *          "label" = @Translation("top_date_two"),     
 *      },
 *      "top_text_left" = {
 *          "label" = @Translation("top_text_left"),     
 *      },
 *      "text_right" = {
 *          "label" = @Translation("text_right"),     
 *      },
 *      "text_right_one" = {
 *          "label" = @Translation("text_right_one"),     
 *      },
 *      "text_right_two" = {
 *          "label" = @Translation("text_right_two"),     
 *      },
 *      "top_right_image" = {
 *          "label" = @Translation("top_right_image"),     
 *      },
 *      "top_right_image_one" = {
 *          "label" = @Translation("top_right_image_one"),     
 *      },
 *      "top_right_image_two" = {
 *          "label" = @Translation("top_right_image_two"),
 *      },
 *      "top_icon" = {
 *          "label" = @Translation("top_icon"),     
 *      },
 *      "top_icon_one" = {
 *          "label" = @Translation("top_icon_one"),     
 *      },
 *      "top_icon_two" = {
 *          "label" = @Translation("top_icon_two"),
 *      },
 *      "top_link" = {
 *          "label" = @Translation("top_link"),     
 *      },
 *      "top_link_one" = {
 *          "label" = @Translation("top_link_one"),     
 *      },
 *      "top_link_two" = {
 *          "label" = @Translation("top_link_two"),     
 *      },
 *      "top_link_three" = {
 *          "label" = @Translation("top_link_three"),     
 *      },
 *      "top_link_four" = {
 *          "label" = @Translation("top_link_four"),     
 *      },
 *      "top_link_five" = {
 *          "label" = @Translation("top_link_five"),     
 *      },
 *      "top_link_six" = {
 *          "label" = @Translation("top_link_six"),     
 *      },
 *      "top_link_seven" = {
 *          "label" = @Translation("top_link_seven"),     
 *      },
 *      "top_link_eight" = {
 *          "label" = @Translation("top_link_eight"),     
 *      },
 *      "top_link_nine" = {
 *          "label" = @Translation("top_link_nine"),     
 *      },
 *      "top_link_ten" = {
 *          "label" = @Translation("top_link_ten"),     
 *      },
 *      "bottom_link" = {
 *          "label" = @Translation("bottom_link"),     
 *      },
 *      "bottom_link_one" = {
 *          "label" = @Translation("bottom_link_one"),     
 *      },
 *      "bottom_link_two" = {
 *          "label" = @Translation("bottom_link_two"),     
 *      },
 *      "bottom_copy" = {
 *          "label" = @Translation("bottom_copy"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsFooterSection extends FormatageModels 
{
    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_footer_map.png");
    }

    /**
     * 
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     * 
     */
    public function build(array $regions) 
    {
        
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        
        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     * 
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'part_one' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Col one',
                    'loader' => 'static'
                ],
                'fields' => [
                    'top_title' => [
                        'text_html' => [
                            'label' => 'Titre 1',
                            'value' => "follow us"
                        ]
                    ],
                    'top_text_left' => [
                        'text_html' => [
                            'label' => 'Paragraphe',
                            'value' => "Pro eu apeirian suavitate dissentiet, qui dicunt ancillae id, ne mea homero persequeris"
                        ]
                    ],
                    'top_icon' => [
                        'text_html' => [
                            'label' => 'icone 1',
                            'value' => "<a href='#' class='facebook'>
                                            <svg xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 320 512'>
                                                <path
                                                  d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z' />
                                            </svg>
                                        </a>"
                        ]
                    ],
                    'top_icon_one' => [
                        'text_html' => [
                            'label' => 'icone 2',
                            'value' => "<a href='#' class='twitter'>
                                            <svg xmlns='http://www.w3.org/2000/svg'
                                            viewBox='0 0 512 512'>

                                                <path
                                                    d='M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z' />
                                            </svg>
                                        </a>"
                        ]
                    ],
                    'top_icon_two' => [
                        'text_html' => [
                            'label' => 'icone 3',
                            'value' => "<a href='#' class='instagram'>                    
                                            <svg xmlns='http://www.w3.org/2000/svg'
                                                viewBox='0 0 448 512'>

                                                <path
                                                    d='M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z' />
                                            </svg>
                                        </a>"
                        ]
                    ],
                ]
            ],
            'part_two' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Col two',
                    'loader' => 'static'
                ],
                'fields' => [
                    'top_title_one' => [
                        'text_html' => [
                            'label' => 'Titre 2',
                            'value' => "explore"
                        ]
                    ],
                    'top_link' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "<a href='#'>finance</a>"
                        ]
                    ],
                    'top_link_one' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "<a href='#'>health</a>"
                        ]
                    ],
                    'top_link_two' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => "<a href='#'>lifestyle</a>"
                        ]
                    ],
                    'top_link_three' => [
                        'text_html' => [
                            'label' => 'lien 4',
                            'value' => "<a href='#'>sport</a>"
                        ]
                    ],
                    'top_link_four' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "<a href='#'>tech</a>"
                        ]
                    ],
                    'top_link_five' => [
                        'text_html' => [
                            'label' => 'lien 6',
                            'value' => "<a href='#'>world</a>"
                        ]
                    ]
                ]
            ],
            'part_three' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Col three',
                    'loader' => 'static'
                ],
                'fields' => [
                    'top_title_two' => [
                        'text_html' => [
                            'label' => 'Titre 3',
                            'value' => "company"
                        ]
                    ],
                    'top_link_six' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "<a href='#'>archive</a>"
                        ]
                    ],
                    'top_link_seven' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "<a href='#'>services</a>"
                        ]
                    ],
                    'top_link_eight' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => "<a href='#'>contact us</a>"
                        ]
                    ],
                    'top_link_nine' => [
                        'text_html' => [
                            'label' => 'lien 4',
                            'value' => "<a href='#'>journalists</a>"
                        ]
                    ],
                    'top_link_ten' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "<a href='#'>opinions</a>"
                        ]
                    ]
                ]
            ],
            'part_four' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Col four',
                    'loader' => 'static'
                ],
                'fields' => [
                    'top_right_image' => [
                        'text_html' => [
                            'label' => 'Titre 3',
                            'value' => "<a href='#' class='fn-article__img'>
                                            <img src='https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg' alt=''>
                                        </a>"
                        ]
                    ],
                    'text_right' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "Here’s what happened to the stock market"
                        ]
                    ],
                    'top_date' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "04 may, 2020"
                        ]
                    ],
                    'top_right_image_one' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => "<a href='#' class='fn-article__img'>
                                            <img src='https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg' alt=''>
                                        </a>"
                        ]
                    ],
                    'text_right_one' => [
                        'text_html' => [
                            'label' => 'lien 4',
                            'value' => "Here’s what happened to the stock market"
                        ]
                    ],
                    'top_date_one' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "04 may, 2020"
                        ]
                    ],
                    'top_right_image_two' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "<a href='#' class='fn-article__img'>
                                            <img src='https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg' alt=''>
                                        </a>"
                        ]
                    ],
                    'text_right_two' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "Here’s what happened to the stock market"
                        ]
                    ],
                    'top_date_two' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "04 may, 2020"
                        ]
                    ]
                ]
            ],
            'part_four' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'footer two',
                    'loader' => 'static'
                ],
                'fields' => [
                    'bottom_copy' => [
                        'text_html' => [
                            'label' => 'copyright',
                            'value' => "Copyright © 2019 Flashy+"
                        ]
                    ],
                    'bottom_link' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "<a href='#'>Privacy</a>"
                        ]
                    ],
                    'bottom_link_one' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "<a href='#'>term and conditions</a>"
                        ]
                    ],
                    'bottom_link_two' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => "<a href='#'>contact</a>"
                        ]
                    ]
                ]
            ]
        ];
    }

}