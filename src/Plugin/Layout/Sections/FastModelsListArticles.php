<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast Models fn list articles section 
 * 
 * @Layout(
 *  id = "fast_models_list_articles",
 *  label = @Translation("fast_models_list_articles"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_list_articles",
 *  library = "fast_models/fast_models_list_articles",
 *  default_region = "articles_title",
 *  regions = {
 *      "articles_title" = {
 *          "label" = @Translation("articles_title"),     
 *      },
 *      "articles_links" = {
 *          "label" = @Translation("articles_links"),     
 *      }
 *  }
 * )
 * 
 */
class FastModelsListArticles extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'fast_models') . "/icons/sections/fast_models_list_articles_map.png");
    }

    /**
     * 
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     * 
     */
    public function build(array $regions) {

        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmla' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'articles_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ""
                        ]
                    ],
                    'articles_links' => [
                        'text_html' => [
                            'label' => 'Liens',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }
}
