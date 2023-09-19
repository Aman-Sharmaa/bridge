<?php
if(!function_exists('bridge_qode_import_export_options_map')) {
    /**
     * Import/Export options page
     */
    function bridge_qode_import_export_options_map(){

        $importexportPage = new BridgeQodeAdminPage("_importexport",  esc_html__( 'Import/Export Options', 'bridge'), "fa fa-database");
        bridge_qode_framework()->qodeOptions->addAdminPage("Import/Export Options", $importexportPage);


        $panel1 = new BridgeQodeImportExport( esc_html__( 'Import/Export Options', 'bridge'), "importexport_section");
		$importexportPage->addChild("panel1", $panel1);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_import_export_options_map',215);
}