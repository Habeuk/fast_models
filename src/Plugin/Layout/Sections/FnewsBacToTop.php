<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * f_news bac to top
 * 
 * @Layout (
 *  id = "fast_model_fnews_bac_top",
 *  label = @Translation("f_news bac to top"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_bac_to_top",
 *  library = "fast_models/f_news_bac_to_top",
 *  default_region = "icon",
 *  regions = {
 *      "icon" = {
 *          "label" = @Translation("icon"),
 *      },
  *     "service_text" = {
 *          "label" = @Translation("service_text"),
 *      },
 *      "service_link" = {
 *          "label" = @Translation("service_link"),
 *      },
 *      "service_link_one" = {
 *          "label" = @Translation("service_link_one"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsFirstServiceSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/f_news_bac_top.png");
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
            'bac_to_top' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => '<i class="wbu-angles-up"></i>'
                        ]
                    ]
                    
                ]
            ]
        ];
    }

}