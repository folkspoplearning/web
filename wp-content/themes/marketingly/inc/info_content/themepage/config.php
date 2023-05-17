<?php
defined("ABSPATH") || exit();

class SuperbInfoContentConfig
{
    const THEME_LINK = 'https://superbthemes.com/marketingly/';
    const DEMO_LINK = 'https://superbthemes.com/demo/marketingly/';

    private $FEATURES = array();

    public function __construct()
    {
        $this->AddFeature(__("Customize Header Logo, Text & Background Color", "marketingly"), "purple-paint-brush.svg");
        $this->AddFeature(__("Translation Ready", "marketingly"), "purple-article-medium.svg");
        $this->AddFeature(__("Fully SEO Optimized", "marketingly"), "purple-gauge.svg");
        $this->AddFeature(__("Customize All Fonts", "marketingly"), "purple-article-medium.svg");
        $this->AddFeature(__("Customize All Colors", "marketingly"), "purple-paint-brush.svg");
        $this->AddFeature(__("Importable Demo Content", "marketingly"), "purple-images.svg");
        $this->AddFeature(__("Elementor Compatible", "marketingly"), "purple-elementor-logo.svg");
        $this->AddFeature(__("Replace Copyright Text", "marketingly"), "purple-copyright.svg");
        $this->AddFeature(__("Full-Width Page Template", "marketingly"), "purple-frame-corners.svg");
        $this->AddFeature(__("Access All Child Themes", "marketingly"), "purple-images.svg");
        $this->AddFeature(__("Customer Support and Documentation", "marketingly"), "purple-files.svg");
        $this->AddFeature(__("Multiple Website Support", "marketingly"), "purple-files.svg");

        $this->AddFeature(__("Custom Text On Header Image", "marketingly"), "gear.svg");
        $this->AddFeature(__("Only Show Header Image On Front Page", "marketingly"), "gear.svg");
        $this->AddFeature(__("Only Show Upper Widgets On Front Page", "marketingly"), "gear.svg");
        $this->AddFeature(__("Full Width (Hide Sidebar)", "marketingly"), "gear.svg");
        $this->AddFeature(__("Elementor Compatible", "marketingly"), "gear.svg");
        $this->AddFeature(__("Show Header Everywhere", "marketingly"), "gear.svg");
        $this->AddFeature(__("Full Width Page & Post Template", "marketingly"), "gear.svg");

        $this->AddFeature(__("Remove 'Tag' from Tag Page Title", "marketingly"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Author' from Author Page Title", "marketingly"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Category' from Category Page Title", "marketingly"), "purple-article-medium.svg");
    }

    private function AddFeature($title, $icon)
    {
        $this->FEATURES[] = array(
            "title" => $title,
            "icon" => $icon
        );
    }

    public function GetFeatures()
    {
        return $this->FEATURES;
    }
}
